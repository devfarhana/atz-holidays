<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
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
        $advertisements = Advertisement::all();
        $settings = Setting::first();

        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.advertisement.index',[
            'advertisements' => $advertisements,
            'global_settings' => $settings,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'url' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,jpg,gif|max:2048',
        ]);

        $advertisement = new Advertisement();
        $advertisement->name = $request->name;
        $advertisement->url = $request->url;

        if ($request->hasFile('image')) {
            $advertisement->image = $this->handleFileUpload($request->file('image'), 'advertisement/images');
        }


        $advertisement->save();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement created successfully.');
    }

    public function toggleStatus($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->status = !$advertisement->status;
        $advertisement->save();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'url' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,jpg,gif|max:2048',
        ]);

        $advertisement = Advertisement::findOrFail($id);
        $advertisement->name = $request->name;
        $advertisement->url = $request->url;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $this->handleFileDelete($advertisement->image);
            $advertisement->image = $this->handleFileUpload($request->file('image'), 'advertisement/images');
        }


        $advertisement->save();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement updated successfully.');
    }

    public function destroy($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $this->handleFileDelete($advertisement->image);
        $advertisement->delete();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement deleted successfully.');
    }
}
