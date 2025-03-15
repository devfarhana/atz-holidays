<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MissionVision;
use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionVisionController extends Controller
{
    public function index()
    {
        $missionvisions = MissionVision::all();
        $settings = Setting::first();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.mission-vision.index',[
            'missionvisions' => $missionvisions,
            'global_settings' => $settings,
            'userLog' => $userLog,
        ]);
    }

    public function edit($id)
    {
        $missionvision = MissionVision::findOrFail($id);
        $settings = Setting::first();

        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.mission-vision.edit',[
            'missionvision' => $missionvision,
            'global_settings' => $settings,
            'userLog' => $userLog,
        ]);
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $missionvision = MissionVision::findOrFail($id);
        $request->validate([
            'title' => 'nullable|string|max:255',
            'mission_title' => 'nullable|string|max:255',
            'vision_title' => 'nullable|string|max:255',
            'mission_description' => 'nullable|string',
            'vision_description' => 'nullable|string',

        ]);
        $missionvision->title = $request->title;
        $missionvision->mission_title = $request->mission_title;
        $missionvision->vision_title = $request->vision_title;
        $missionvision->mission_description = $request->mission_description;
        $missionvision->vision_description = $request->vision_description;


        $missionvision->save();
        return redirect()->route('mission-vision.index')->with('success', 'Mission Vision updated successfully.');
    }
}
