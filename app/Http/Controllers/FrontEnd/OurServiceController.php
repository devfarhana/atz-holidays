<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use App\Models\Service;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function ourService()
    {
        $services = OurService::where('status', 1)->get();
        return view('frontend.services', compact('services'));
    }
    public function ourServiceDetails( $slug)
    {
        $service = OurService::where('slug', $slug)->first();

        return view('frontend.service-details', compact('service'));
    }

}
