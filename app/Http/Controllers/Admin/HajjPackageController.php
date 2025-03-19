<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HajjPackage;
use App\Models\HajjPackageFeature;
use App\Models\HajjPackageImages;
use App\Models\HajjPackageOrder;
use App\Models\HajjPackageVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class HajjPackageController extends Controller
{
    public function index()
    {
        $packages = HajjPackage::with('media')->get();
        $packageimages = HajjPackageImages::all();
        $packageFeatures = HajjPackageFeature::all();
        return view('admin.tour-package.hajj-package.index',compact('packages','packageFeatures','packageimages'));
    }

    public function create()
    {

        return view('admin.tour-package.hajj-package.create');
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
            'location' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'offer' => 'nullable|string|max:255',
            'holiday_theme' => 'nullable|string|max:255',
            'map_url' => 'nullable|string',
        ]);
        $package = new HajjPackage();
        $package->package_name = $request->package_name;
        $slug = Str::slug($request->package_name);
        $package->slug = $slug;
        $package->location = $request->location;
        $package->country = $request->country;
        $package->duration = $request->duration;
        $package->price = $request->price;
        $package->offer = $request->offer;
        $package->map_url = $request->map_url;
        $package->holiday_theme = $request->holiday_theme;
        $package->save();

        return redirect()->route('hajj-package.index')->with('success', 'Package created successfully.');
    }


    public function edit($id)
    {


        $package = HajjPackage::findOrFail($id);
        return view('admin.tour-package.hajj-package.edit',[
            'package' => $package,

        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'package_name' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'offer' => 'nullable|string|max:255',
            'holiday_theme' => 'nullable|string|max:255',
            'map_url' => 'nullable|string',
        ]);
        $package = HajjPackage::findOrFail($id);
        $package->package_name = $request->package_name;
        $slug = Str::slug($request->package_name);
        $package->slug = $slug;
        $package->location = $request->location;
        $package->country = $request->country;
        $package->duration = $request->duration;
        $package->price = $request->price;
        $package->offer = $request->offer;
        $package->map_url = $request->map_url;
        $package->holiday_theme = $request->holiday_theme;
        $package->save();

        return redirect()->route('hajj-package.index')->with('success', 'Package updated successfully.');
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
            $package = HajjPackage::findOrFail($id);

            // Get existing features for this package
            $existingFeatureIds = $package->features()->pluck('id')->toArray();

            $updatedFeatureIds = []; // Store updated or new feature IDs

            if ($request->has('feature_title')) {
                foreach ($request->feature_title as $index => $featureTitle) {
                    $featureId = $request->feature_ids[$index] ?? null; // Get feature ID if provided
                    $featureImage = $request->file('icons')[$index] ?? null; // Corrected file input name

                    if ($featureId && in_array($featureId, $existingFeatureIds)) {
                        // Update existing feature
                        $feature = HajjPackageFeature::findOrFail($featureId);
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
                        $feature = new HajjPackageFeature();
                        $feature->feature_title = $featureTitle;
                        $feature->hajj_packages_id = $package->id;

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
                $features = HajjPackageFeature::whereIn('id', $featuresToDelete)->get();
                foreach ($features as $feature) {
                    $this->handleFileDelete($feature->icon); // Delete image
                    $feature->delete();
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Features updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while updating the features. Please try again.']);
        }
    }



    public function toggleStatus($id)
    {
        $package = HajjPackage::findOrFail($id);
        $package->status = !$package->status;
        $package->save();
        return redirect()->route('hajj-package.index')->with('success', 'Package status updated successfully.');
    }
    public function togglehotDeals($id)
    {
        $package = HajjPackage::findOrFail($id);
        $package->hot_deal = !$package->hot_deal;
        $package->save();
        return redirect()->route('hajj-package.index')->with('success', 'Package status updated successfully.');
    }


    public function destroy($id)
    {
        $package = HajjPackage::findOrFail($id);

        $packageImages = HajjPackageImages::where('hajj_packages_id', $package->id)->get();

        if ($packageImages->isNotEmpty()) {
            foreach ($packageImages as $packageImage) {
                $this->handleFileDelete($packageImage->image);
                $packageImage->delete();
            }
        }
        $package->delete();

        return redirect()->route('hajj-package.index')->with('success', 'Package deleted successfully.');
    }


    public function hajimagesStore(Request $request) {

        // dd($request->all());

        $request->validate([
            'hajj_packages_id' => 'nullable|string|max:255',
            'image' => 'nullable|array',  // Handle multiple image files
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Validate each individual image
        ]);

        if ($request->hasFile('image')) {
            // Iterate through each uploaded image
            foreach ($request->file('image') as $file) {
                // Upload the file and get the image path
                $imagePath = $this->handleFileUpload($file, 'hajj-package/images');

                // Create a new ServiceImage record with the service_id and image path
                HajjPackageImages::create([
                    'hajj_packages_id' => $request->hajj_packages_id,
                    'image' => $imagePath,
                ]);
            }
        }

        return redirect()->route('hajj-package.index')->with('success', 'hajj-package Images Updated successfully.');
    }

    public function imagesDestroy($id)
    {
        $hajjImage = HajjPackageImages::findOrFail($id);
        if ($hajjImage->image && Storage::exists('public/' . $hajjImage->image)) {
            Storage::delete('public/' . $hajjImage->image); // Delete the image from storage
        }
        $hajjImage->delete(); // Delete the record from the database

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function orderPackage()
    {
        $orders = HajjPackageOrder::with('package')->get();
        return view('admin.tour-package.hajj-package.order',compact('orders'));
    }
    public function orderDetails($id)
    {
        $order = HajjPackageOrder::with('package')->findOrFail($id);

        return view('admin.tour-package.hajj-package.order-details',compact('order'));
    }



}


