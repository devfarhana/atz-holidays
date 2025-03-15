<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurService;
use Illuminate\Support\Str;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceExtra;
use Illuminate\Support\Facades\Storage;

class OurServiceController extends Controller
{
    private function handleFileUpload($file, $path)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }

    public function index()
    {
        $services = OurService::all();
        $serviceimages = ServiceImage::all();
        $serviceextras = ServiceExtra::all();

        return view('admin.our-service.index', compact('services','serviceimages','serviceextras'));
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = new OurService();
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $service->image = $this->handleFileUpload($request->file('image'), 'service/images');
        }


        $service->save();
        return redirect()->route('our-service.index')->with('success', 'service created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = OurService::findOrFail($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image
            $this->handleFileDelete($service->image);
            // Upload new image
            $service->image = $this->handleFileUpload($request->file('image'), 'service/images');
        }

        $service->save();

        return redirect()->route('our-service.index')->with('success', 'Service updated successfully.');
    }

    public function toggleStatus($id)
    {
        $Service = OurService::findOrFail($id);
        $Service->status = !$Service->status;
        $Service->save();
        return redirect()->route('our-service.index')->with('success', 'Service status updated successfully.');
    }

    public function destroy($id)
    {
        $service = OurService::findOrFail($id);

        // Delete associated image if it exists
        $this->handleFileDelete($service->image);

        // Delete the service record
        $service->delete();

        return redirect()->route('our-service.index')->with('success', 'Service deleted successfully.');
    }

    public function imagesStore(Request $request) {

        // dd($request->all());

        $request->validate([
            'service_id' => 'nullable|string|max:255',
            'image' => 'nullable|array',  // Handle multiple image files
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Validate each individual image
        ]);

        if ($request->hasFile('image')) {
            // Iterate through each uploaded image
            foreach ($request->file('image') as $file) {
                // Upload the file and get the image path
                $imagePath = $this->handleFileUpload($file, 'service/images');

                // Create a new ServiceImage record with the service_id and image path
                ServiceImage::create([
                    'service_id' => $request->service_id,
                    'image' => $imagePath,
                ]);
            }
        }

        return redirect()->route('our-service.index')->with('success', 'service Images Updated successfully.');
    }


    public function imagesDestroy($id)
    {
        $serviceImage = ServiceImage::findOrFail($id);
        if ($serviceImage->image && Storage::exists('public/' . $serviceImage->image)) {
            Storage::delete('public/' . $serviceImage->image);
        }
        $serviceImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function extraStore(Request $request, $id)
    {
        $request->validate([
            'service_id' => 'nullable|string|max:255',
            'first_title' => 'nullable|string|max:255',
            'first_details' => 'nullable|string',
            'second_title' => 'nullable|string|max:255',
            'second_details' => 'nullable|string',
            'third_title' => 'nullable|string|max:255',
            'third_details' => 'nullable|string',
        ]);

        // Check if ServiceExtra already exists
        $serviceExtra = ServiceExtra::where('service_id', $request->service_id)->first();

        if ($serviceExtra) {
            // Update existing record
            $serviceExtra->update([
                'first_title' => $request->first_title,
                'first_details' => $request->first_details,
                'second_title' => $request->second_title,
                'second_details' => $request->second_details,
                'third_title' => $request->third_title,
                'third_details' => $request->third_details,
            ]);
        } else {
            // Create a new record
            ServiceExtra::create([
                'service_id' => $request->service_id,
                'first_title' => $request->first_title,
                'first_details' => $request->first_details,
                'second_title' => $request->second_title,
                'second_details' => $request->second_details,
                'third_title' => $request->third_title,
                'third_details' => $request->third_details,
            ]);
        }

        return redirect()->route('our-service.index')->with('success', 'Service Information Updated successfully.');
    }



}
