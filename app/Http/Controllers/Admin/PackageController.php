<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageCategory;
use App\Models\PackageFeature;
use App\Models\PackageMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $categories = PackageCategory::where('status', 1)->get();
        $packages = Package::with('media')->get();
        $packageimages = PackageMedia::all();
        $packageFeatures = PackageFeature::all();
        return view('admin.tour-package.index',compact('categories','packages','packageFeatures'));
    }

    public function create()
    {
        $categories = PackageCategory::where('status', 1)->get();
        return view('admin.tour-package.create',compact('categories'));
    }


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

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:package_categories,id',
            'location' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'offer' => 'nullable|string|max:255',
            'holiday_theme' => 'nullable|string|max:255',
            'map_url' => 'nullable|string',
        ]);
        $package = new Package();
        $package->package_name = $request->package_name;
        $slug = Str::slug($request->package_name);
        $package->slug = $slug;
        $package->location = $request->location;
        $package->country = $request->country;
        $package->duration = $request->duration;
        $package->price = $request->price;
        $package->offer = $request->offer;
        $package->category_id = $request->category_id;
        $package->map_url = $request->map_url;
        $package->holiday_theme = $request->holiday_theme;
        $package->save();

        return redirect()->route('package.index')->with('success', 'Package created successfully.');
    }


    public function edit($id)
    {

        $categories = PackageCategory::where('status', 1)->get();
        $package = Package::findOrFail($id);
        return view('admin.tour-package.edit',[

            'categories' => $categories,
            'package' => $package,

        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'package_name' => 'nullable|string|max:255',
            'category_id' => 'required|integer|exists:package_categories,id',
            'location' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'offer' => 'nullable|string|max:255',
            'holiday_theme' => 'nullable|string|max:255',
            'map_url' => 'nullable|string',
        ]);
        $package = Package::findOrFail($id);
        $package->package_name = $request->package_name;
        $slug = Str::slug($request->package_name);
        $package->slug = $slug;
        $package->location = $request->location;
        $package->country = $request->country;
        $package->duration = $request->duration;
        $package->price = $request->price;
        $package->offer = $request->offer;
        $package->category_id = $request->category_id;
        $package->map_url = $request->map_url;
        $package->holiday_theme = $request->holiday_theme;
        $package->save();

        return redirect()->route('package.index')->with('success', 'Package updated successfully.');
    }

    public function featureUpdate(Request $request, $id)
    {
        $request->validate([
            'feature_title.*' => 'nullable|string|max:255',
            'icons.*' => 'nullable|image|max:2048', // Validate images properly
        ]);

        try {
            DB::beginTransaction();

            // Find package
            $package = Package::findOrFail($id);

            // Get existing features for this package
            $existingFeatureIds = $package->features()->pluck('id')->toArray();

            $updatedFeatureIds = []; // Store updated or new feature IDs

            if ($request->has('feature_title')) {
                foreach ($request->feature_title as $index => $featureTitle) {
                    $featureId = $request->feature_ids[$index] ?? null; // Get feature ID if provided
                    $featureImage = $request->file('icons')[$index] ?? null; // Corrected file input name

                    if ($featureId && in_array($featureId, $existingFeatureIds)) {
                        // Update existing feature
                        $feature = PackageFeature::findOrFail($featureId);
                        $feature->feature_title = $featureTitle;

                        // Handle new image upload
                        if ($featureImage) {
                            $this->handleFileDelete($feature->icon); // Delete old image
                            $feature->icon = $this->handleFileUpload($featureImage, 'icon');
                        }

                        $feature->save();
                        $updatedFeatureIds[] = $featureId; // Add to updated list
                    } elseif (!$featureId) {
                        // Add new feature
                        $feature = new PackageFeature();
                        $feature->feature_title = $featureTitle;
                        $feature->package_id = $package->id;

                        // Handle image upload
                        if ($featureImage) {
                            $feature->icon = $this->handleFileUpload($featureImage, 'icon');
                        }

                        $feature->save();
                        $updatedFeatureIds[] = $feature->id; // Add to updated list
                    }
                }
            }

            // Remove features that were not updated (i.e., deleted by the user)
            $featuresToDelete = array_diff($existingFeatureIds, $updatedFeatureIds);
            if (!empty($featuresToDelete)) {
                // Delete associated images before removing features
                $features = PackageFeature::whereIn('id', $featuresToDelete)->get();
                foreach ($features as $feature) {
                    $this->handleFileDelete($feature->icon); // Delete image
                    $feature->delete();
                }
            }

            DB::commit();
            return redirect()->back()->with('message', 'Features updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while updating the features. Please try again.']);
        }
    }



    public function toggleStatus($id)
    {
        $package = Package::findOrFail($id);
        $package->status = !$package->status;
        $package->save();
        return redirect()->route('package.index')->with('success', 'Package status updated successfully.');
    }


    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        $packageImages = PackageMedia::where('package_id', $package->id)->get();

        if ($packageImages->isNotEmpty()) {
            foreach ($packageImages as $packageImage) {
                $this->handleFileDelete($packageImage->image);
                $packageImage->delete();
            }
        }
        $package->delete();

        return redirect()->route('package.index')->with('success', 'Package deleted successfully.');
    }

    public function imagesStore(Request $request, $id)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'exists:package_media,id',
        ]);

        $package = Package::findOrFail($id);

        // Handle image deletion
        if ($request->filled('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = PackageMedia::findOrFail($imageId);
                $this->handleFileDelete($image->image); // Assuming this method deletes the file from storage
                $image->delete();
            }
        }

        // Handle new images upload
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imageFile) {
                $package->media()->create([
                    'image' => $this->handleFileUpload($imageFile, 'package/images'), // Assuming this method handles file upload
                ]);
            }
        }

        return redirect()->route('package.index')->with('success', 'Package Images Updated successfully.');
    }



    // public function imagesStore(Request $request) {

    //     // dd($request->all());

    //     $request->validate([
    //         'package_id' => 'nullable|string|max:255',
    //         'image' => 'nullable|array',  // Handle multiple image files
    //         'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Validate each individual image
    //     ]);

    //     if ($request->hasFile('image')) {
    //         // Iterate through each uploaded image
    //         foreach ($request->file('image') as $file) {
    //             // Upload the file and get the image path
    //             $imagePath = $this->handleFileUpload($file, 'package/images');

    //             // Create a new ServiceImage record with the package_id and image path
    //             PackageMedia::create([
    //                 'package_id' => $request->package_id,
    //                 'image' => $imagePath,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('package.index')->with('success', 'package Images Updated successfully.');
    // }


    public function imagesDestroy($id)
    {
        $packageImage = PackageMedia::findOrFail($id);
        if ($packageImage->image && Storage::exists('public/' . $packageImage->image)) {
            Storage::delete('public/' . $packageImage->image);
        }
        $packageImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

}
