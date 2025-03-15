<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Models\UserLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SliderContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
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
        $sliders = Slider::all();
        $sliderContent = SliderContent::first();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.slider.index',[
            'sliders' => $sliders,
            'sliderContent' => $sliderContent,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slider = new Slider();
        if ($request->hasFile('image')) {
            $slider->image = $this->handleFileUpload($request->file('image'), 'slider/images');
        }


        $slider->save();
        return redirect()->route('slider.index')->with('message', 'Slider created successfully.');
    }

    public function contentUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string',
        ]);

        $sliderContent = SliderContent::first();
        $sliderContent->title = $request->title;
        $sliderContent->sub_title = $request->sub_title;
        $sliderContent->button_text = $request->button_text;
        $sliderContent->button_url = $request->button_url;



        $sliderContent->save();

        return redirect()->route('slider.index')->with('success', 'Slider Content updated successfully.');
    }

    public function toggleStatus($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = !$slider->status;
        $slider->save();
        return redirect()->route('slider.index')->with('message', 'Slider status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slider = Slider::findOrFail($id);
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $this->handleFileDelete($slider->image);
            $slider->image = $this->handleFileUpload($request->file('image'), 'slider/images');
        }

        $slider->save();
        return redirect()->route('slider.index')->with('message', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $this->handleFileDelete($slider->image);
        $slider->delete();
        return redirect()->route('slider.index')->with('message', 'Slider deleted successfully.');
    }

}
