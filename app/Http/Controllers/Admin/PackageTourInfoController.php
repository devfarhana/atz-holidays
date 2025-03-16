<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageTour;
use App\Models\PackageTourActivity;
use App\Models\PackageTourExclusion;
use App\Models\PackageTourHotel;
use App\Models\PackageTourInclusion;
use App\Models\PackageTourItinerary;
use App\Models\PackageTourPolicy;
use App\Models\PackageTourVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageTourInfoController extends Controller
{
    public function info($id)
    {
        $package = PackageTour::with('features')->findOrFail($id);
        return view('admin.tour-package.package-tour.package-info.package-info', compact('package'));
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

        $package = PackageTour::findOrFail($id);
        $package->package_name = $request->package_name;
        $package->description = $request->description;
        $package->duration = $request->duration;
        $package->start_point = $request->start_point;
        $package->end_point = $request->end_point;
        $package->route = $request->route;


        $package->save();
        return redirect()->back()->with('success', 'Overview Updated successfully.')->with('activeTab', 'overview');
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

        $package = PackageTour::findOrFail($id);
        $video = new PackageTourVideo();

        // Assign package tour ID
        $video->package_tour_id = $package->id;

        if ($request->hasFile('video')) {
            $video->video = $this->handleFileUpload($request->file('video'), 'package-tour/videos');
        }

      $video->save();

        return redirect()->back()->with('success', 'Video added successfully.')->with('activeTab', 'video');
    }

    public function videoUpdate(Request $request, $id)
{
    $request->validate([
        'video' => 'nullable|file|mimes:mp4,mov,avi|max:10240',
    ]);

    $video = PackageTourVideo::findOrFail($id);

    if ($request->hasFile('video')) {
        if ($video->video) {
            $this->handleFileDelete($video->video);
        }
        $video->video = $this->handleFileUpload($request->file('video'), 'package-tour/videos');
    }
    $video->save();

    return redirect()->back()->with('success', 'Video updated successfully.')->with('activeTab', 'video');
}
    public function videoToggle($id)
    {
        $video = PackageTourVideo::findOrFail($id);
        $video->status = !$video->status;
        $video->save();
        return redirect()->back()->with('success', 'Video status updated successfully.')->with('activeTab', 'video');
    }
    public function videoDestroy($id)
    {
        $video = PackageTourVideo::findOrFail($id);
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

        $package = PackageTour::findOrFail($id);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->handleFileUpload($request->file('image'), 'package-tour/activity-image');
        }
        PackageTourActivity::create([
            'package_tour_id' => $package->id,
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

        $activity = PackageTourActivity::findOrFail($id);

        // Handle image upload and delete the old one
        if ($request->hasFile('image')) {
            $this->handleFileDelete($activity->image); // Delete old image
            $activity->image = $this->handleFileUpload($request->file('image'), 'package-tour/activity-image'); // Upload new image
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
        $activity = PackageTourActivity::findOrFail($id);
        $activity->status = !$activity->status;
        $activity->save();
        return redirect()->back()->with('success', 'Activity status updated successfully.')->with('activeTab', 'activities');
    }
    public function activityDestroy($id)
    {
        $activity = PackageTourActivity::findOrFail($id);
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

        $package = PackageTour::findOrFail($id);


        PackageTourItinerary::create([
            'package_tour_id' => $package->id,
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

        $activity = PackageTourItinerary::findOrFail($id);


        $activity->update([
            'itinerary_days' => $request->itinerary_days,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Itinerary updated successfully.')->with('activeTab', 'itinerary');

    }
    public function itineraryDestroy($id)
    {
        $itinerary = PackageTourItinerary::findOrFail($id);
        $this->handleFileDelete($itinerary->image);
        $itinerary->delete();

        return redirect()->back()->with('success', 'Itinerary deleted successfully.')->with('activeTab', 'itinerary');

    }


    public function itineraryToggle($id)
    {
        $itinerary = PackageTourItinerary::findOrFail($id);
        $itinerary->status = !$itinerary->status;
        $itinerary->save();

        return redirect()->back()->with('success', 'Itinerary status updated successfully.')->with('activeTab', 'itinerary');

    }
    public function inclusionStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);
        $package = PackageTour::findOrFail($id);


        PackageTourInclusion::create([
            'package_tour_id' => $package->id,
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Inclusion added successfully.')->with('activeTab', 'inclusions');


    }

    public function inclusionUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $inclusion = PackageTourInclusion::findOrFail($id);


        $inclusion->update([
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Inclusion updated successfully.')->with('activeTab', 'inclusions');
    }
    public function inclusionDestroy($id)
    {
        $inclusion = PackageTourInclusion::findOrFail($id);
        $this->handleFileDelete($inclusion->image);
        $inclusion->delete();

        return redirect()->back()->with('success', 'Inclusion delete successfully.')->with('activeTab', 'inclusions');
    }


    public function inclusionToggle($id)
    {
        $inclusion = PackageTourInclusion::findOrFail($id);
        $inclusion->status = !$inclusion->status;
        $inclusion->save();

        return redirect()->back()->with('success', 'Inclusion update successfully.')->with('activeTab', 'inclusions');
    }
    public function exclusionStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);
        $package = PackageTour::findOrFail($id);


        PackageTourExclusion::create([
            'package_tour_id' => $package->id,
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Exclusion added successfully.')->with('activeTab', 'exclusions');


    }

    public function exclusionUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $exclusion = PackageTourExclusion::findOrFail($id);


        $exclusion->update([
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Exclusion updated successfully.')->with('activeTab', 'exclusions');
    }
    public function exclusionDestroy($id)
    {
        $exclusion = PackageTourExclusion::findOrFail($id);
        $this->handleFileDelete($exclusion->image);
        $exclusion->delete();

        return redirect()->back()->with('success', 'Exclusion delete successfully.')->with('activeTab', 'exclusions');
    }


    public function exclusionToggle($id)
    {
        $exclusion = PackageTourExclusion::findOrFail($id);
        $exclusion->status = !$exclusion->status;
        $exclusion->save();

        return redirect()->back()->with('success', 'Inclusion update successfully.')->with('activeTab', 'exclusions');
    }
    public function policyStore(Request $request, $id)
    {
        $request->validate([

            'description' => 'nullable|string',
        ]);

        $package = PackageTour::findOrFail($id);


        PackageTourPolicy::create([
            'package_tour_id' => $package->id,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Policy added successfully.')->with('activeTab', 'policy');
    }

    public function policyUpdate(Request $request, $id)
    {
        $request->validate([

            'description' => 'nullable|string',
        ]);

        $policy = PackageTourPolicy::findOrFail($id);


        // Update activity details
        $policy->update([

            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Policy Updated successfully.')->with('activeTab', 'policy');

    }
    public function policyToggle($id)
    {
        $policy = PackageTourPolicy::findOrFail($id);
        $policy->status = !$policy->status;
        $policy->save();
        return redirect()->back()->with('success', 'Policy status updated successfully.')->with('activeTab', 'policy');
    }
    public function policyDestroy($id)
    {
        $policy = PackageTourPolicy::findOrFail($id);
        $policy->delete();
        return redirect()->back()->with('success', 'Policy Deleted successfully.')->with('activeTab', 'policy');

    }

    public function hotelStore(Request $request, $id)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'rating' => 'nullable|string',
            'number_review' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $package = PackageTour::findOrFail($id);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->handleFileUpload($request->file('image'), 'package-tour/hotel-image');
        }
        PackageTourHotel::create([
            'package_tour_id' => $package->id,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'details' => $request->details,
            'rating' => $request->rating,
            'number_review' => $request->number_review,
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Hotel added successfully.')->with('activeTab', 'hotel');
    }

    public function hotelUpdate(Request $request, $id)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'rating' => 'nullable|string',
            'number_review' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $hotel = PackageTourHotel::findOrFail($id);

        // Handle image upload and delete the old one
        if ($request->hasFile('image')) {
            $this->handleFileDelete($hotel->image); // Delete old image
            $hotel->image = $this->handleFileUpload($request->file('image'), 'package-tour/hotel-image'); // Upload new image
        }

        // Update hotel details
        $hotel->update([
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'details' => $request->details,
            'rating' => $request->rating,
            'number_review' => $request->number_review,
        ]);
        return redirect()->back()->with('success', 'Hotel Updated successfully.')->with('activeTab', 'hotel');

    }
    public function hotelToggle($id)
    {
        $hotel = PackageTourHotel::findOrFail($id);
        $hotel->status = !$hotel->status;
        $hotel->save();
        return redirect()->back()->with('success', 'Hotel status updated successfully.')->with('activeTab', 'hotel');
    }
    public function hotelDestroy($id)
    {
        $hotel = PackageTourHotel::findOrFail($id);
        $this->handleFileDelete($hotel->image);
        $hotel->delete();
        return redirect()->back()->with('success', 'Hotel Deleted successfully.')->with('activeTab', 'hotel');

    }
}
