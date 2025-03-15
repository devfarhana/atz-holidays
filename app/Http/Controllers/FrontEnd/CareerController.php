<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career()
    {
        $careers = Career::where('status', 1)->get();
        return view('frontend.career', compact('careers'));
    }
    public function careerDetails( $slug)
    {
        $career = Career::where('slug', $slug)->first();
        $allcareers = Career::where('slug', '!=', $slug)
        ->orderBy('posted_date', 'desc')
        ->get();

        return view('frontend.career-details', compact('career','allcareers'));
    }
}
