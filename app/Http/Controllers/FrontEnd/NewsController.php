<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function news()
    {
        $allnews = News::orderBy('created_at', 'desc')->get();
        return view('frontend.news',compact('allnews'));
    }
    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();
        $latestNews = News::latest()->take(5)->get();
        return view('frontend.news-details',compact('news','latestNews'));
    }

}
