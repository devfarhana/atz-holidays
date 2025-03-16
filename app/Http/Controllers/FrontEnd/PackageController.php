<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\HajjPackage;
use App\Models\HajjPackageImages;
use App\Models\Package;
use App\Models\PackageTour;
use App\Models\PackageTourImages;
use App\Models\WhyBook;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function HajjpackageDetails( $slug)
    {
        $package = HajjPackage::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $hajjpackageimages = HajjPackageImages::all();
        $whyBooks = WhyBook::where('status', 1)->get();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.hajj-package-tour-details', compact('package','whyBooks','hajjpackageimages','destinationcountries'));
    }
    public function bookNow($slug)
    {
        $package = HajjPackage::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $hajjpackageimages = HajjPackageImages::all();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.hajj-package-order', compact('package','hajjpackageimages','destinationcountries'));
    }
    public function PackagetourDetails($slug)
    {

        $package = PackageTour::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $packagetourimages = PackageTourImages::all();
        $whyBooks = WhyBook::where('status', 1)->get();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.package-tour-details', compact('package','whyBooks','packagetourimages','destinationcountries'));
    }
    public function packageBook($slug)
    {
        $package = PackageTour::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $packagetourimages = PackageTourImages::all();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.package-tour-order', compact('package','packagetourimages','destinationcountries'));
    }
}
