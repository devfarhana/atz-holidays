<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('admin.product.category.index', compact('categories'));
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $category->image = $this->handleFileUpload($request->file('image'), 'category/images');
        }
        $category->save();
        return redirect()->route('category.index')->with('success', 'category created successfully.');
    }

    public function toggleStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        return redirect()->route('category.index')->with('success', 'category status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $this->handleFileDelete($category->image);
            $category->image = $this->handleFileUpload($request->file('image'), 'category/images');
        }


        $category->save();
        return redirect()->route('category.index')->with('success', 'category updated successfully.');
    }

    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $this->handleFileDelete($category->image);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'category deleted successfully.');
    }

}
