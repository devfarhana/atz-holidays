<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HowWork;
use App\Models\HowWorkKeypoint;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HowItWorkController extends Controller
{
    public function index()
    {

        $howWork = HowWork::first();
        $keypoints = HowWorkKeypoint::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.how-work.index', [
            'howWork' => $howWork,
            'keypoints' => $keypoints,
            'userLog' => $userLog,
        ]);
    }

    public function titleUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $howWork = HowWork::first();
        $howWork->title = $request->title;



        $howWork->save();

        return redirect()->route('how-work.index')->with('success', 'How It Works Updated Successfully.');
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

        // dd($request->all());

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'icon_img' => 'nullable|image|mimes:jpg,svg,jpeg,png,jpg,gif|max:2048',
        ]);
        $keypoint = new HowWorkKeypoint();
        $keypoint->title = $request->title;
        $keypoint->details = $request->details;

        if ($request->hasFile('icon_img')) {
            $keypoint->icon_img = $this->handleFileUpload($request->file('icon_img'), 'how-work/icon');
        }
        $keypoint->save();
        return redirect()->route('how-work.index')->with('success', 'How It Works created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'icon_img' => 'nullable|image|mimes:jpg,svg,jpeg,png,jpg,gif|max:2048',
        ]);

        $keypoint = HowWorkKeypoint::findOrFail($id);
        $keypoint->title = $request->title;
        $keypoint->details = $request->details;


        if ($request->hasFile('icon_img')) {
            // Delete old image
            $this->handleFileDelete($keypoint->icon_img);
            // Upload new image
            $keypoint->icon_img = $this->handleFileUpload($request->file('icon_img'), 'how-work/icon');
        }

        $keypoint->save();

        return redirect()->route('how-work.index')->with('success', 'How It Works updated successfully.');
    }

    public function toggleStatus($id)
    {
        $keypoint = HowWorkKeypoint::findOrFail($id);
        $keypoint->status = !$keypoint->status;
        $keypoint->save();
        return redirect()->route('how-work.index')->with('success', 'How It Works status updated successfully.');
    }
    public function destroy($id)
    {
        $keypoint = HowWorkKeypoint::findOrFail($id);

        // Delete associated image if it exists
        $this->handleFileDelete($keypoint->icon_img);

        // Delete the client record
        $keypoint->delete();

        return redirect()->route('how-work.index')->with('success', 'How It Works deleted successfully.');
    }
}
