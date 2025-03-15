<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageCategoryController extends Controller
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

    public function index() {
        $categories = PackageCategory::all();
        return view('admin.tour-package.category.index', compact('categories'));
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'nullable|string|max:255',
            'banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new PackageCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('banner_img')) {
            $category->banner_img = $this->handleFileUpload($request->file('banner_img'), 'package/banner-image');
        }
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function toggleStatus($id)
    {
        $category = PackageCategory::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = PackageCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        // Handle Image Upload
        if ($request->hasFile('banner_img')) {
            $this->handleFileDelete($category->banner_img);
            $category->banner_img = $this->handleFileUpload($request->file('banner_img'), 'package/banner-image');
        }


        $category->save();
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = PackageCategory::findOrFail($id);
        $this->handleFileDelete($category->banner_img);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

}
