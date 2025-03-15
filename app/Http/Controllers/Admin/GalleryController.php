<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    private function handleFileUpload($file, $path)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }

    public function index() {
        $galleries = Gallery::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        $settings = Setting::first();
        return view('admin.gallery.index',[
            'galleries' => $galleries,
            'userLog' => $userLog,
            'global_settings' => $settings,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->title;

        if ($request->hasFile('image')) {
            $gallery->image = $this->handleFileUpload($request->file('image'), 'gallery/images');
        }
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function toggleStatus($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->status = !$gallery->status;
        $gallery->save();
        return redirect()->route('gallery.index')->with('success', 'Gallery status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image
            $this->handleFileDelete($gallery->image);
            // Upload new image
            $gallery->image = $this->handleFileUpload($request->file('image'), 'gallery/images');
        }
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $this->handleFileDelete($gallery->image);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
