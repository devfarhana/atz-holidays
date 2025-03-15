<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use App\Models\UserLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class AboutUsController extends Controller
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
        $aboutUs = AboutUs::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.about.about-us.index',[
            'aboutUs' => $aboutUs,
            'userLog' => $userLog,
        ]);
    }

    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        $settings = Setting::first();

        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.about.about-us.edit',[
            'about' => $about,
            'global_settings' => $settings,
            'userLog' => $userLog,
        ]);
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $about = AboutUs::findOrFail($id);
        $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'year_of_experience' => 'nullable|string',
            'experience_txt' => 'nullable|string',
            'breadcrumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_img_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_img_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $cleanDescription = Purifier::clean($request->input('description'));
        $about->title = $request->title;
        $about->sub_title = $request->sub_title;
        $about->experience_txt = $request->experience_txt;
        $about->year_of_experience = $request->year_of_experience;
        $about->description = $cleanDescription;
        //$about->description = $request->description;
        // Handle Image 1 Upload
        if ($request->hasFile('breadcrumb_image')) {
            $this->handleFileDelete($about->breadcrumb_image);
            $about->breadcrumb_image = $this->handleFileUpload($request->file('breadcrumb_image'), 'about/breadcrumb-image');
        }
        if ($request->hasFile('about_img_1')) {
            $this->handleFileDelete($about->about_img_1);
            $about->about_img_1 = $this->handleFileUpload($request->file('about_img_1'), 'about/about-image');
        }
        if ($request->hasFile('about_img_2')) {
            $this->handleFileDelete($about->about_img_2);
            $about->about_img_2 = $this->handleFileUpload($request->file('about_img_2'), 'about/about-image');
        }
        if ($request->hasFile('about_img_3')) {
            $this->handleFileDelete($about->about_img_3);
            $about->about_img_3 = $this->handleFileUpload($request->file('about_img_3'), 'about/about-image');
        }
        if ($request->hasFile('about_img_4')) {
            $this->handleFileDelete($about->about_img_4);
            $about->about_img_4 = $this->handleFileUpload($request->file('about_img_4'), 'about/about-image');
        }

        $about->save();
        return redirect()->route('about-us.index')->with('success', 'About Us updated successfully.');
    }
}
