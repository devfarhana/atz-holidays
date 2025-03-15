<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\News;

use App\Models\Team;
use App\Models\Jorip;
use App\Models\Sector;
use App\Models\Slider;
use App\Models\Survey;
use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\Visitor;
use App\Models\Customer;
use App\Models\Greeting;
use App\Models\Comission;
use App\Models\Occupation;
use App\Models\OurService;
use App\Models\OpenOpinion;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Models\ComissionMember;
use App\Models\GalleryCategory;
use App\Models\QuestionOpinion;
use App\Http\Controllers\Controller;
use App\Models\Aboutkeypoint;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Client;
use App\Models\ClientTitle;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Destination;
use App\Models\HajjPackage;
use App\Models\HajjPackageImages;
use App\Models\HowWork;
use App\Models\HowWorkKeypoint;
use App\Models\NoticeType;
use App\Models\Package;
use App\Models\PackageCategory;
use App\Models\PackageTour;
use App\Models\PackageTourImages;
use App\Models\Product;
use App\Models\SliderContent;
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

        $services = OurService::where('status', 1)->get();
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
                'services',
                'products',
                'latestNews',
                'contact',
            )
        );
    }
}
