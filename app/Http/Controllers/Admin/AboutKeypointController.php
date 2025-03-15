<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutkeypoint;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutKeypointController extends Controller
{

    public function index() {
        $aboutKeypoints = AboutKeypoint::all();

        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.about.about-keypoint.index',[
            'aboutKeypoints' => $aboutKeypoints,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string',
        ]);

        $aboutKeypoint = new AboutKeypoint();
        $aboutKeypoint->title = $request->title;
        $aboutKeypoint->details = $request->details;


        $aboutKeypoint->save();
        return redirect()->route('aboutkeypoint.index')->with('success', 'About Keypoint created successfully.');
    }

    public function toggleStatus($id)
    {
        $aboutKeypoint = AboutKeypoint::findOrFail($id);
        $aboutKeypoint->status = !$aboutKeypoint->status;
        $aboutKeypoint->save();
        return redirect()->route('aboutkeypoint.index')->with('success', 'About Keypoint status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
           'title' => 'nullable|string|max:255',
            'details' => 'nullable|string',
        ]);

        $aboutKeypoint = AboutKeypoint::findOrFail($id);
        $aboutKeypoint->title = $request->title;
        $aboutKeypoint->details = $request->details;


        $aboutKeypoint->save();
        return redirect()->route('aboutkeypoint.index')->with('success', 'About Keypoint updated successfully.');
    }

    public function destroy($id)
    {
        $aboutKeypoint = Aboutkeypoint::findOrFail($id);
        $aboutKeypoint->delete();
        return redirect()->route('aboutkeypoint.index')->with('success', 'About Keypoint deleted successfully.');
    }
}
