<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerImage;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerImageController extends Controller
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

    public function edit()
    {
        $banner = BannerImage::first();


        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.banner-image.edit',[
            'banner' => $banner,
            'userLog' => $userLog,
        ]);
    }

    public function update(Request $request, $id)
{
    $banner = BannerImage::findOrFail($id);

    // Validation
    $request->validate([
        'about_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'team_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'hajj_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'package_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'blog_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'contact_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'faq_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'privacy_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'terms_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file uploads for each banner
    if ($request->hasFile('about_banner')) {
        $this->handleFileDelete($banner->about_banner);
        $banner->about_banner = $this->handleFileUpload($request->file('about_banner'), 'banner-image');
    }

    if ($request->hasFile('team_banner')) {
        $this->handleFileDelete($banner->team_banner);
        $banner->team_banner = $this->handleFileUpload($request->file('team_banner'), 'banner-image');
    }

    if ($request->hasFile('hajj_banner')) {
        $this->handleFileDelete($banner->hajj_banner);
        $banner->hajj_banner = $this->handleFileUpload($request->file('hajj_banner'), 'banner-image');
    }

    if ($request->hasFile('package_banner')) {
        $this->handleFileDelete($banner->package_banner);
        $banner->package_banner = $this->handleFileUpload($request->file('package_banner'), 'banner-image');
    }

    if ($request->hasFile('blog_banner')) {
        $this->handleFileDelete($banner->blog_banner);
        $banner->blog_banner = $this->handleFileUpload($request->file('blog_banner'), 'banner-image');
    }

    if ($request->hasFile('contact_banner')) {
        $this->handleFileDelete($banner->contact_banner);
        $banner->contact_banner = $this->handleFileUpload($request->file('contact_banner'), 'banner-image');
    }

    if ($request->hasFile('faq_banner')) {
        $this->handleFileDelete($banner->faq_banner);
        $banner->faq_banner = $this->handleFileUpload($request->file('faq_banner'), 'banner-image');
    }

    if ($request->hasFile('privacy_banner')) {
        $this->handleFileDelete($banner->privacy_banner);
        $banner->privacy_banner = $this->handleFileUpload($request->file('privacy_banner'), 'banner-image');
    }

    if ($request->hasFile('terms_banner')) {
        $this->handleFileDelete($banner->terms_banner);
        $banner->terms_banner = $this->handleFileUpload($request->file('terms_banner'), 'banner-image');
    }

    $banner->save();

    return redirect()->back()->with('success', 'About Us updated successfully.');
}

}
