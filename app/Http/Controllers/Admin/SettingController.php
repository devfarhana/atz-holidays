<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    private function handleFileUpload($file, $path)
    {
        $fileName =   uniqid() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }
    public function index() {
        $setting = Setting::first();
        $settings = Setting::first();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.setting.index',[
            'setting' => $setting,
            'userLog' => $userLog,
            'global_settings' => $settings,
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'system_name' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'system_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footer_text' => 'nullable|string|max:1000',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->system_name = $request->system_name;
        $setting->short_description = $request->short_description;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->email = $request->email;

        // Handle Logo Upload
        if ($request->hasFile('logo')) {
            $this->handleFileDelete($setting->logo);
            $setting->logo = $this->handleFileUpload($request->file('logo'), 'setting/images');
        }

        // Handle Favicon Upload
        if ($request->hasFile('favicon')) {
            $this->handleFileDelete($setting->favicon);
            $setting->favicon = $this->handleFileUpload($request->file('favicon'), 'setting/images');
        }

        // Handle Favicon Upload
        if ($request->hasFile('system_logo')) {
            $this->handleFileDelete($setting->system_logo);
            $setting->system_logo = $this->handleFileUpload($request->file('system_logo'), 'setting/images');
        }
        $setting->footer_text = $request->footer_text;

        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully.');
    }
}
