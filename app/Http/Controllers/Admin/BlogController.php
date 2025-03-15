<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BlogController extends Controller
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
        $allBlog = Blog::all();
        $allblogCategories =BlogCategory::with('blogs')->get();
        $blogCategories =BlogCategory::with('blogs')->where('status', true)->get();
        return view('admin.blog.index',compact('allBlog','allblogCategories','blogCategories'));
    }
    public function storeBlogCategory(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
        ]);

        $blogCategory = new BlogCategory();
        $blogCategory->name = $request->name;
        $blogCategory->save();
        return redirect()->route('blog.index')->with('success', 'Blog Category created successfully.');
    }
    public function updateBlogCategory(Request $request, $id) {

        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
        ]);
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->name = $request->name;
        $blogCategory->save();
        return redirect()->route('blog.index')->with('success', 'Blog Category updated successfully.');
    }
    public function toggleBlogCategoryStatus($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->status = !$blogCategory->status;
        $blogCategory->save();
        return redirect()->route('blog.index')->with('success', 'Blog Category status updated successfully.');
    }

    public function destroyBlogCategory($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        if ($blogCategory->blogs()->exists()) {
            return redirect()->route('blog.index')->with('success', 'Cannot delete category as it is associated with blogs.');
        }
        $blogCategory->delete();
        return redirect()->route('blog.index')->with('success', 'Blog Category deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:blog_categories,id',
            'date' => 'nullable|date',
            'author' => 'nullable|string|max:255',
            'author_details' => 'nullable|string',
            'tags' => 'nullable|string',
            'description' => 'nullable|string',
            'blog_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'author_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'additional_image.*' => 'nullable|image',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $slug = Str::slug($request->title);
        // Check if the slug exists and make it unique
        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $blog->slug = $slug;
        $blog->description = $request->description;
        $blog->date = $request->date;
        $blog->author = $request->author;
        $blog->author_details = $request->author_details;
        $blog->tags = $request->tags;
        $blog->blog_category_id = $request->category_id;
        // Handle image upload
        if ($request->hasFile('blog_image')) {
            $blog->blog_image = $this->handleFileUpload($request->file('blog_image'), 'blog/blog-images');
        }
        if ($request->hasFile('author_image')) {
            $blog->author_image = $this->handleFileUpload($request->file('author_image'), 'blog/author-images');
        }
        $blog->save();
        if ($request->hasFile('additional_image')) {
            foreach ($request->file('additional_image') as $additional_image) {
                $blog->images()->create([
                    'additional_image' => $this->handleFileUpload($additional_image, 'blog/additional-images'),
                ]);
            }
        }

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:blog_categories,id',
            'date' => 'nullable|date',
            'author' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'description' => 'nullable|string',
            'author_details' => 'nullable|string',
            'blog_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'author_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'additional_image.*' => 'nullable|image',
            'remove_images' => 'nullable|array',
        ]);

        // Find the blog by ID
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $blog->slug = $slug;
        $blog->date = $request->date;
        $blog->author = $request->author;
        $blog->author_details = $request->author_details;
        $blog->description = $request->description;
        $blog->tags = $request->tags;
        $blog->blog_category_id = $request->category_id;
        if ($request->hasFile('blog_image')) {
            $this->handleFileDelete($blog->blog_image);
            $blog->blog_image = $this->handleFileUpload($request->file('blog_image'), 'blog/blog-images');
        }
        if ($request->hasFile('author_image')) {
            $this->handleFileDelete($blog->author_image);
            $blog->author_image = $this->handleFileUpload($request->file('author_image'), 'blog/author-images');
        }
         // Handle removal of existing additional images
         if ($request->filled('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = BlogImage::findOrFail($imageId);
                $this->handleFileDelete($image->additional_image);
                $image->delete();
            }
        }
        // Handle new additional images
        if ($request->hasFile('additional_image')) {
            foreach ($request->file('additional_image') as $additionalImage) {
                $blog->images()->create([
                    'additional_image' => $this->handleFileUpload($additionalImage, 'blog/additional-images'),
                ]);
            }
        }

        // Save the updated blog
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }
    public function toggleStatus($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = !$blog->status;
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog status updated successfully.');
    }



    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $this->handleFileDelete($blog->blog_image);
        $this->handleFileDelete($blog->author_image);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
