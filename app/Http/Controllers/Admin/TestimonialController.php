<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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

    public function index() {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'country' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',

        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->designation = $request->designation;
        $testimonial->country = $request->country;
        $testimonial->title = $request->title;
        // Handle image upload
        if ($request->hasFile('image')) {
            $testimonial->image = $this->handleFileUpload($request->file('image'), 'testimonial/images');
        }
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        // Find the testimonial by ID
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->designation = $request->designation;
        $testimonial->country = $request->country;
        $testimonial->title = $request->title;
        if ($request->hasFile('image')) {
            $this->handleFileDelete($testimonial->image);
            $testimonial->image = $this->handleFileUpload($request->file('image'), 'testimonial/images');
        }
        // Save the updated testimonial
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }
    public function toggleStatus($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = !$testimonial->status;
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial status updated successfully.');
    }



    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->handleFileDelete($testimonial->image);
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
