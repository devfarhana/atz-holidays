<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HajjPackage;
use App\Models\HajjPackageActivity;
use App\Models\HajjPackageExclusion;
use App\Models\HajjPackageInclusion;
use App\Models\HajjPackageItinerary;
use App\Models\HajjPackagePolicy;
use App\Models\HajjPackageVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HajjPackageInfoController extends Controller
{
    public function info($id) {
        $package = HajjPackage::with('features')->first();
         return view('admin.tour-package.hajj-package.package-info.package-info',compact('package'));
    }
    public function overviewUpdate(Request $request, $id)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:255',
            'start_point' => 'nullable|string|max:255',
            'end_point' => 'nullable|string|max:255',
            'route' => 'nullable|string|max:255',
        ]);

        $package = HajjPackage::findOrFail($id);
        $package->package_name = $request->package_name;
        $package->description = $request->description;
        $package->duration = $request->duration;
        $package->start_point = $request->start_point;
        $package->end_point = $request->end_point;
        $package->route = $request->route;


        $package->save();

        return redirect()->route('hajj-package.info', ['id' => $package->id])->with('success', 'Overview Updated successfully.')->with('activeTab', 'overview');

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

    public function videoStore(Request $request, $id)
    {
        $request->validate([
            'video' => 'required|file|mimes:mp4,mov,avi',
            // 'video_url' => 'nullable|string',
        ]);

        $package = HajjPackage::findOrFail($id);
        $video = new HajjPackageVideo();

        // Assign package tour ID
        $video->hajj_packages_id = $package->id;

        if ($request->hasFile('video')) {
            $video->video = $this->handleFileUpload($request->file('video'), 'hajj-package/videos');
        }

      $video->save();

        return redirect()->back()->with('success', 'Video added successfully.')->with('activeTab', 'video');
    }

    public function videoUpdate(Request $request, $id)
{
    $request->validate([
        'video' => 'nullable|file|mimes:mp4,mov,avi|max:10240',
    ]);

    $video = HajjPackageVideo::findOrFail($id);

    if ($request->hasFile('video')) {
        if ($video->video) {
            $this->handleFileDelete($video->video);
        }
        $video->video = $this->handleFileUpload($request->file('video'), 'hajj-package/videos');
    }
    $video->save();

    return redirect()->back()->with('success', 'Video updated successfully.')->with('activeTab', 'video');
}
    public function videoToggle($id)
    {
        $video = HajjPackageVideo::findOrFail($id);
        $video->status = !$video->status;
        $video->save();
        return redirect()->back()->with('success', 'Video status updated successfully.')->with('activeTab', 'video');
    }
    public function videoDestroy($id)
    {
        $video = HajjPackageVideo::findOrFail($id);
        $this->handleFileDelete($video->video);
        $video->delete();
        return redirect()->back()->with('success', 'Video Deleted successfully.')->with('activeTab', 'video');

    }


    public function activityStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $package = HajjPackage::findOrFail($id);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->handleFileUpload($request->file('image'), 'hajj-package/activity-image');
        }
        HajjPackageActivity::create([
            'hajj_packages_id' => $package->id,
            'title' => $request->title,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Activity added successfully.')->with('activeTab', 'activities');
    }

    public function activityUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $activity = HajjPackageActivity::findOrFail($id);

        // Handle image upload and delete the old one
        if ($request->hasFile('image')) {
            $this->handleFileDelete($activity->image); // Delete old image
            $activity->image = $this->handleFileUpload($request->file('image'), 'hajj-package/activity-image'); // Upload new image
        }

        // Update activity details
        $activity->update([
            'title' => $request->title,
            'location' => $request->location,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Activity Updated successfully.')->with('activeTab', 'activities');

    }
    public function activityToggle($id)
    {
        $activity = HajjPackageActivity::findOrFail($id);
        $activity->status = !$activity->status;
        $activity->save();
        return redirect()->back()->with('success', 'Activity status updated successfully.')->with('activeTab', 'activities');
    }
    public function activityDestroy($id)
    {
        $activity = HajjPackageActivity::findOrFail($id);
        $this->handleFileDelete($activity->image);
        $activity->delete();
        return redirect()->back()->with('success', 'Activity Deleted successfully.')->with('activeTab', 'activities');

    }



    public function itineraryStore(Request $request, $id)
    {
        $request->validate([
            'itinerary_days' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $package = HajjPackage::findOrFail($id);


        HajjPackageItinerary::create([
            'hajj_packages_id' => $package->id,
            'itinerary_days' => $request->itinerary_days,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Itinerary added successfully.')->with('activeTab', 'itinerary');


    }

    public function itineraryUpdate(Request $request, $id)
    {
        $request->validate([
            'itinerary_days' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $activity = HajjPackageItinerary::findOrFail($id);


        $activity->update([
            'itinerary_days' => $request->itinerary_days,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Itinerary updated successfully.')->with('activeTab', 'itinerary');

    }
    public function itineraryDestroy($id)
    {
        $itinerary = HajjPackageItinerary::findOrFail($id);
        $this->handleFileDelete($itinerary->image);
        $itinerary->delete();

        return redirect()->back()->with('success', 'Itinerary deleted successfully.')->with('activeTab', 'itinerary');

    }


    public function itineraryToggle($id)
    {
        $itinerary = HajjPackageItinerary::findOrFail($id);
        $itinerary->status = !$itinerary->status;
        $itinerary->save();

        return redirect()->back()->with('success', 'Itinerary status updated successfully.')->with('activeTab', 'itinerary');

    }
    public function inclusionStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);
        $package = HajjPackage::findOrFail($id);


        HajjPackageInclusion::create([
            'hajj_packages_id' => $package->id,
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Inclusion added successfully.')->with('activeTab', 'inclusions');


    }

    public function inclusionUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $inclusion = HajjPackageInclusion::findOrFail($id);


        $inclusion->update([
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Inclusion updated successfully.')->with('activeTab', 'inclusions');
    }
    public function inclusionDestroy($id)
    {
        $inclusion = HajjPackageInclusion::findOrFail($id);
        $this->handleFileDelete($inclusion->image);
        $inclusion->delete();

        return redirect()->back()->with('success', 'Inclusion delete successfully.')->with('activeTab', 'inclusions');
    }


    public function inclusionToggle($id)
    {
        $inclusion = HajjPackageInclusion::findOrFail($id);
        $inclusion->status = !$inclusion->status;
        $inclusion->save();

        return redirect()->back()->with('success', 'Inclusion update successfully.')->with('activeTab', 'inclusions');
    }
    public function exclusionStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);
        $package = HajjPackage::findOrFail($id);


        HajjPackageExclusion::create([
            'hajj_packages_id' => $package->id,
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Exclusion added successfully.')->with('activeTab', 'exclusions');


    }

    public function exclusionUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $exclusion = HajjPackageExclusion::findOrFail($id);


        $exclusion->update([
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Exclusion updated successfully.')->with('activeTab', 'exclusions');
    }
    public function exclusionDestroy($id)
    {
        $exclusion = HajjPackageExclusion::findOrFail($id);
        $this->handleFileDelete($exclusion->image);
        $exclusion->delete();

        return redirect()->back()->with('success', 'Exclusion delete successfully.')->with('activeTab', 'exclusions');
    }


    public function exclusionToggle($id)
    {
        $exclusion = HajjPackageExclusion::findOrFail($id);
        $exclusion->status = !$exclusion->status;
        $exclusion->save();

        return redirect()->back()->with('success', 'Inclusion update successfully.')->with('activeTab', 'exclusions');
    }
    public function policyStore(Request $request, $id)
    {
        $request->validate([

            'description' => 'nullable|string',
        ]);

        $package = HajjPackage::findOrFail($id);


        HajjPackagePolicy::create([
            'hajj_packages_id' => $package->id,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Policy added successfully.')->with('activeTab', 'policy');
    }

    public function policyUpdate(Request $request, $id)
    {
        $request->validate([

            'description' => 'nullable|string',
        ]);

        $policy = HajjPackagePolicy::findOrFail($id);


        // Update activity details
        $policy->update([

            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Policy Updated successfully.')->with('activeTab', 'policy');

    }
    public function policyToggle($id)
    {
        $policy = HajjPackagePolicy::findOrFail($id);
        $policy->status = !$policy->status;
        $policy->save();
        return redirect()->back()->with('success', 'Policy status updated successfully.')->with('activeTab', 'policy');
    }
    public function policyDestroy($id)
    {
        $policy = HajjPackagePolicy::findOrFail($id);
        $policy->delete();
        return redirect()->back()->with('success', 'Policy Deleted successfully.')->with('activeTab', 'policy');

    }
}

