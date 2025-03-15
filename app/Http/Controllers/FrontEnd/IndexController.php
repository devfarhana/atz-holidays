<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\News;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Http\Controllers\Controller;
use App\Models\Aboutkeypoint;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Client;
use App\Models\ClientTitle;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Destination;
use App\Models\Faq;
use App\Models\HajjPackage;
use App\Models\HajjPackageImages;
use App\Models\HowWork;
use App\Models\HowWorkKeypoint;
use App\Models\NoticeType;
use App\Models\PackageTour;
use App\Models\PackageTourImages;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\SliderContent;
use App\Models\TermsCondition;
use App\Models\Testimonial;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::where('status', true)->get();
        $sliderContent = SliderContent::first();
        $advertisements = Advertisement::where('status', true)->get();
        $clientTitle = ClientTitle::first();
        $clients = Client::where('status', true)->get();
        $notices = NoticeType::where('status', true)->get();
        $testimonials = Testimonial::where('status', true)->get();

        $blogs = Blog::where('status', true)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();

        $allDestination = Destination::where('status', true)->get();
        $aboutus = AboutUs::first();
        $aboutKeypoints = Aboutkeypoint::where('status', true)
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        $howWork = HowWork::first();
        $keypoints = HowWorkKeypoint::where('status', true)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $hajjpackages = HajjPackage::where('status', 1)->get();
        $hajjpackageimages = HajjPackageImages::all();

        $tourpackages = PackageTour::where('status', 1)->get();
        $tourpackageimages = PackageTourImages::all();


        $hotDealsPackageTour = PackageTour::where('hot_deal', 1)->get();
        $hotDealsHajjPackage = HajjPackage::where('hot_deal', 1)->get();

        // Merge both collections
        $hotDeals = $hotDealsPackageTour->merge($hotDealsHajjPackage);

        // Fetch images for both types of packages
        $packagetourimages = PackageTourImages::whereIn('package_tour_id', $hotDealsPackageTour->pluck('id'))->get();
        $imageshajjpackage = HajjPackageImages::whereIn('hajj_packages_id', $hotDealsHajjPackage->pluck('id'))->get();


        $contact = Contact::first();

        $products = Product::where('status', 1)->latest()->take(3)->get();
        $latestNews = News::latest()->take(3)->get();
        return view(
            'frontend.index',
            compact(
                'sliders',
                'sliderContent',
                'testimonials',
                'advertisements',
                'destinationcountries',
                'allDestination',
                'aboutus',
                'aboutKeypoints',
                'clientTitle',
                'clients',
                'notices',
                'howWork',
                'keypoints',
                'blogs',
                'hajjpackages',
                'hajjpackageimages',
                'tourpackages',
                'tourpackageimages',
                'hotDeals',
                'packagetourimages',
                'imageshajjpackage',
                'products',
                'latestNews',
                'contact',
            )
        );
    }
    public function faq()
    {
        $faqs = Faq::where('status', true)->get();

        return view('frontend.faq', compact('faqs'));
    }
    public function privacyPolicy()
    {
        $privacyPolicy = privacyPolicy::where('status', true)->get();

        return view('frontend.privacy-policy', compact('privacyPolicy'));
    }
    public function termsCondition()
    {
        $termsCondition = termsCondition::where('status', true)->get();

        return view('frontend.terms-condition', compact('termsCondition'));
    }

}
