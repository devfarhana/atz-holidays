<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aboutkeypoint;
use App\Models\MissionVision;
use App\Models\Team;
use App\Models\TeamPage;
use App\Models\Testimonial;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $aboutus = AboutUs::first();
        $aboutKeypoints = Aboutkeypoint::where('status', true)
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
        $testimonials = Testimonial::where('status', true)
        ->get();
        $teams = Team::where('status', true)
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
        $teamPage = TeamPage::first();
        return view('frontend.about',compact('aboutus','aboutKeypoints','teamPage','teams','testimonials'));
    }
}
