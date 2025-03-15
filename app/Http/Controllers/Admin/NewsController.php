<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        $allnews = News::all();
        return view('admin.news.index',compact('allnews'));
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'date' => 'nullable|date',
            'title' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
        ]);

        $news = new News();
        $news->date = $request->date;
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->location = $request->location;
        $news->description = $request->description;
        $news->author = $request->author;

        if ($request->hasFile('image')) {
            $news->image = $this->handleFileUpload($request->file('image'), 'news/images');
        }
        $news->save();
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function toggleStatus($id)
    {
        $news = News::findOrFail($id);
        $news->status = !$news->status;
        $news->save();
        return redirect()->route('news.index')->with('success', 'News status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'date' => 'nullable|date',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
        ]);

        $news = News::findOrFail($id);
        $news->date = $request->date;
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->description = $request->description;
        $news->author = $request->author;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $this->handleFileDelete($news->image);
            $news->image = $this->handleFileUpload($request->file('image'), 'news/images');
        }


        $news->save();
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $this->handleFileDelete($news->image);
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }

}
