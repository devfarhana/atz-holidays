<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\BannerImage;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogMessage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $banner = BannerImage::first();
        $blogs = Blog::with('blogCategory')
        ->where('status', true)
        ->get();

        return view('frontend.blog', [

            'blogs' => $blogs,
            'banner' => $banner,
        ]);
    }
    public function blogDetails($slug)
    {

        $banner = BannerImage::first();
        $allBlog = Blog::with('blogCategory')->where('status', true)->get();
        $categories = BlogCategory::withCount(['blogs' => function ($query) {
            $query->where('status', true); // Count only active blogs
        }])->get();

        $blog = Blog::with('blogCategory')
            ->where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();
        // Fetch other blogs excluding the current one
        $otherBlogs = Blog::where('status', true)
            ->where('id', '!=', $blog->id) // Exclude the current blog
            ->latest()
            ->limit(5) // Change limit as needed
            ->get();

        $comments = BlogMessage::all();

        return view('frontend.blog-details', [
            'allBlog' => $allBlog,
            'blog' => $blog,
            'otherBlogs' => $otherBlogs,
            'categories' => $categories,
            'comments' => $comments,
            'banner' => $banner,

        ]);
    }
    public function blogComment(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:255',
        ]);

        $comments = new BlogMessage();
        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->message = $request->message;

        $comments->save();
        return redirect()->back()->with('success', 'Your message has been sent!');
    }


}
