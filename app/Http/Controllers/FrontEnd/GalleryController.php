<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function ourGallery()
    {
        $galleries = Gallery::where('status', 1)->get();
        return view('frontend.gallery',compact('galleries'));
    }
}
