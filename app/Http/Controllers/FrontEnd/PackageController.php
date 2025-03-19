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
use App\Models\BannerImage;
use App\Models\HajjPackageOrder;
use App\Models\PackageTourOrder;

class PackageController extends Controller
{
    public function hajjPackage()
    {
        $banner = BannerImage::first();
        $hajjpackages = HajjPackage::where('status', 1)->get();
        $hajjpackageimages = HajjPackageImages::all();
        return view('frontend.hajj-package', compact('hajjpackages','hajjpackageimages','banner'));
    }
    public function HajjpackageDetails( $slug)
    {
        $banner = BannerImage::first();
        $package = HajjPackage::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $hajjpackageimages = HajjPackageImages::all();
        $whyBooks = WhyBook::where('status', 1)->get();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.hajj-package-tour-details', compact('package','whyBooks','hajjpackageimages','destinationcountries','banner'));
    }
    public function bookNow($slug)
    {
        $banner = BannerImage::first();
        $package = HajjPackage::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $hajjpackageimages = HajjPackageImages::all();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.hajj-package-order', compact('package','hajjpackageimages','destinationcountries','banner'));
    }
    public function order(Request $request, $slug)
    {
        $package = HajjPackage::where('slug', $slug)->firstOrFail();

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address_1' => 'required|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'select_country' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'additional_info' => 'nullable|string',
        ]);

        HajjPackageOrder::create([
            'hajj_packages_id' => $package->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'state' => $request->state,
            'select_country' => $request->select_country,
            'zip_code' => $request->zip_code,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->back()->with('success', 'Booking successful!');
    }
    public function packageTour()
    {
        $banner = BannerImage::first();
        $tourpackages = PackageTour::where('status', 1)->get();
        $tourpackageimages = PackageTourImages::all();
        return view('frontend.package-tour', compact('tourpackages','tourpackageimages','banner'));
    }
    public function PackagetourDetails($slug)
    {
        $banner = BannerImage::first();
        $package = PackageTour::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $packagetourimages = PackageTourImages::all();
        $whyBooks = WhyBook::where('status', 1)->get();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.package-tour-details', compact('package','whyBooks','packagetourimages','destinationcountries','banner'));
    }
    public function packageBook($slug)
    {
        $banner = BannerImage::first();
        $package = PackageTour::with('features','video','activity','itinerary','inclusion','exclusion','policy','hotel')->where('slug', $slug)->first();
        $packagetourimages = PackageTourImages::all();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        return view('frontend.package-tour-order', compact('package','packagetourimages','destinationcountries','banner'));
    }

    public function packageorder(Request $request, $slug)
    {
        $package = packageTour::where('slug', $slug)->firstOrFail();

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address_1' => 'required|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'select_country' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'additional_info' => 'nullable|string',
        ]);

        PackageTourOrder::create([
            'package_tour_id' => $package->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'state' => $request->state,
            'select_country' => $request->select_country,
            'zip_code' => $request->zip_code,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
