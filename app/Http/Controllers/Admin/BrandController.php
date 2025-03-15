<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
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
        $brands = Brand::all();
        return view('admin.product.brand.index', compact('brands'));
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $brand->image = $this->handleFileUpload($request->file('image'), 'brand/images');
        }
        $brand->save();
        return redirect()->route('brand.index')->with('success', 'Brand created successfully.');
    }

    public function toggleStatus($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = !$brand->status;
        $brand->save();
        return redirect()->route('brand.index')->with('success', 'Brand status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $this->handleFileDelete($brand->image);
            $brand->image = $this->handleFileUpload($request->file('image'), 'brand/images');
        }


        $brand->save();
        return redirect()->route('brand.index')->with('success', 'brand updated successfully.');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $this->handleFileDelete($brand->image);
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'brand deleted successfully.');
    }


}
