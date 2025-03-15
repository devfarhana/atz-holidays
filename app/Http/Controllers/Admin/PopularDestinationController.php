<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Destination;;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopularDestinationController extends Controller
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
        $allDestination = Destination::all();
        $allcountries = Country::with('destination')->get();
        $destinationcountries = Country::with('destination')->where('status', 1)->get();

        return view('admin.popular-destination.index', compact('allDestination', 'allcountries', 'destinationcountries'));
    }
    public function storeCountry(Request $request)
    {

        $request->validate([
            'country_name' => 'required|string|max:255|unique:countries,country_name',
        ]);

        $countries = new Country();
        $countries->country_name = $request->country_name;
        $countries->save();
        return redirect()->route('popular-destination.index')->with('success', 'Country Added successfully.');
    }
    public function updateCountry(Request $request, $id)
    {

        $request->validate([
            'country_name' => 'required|string|max:255|unique:countries,country_name',
        ]);
        $countries = Country::findOrFail($id);
        $countries->country_name = $request->country_name;
        $countries->save();
        return redirect()->route('popular-destination.index')->with('success', 'Country updated successfully.');
    }
    public function toggleCountryStatus($id)
    {
        $countries = Country::findOrFail($id);
        $countries->status = !$countries->status;
        $countries->save();
        return redirect()->route('popular-destination.index')->with('success', 'Country status updated successfully.');
    }
    public function destroyCountry($id)
    {
        $countries = Country::findOrFail($id);
        if ($countries->destination()->exists()) {
            return redirect()->route('popular-destination.index')->with('success', 'Cannot delete Country as it is associated with Destination.');
        }
        $countries->delete();
        return redirect()->route('popular-destination.index')->with('danger', ' Country deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination_name' => 'required|string|max:255',
            'country_id' => 'nullable|exists:countries,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $destination = new Destination();
        $destination->destination_name = $request->destination_name;
        $destination->country_id = $request->country_id;
        // Handle image upload
        if ($request->hasFile('image')) {
            $destination->image = $this->handleFileUpload($request->file('image'), 'destination/images');
        }
        $destination->save();
        return redirect()->route('popular-destination.index')->with('success', 'Destination created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'destination_name' => 'nullable|string|max:255',
            'country_id' => 'nullable|exists:countries,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->destination_name = $request->destination_name;
        $destination->country_id = $request->country_id;
        if ($request->hasFile('image')) {
            if ($destination->image) {
                $this->handleFileDelete($destination->image);
            }
            $destination->image = $this->handleFileUpload($request->file('image'), 'destination/images');
        }

        $destination->save();

        return redirect()->route('popular-destination.index')->with('success', 'Destination updated successfully.');
    }
    public function toggleStatus($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->status = !$destination->status;
        $destination->save();
        return redirect()->route('popular-destination.index')->with('success', 'Destination status updated successfully.');
    }



    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $this->handleFileDelete($destination->image);
        $destination->delete();
        return redirect()->route('popular-destination.index')->with('success', 'Destination deleted successfully.');
    }
}
