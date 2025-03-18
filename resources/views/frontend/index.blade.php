@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} || Home
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="banner-slider banner-sec owl-carousel">
        @foreach ($sliders as $slider)
        <div class="slider-img">
            <img src="{{ asset('storage/' . $slider->image) }}" alt="Img">
        </div>
        @endforeach

    </div>
    <div class="container">
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-md-12 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="banner-content text-start">
                        <h1 class="text-white display-5 mb-2">{{ $sliderContent->title }}</h1>
                        <p class="text-white">{{ $sliderContent->sub_title }}</p>
                        <a href="{{ $sliderContent->button_url }}" class="btn btn-primary">{{ $sliderContent->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Advertise Section -->
<section class="place-section">
    <div class="container">
        <div class="blog-slider owl-carousel nav-center">
            @foreach ($advertisements as $advertisement)
            <!-- Blog Item-->
            <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                <a href="{{$advertisement->url}}" class="blog-img">
                    <img src="{{ asset('storage/' .$advertisement->image) }}" alt="img">
                </a>
            </div>
            <!-- /Blog Item-->
            @endforeach


        </div>
    </div>
</section>
<!-- Advertise Section -->
<!-- Popular Destination -->
<section class="place-section pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">Popular <span>Destinations</span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="place-nav pricing-plan-tab">
                <div class="nav justify-content-center">
                    <div class="tab-btn d-flex align-items-center">
                        @foreach ($destinationcountries as $index => $country)
                        @if($country->destination->isNotEmpty())
                        <!-- Check if country has destinations -->
                        <div>
                            <a href="javascript:void(0);" class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                data-bs-toggle="tab" data-bs-target="#pricing-list-{{ $country->id }}">
                                {{ $country->country_name }}
                            </a>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="tab-content">
                @foreach ($destinationcountries as $index => $country)
                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="pricing-list-{{ $country->id }}">
                    <div class="row">
                        @foreach ($country->destination as $destination)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="destination-set wow fadeInUp">
                                <div class="destination-img">
                                    <img src="{{ asset('storage/' . $destination->image) }}" alt="Img">
                                </div>
                                <div
                                    class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                                    <a href="javascript:void(0);">
                                        <h5 class="text-white fs-20 fw-semibold mb-1">{{ $destination->destination_name
                                            }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Popular Destination -->
<!-- Notice Section -->
<section class="section client-section-four wow zoomIn pb-5" data-wow-delay="0.2s">
    <div class="container">
        <div class="client-sec">
            <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
                <div class="slide-list d-flex">
                    @foreach ( $notices as $notice)
                    <div class="support-item">
                        <h5>{{$notice->name}}</h5>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notice Section -->
<!-- Hajj & Umrah Package -->
@if($hajjpackages->isNotEmpty())
<section class="place-section bg-light-300">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">Hajj & Umrah Package </h2>
                </div>
            </div>
        </div>
        <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp mt-4" data-wow-delay="1.5">
            <!-- Tours Grid -->
            @foreach($hajjpackages as $package)
            <div class="place-item mb-4 flex-fill">
                <div class="place-img">
                    <div class="img-slider image-slide owl-carousel nav-center">
                        @foreach ($hajjpackageimages as $packageimage)
                        @if($packageimage->hajj_packages_id == $package->id)
                        <div class="slide-images">
                            <a href="#">
                                <img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid fixed-size" alt="img">
                            </a>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    <div class="fav-item">
                        <span class="badge d-inline-flex align-items-center">{{ $package->offer }} <br />off</span>
                        <a href="javascript:void(0);" class="fav-icon selected">
                            <i class="isax isax-heart5"></i>
                        </a>
                    </div>
                </div>
                <div class="place-content custom-padding-sm">
                    <h5 class="tour-package-title mb-1"><a href="{{route('HajjpackageDetails',$package->slug)}}">{{
                            $package->package_name
                            }}</a></h5>
                    <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i>{{ $package->location }}</p>
                    <div class="tour-quick-overview-box mb-3">
                        <div class="guest-details2">
                            <ul>
                                <li>
                                    <h6><i class='bx bx-moon'></i>{{ $package->duration }}</h6>
                                </li>
                            </ul>
                        </div>
                        <span class="d-inline-block vertical-splits">
                            <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                        </span>
                        <div class="guest-details2 ms-2">
                            <ul class="list-inline mb-0">
                                <li class="text-end list-inline-item">
                                    @foreach ($package->features as $feature)
                                    <img class="feature-img" src="{{ asset('storage/' . $feature->icon) }}"
                                        alt="Feature Icon"
                                        style="width: 20px; height: 24px; object-fit: contain; display: inline-block; margin-right: 5px;">
                                    @endforeach
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex flex-wrap align-items-center w-50">
                            <a href="{{route('HajjpackageDetails',$package->slug)}}" class="view-tour-btn-sm">VIEW
                                PACKAGE</a>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> {{ $package->price }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Tours Grid -->

        </div>
        <div class="text-center view-all wow fadeInUp mt-4">
            <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i
                    class="isax isax-arrow-right-3 ms-2"></i></a>
        </div>
    </div>
</section>
@endif
<!-- Hajj & Umrah Package -->
<!--Tour Packages-->
@if($tourpackages->isNotEmpty())
<section class="place-section bg-light-300">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">Package Tour</h2>
                </div>
            </div>
        </div>
        <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp mt-4" data-wow-delay="1.5">
            <!-- Tours Grid -->
            @foreach($tourpackages as $package)
            <div class="place-item mb-4 flex-fill">
                <div class="place-img">
                    <div class="img-slider image-slide owl-carousel nav-center">
                        @foreach ($tourpackageimages as $packageimage)
                        @if($packageimage->package_tour_id == $package->id)
                        <div class="slide-images">
                            <a href="#">
                                <img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid" alt="img">
                            </a>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    <div class="fav-item">
                        <span class="badge d-inline-flex align-items-center">{{ $package->offer }} <br />off</span>
                        <a href="javascript:void(0);" class="fav-icon selected">
                            <i class="isax isax-heart5"></i>
                        </a>
                    </div>
                </div>
                <div class="place-content custom-padding-sm">
                    <h5 class="tour-package-title mb-1"><a href="{{route('PackagetourDetails',$package->slug)}}">{{
                            $package->package_name
                            }}</a></h5>
                    <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i>{{ $package->location }}</p>
                    <div class="tour-quick-overview-box mb-3">
                        <div class="guest-details2">
                            <ul>
                                <li>
                                    <h6><i class='bx bx-moon'></i>{{ $package->duration }}</h6>
                                </li>
                            </ul>
                        </div>
                        <span class="d-inline-block vertical-splits">
                            <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                        </span>
                        <div class="guest-details2 ms-2">
                            <ul class="list-inline mb-0">
                                <li class="text-end list-inline-item">
                                    @foreach ($package->features as $feature)
                                    <img class="feature-img" src="{{ asset('storage/' . $feature->icon) }}"
                                        alt="Feature Icon"
                                        style="width: 20px; height: 24px; object-fit: contain; display: inline-block; margin-right: 5px;">
                                    @endforeach
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex flex-wrap align-items-center w-50">
                            <a href="{{route('PackagetourDetails',$package->slug)}}" class="view-tour-btn-sm">VIEW
                                PACKAGE</a>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> {{ $package->price }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Tours Grid -->

        </div>
        <div class="text-center view-all wow fadeInUp mt-4">
            <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i
                    class="isax isax-arrow-right-3 ms-2"></i></a>
        </div>
    </div>
</section>
@endif
<!--Tour Packages-->
<!-- About Section -->
@if($aboutus)
<section class="place-section ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-car mb-4 mb-lg-0 wow zoomIn">
                    <div class="row align-items-center gx-0">
                        <div class="col-6">
                            <div class="about-img-01">
                                <img src="{{ asset('storage/' .$aboutus->about_img_1) }}" alt="img" class="img-fluid">
                            </div>
                            <div class="about-img-03">
                                <img src="{{ asset('storage/' .$aboutus->about_img_3) }}" alt="img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-img-02">
                                <img src="{{ asset('storage/' .$aboutus->about_img_2) }}" alt="img" class="img-fluid">
                            </div>
                            <div class="about-img-04">
                                <img src="{{ asset('storage/' .$aboutus->about_img_4) }}" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="about-exp">
                        <h2>{{ $aboutus->year_of_experience }}</h2>
                        <p>{{ $aboutus->experience_txt }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInDown ">
                <div class="about-textarea">
                    <div class="section-header text-left">
                        <h6 class="fs-14 fw-medium text-primary d-flex align-items-center mb-2"><i
                                class="isax isax-trend-up me-1"></i>{{ $aboutus->title }}</h6>
                        <h2 class="section-main-title">{{ $aboutus->sub_title }}</h2>
                    </div>
                    <p class="base-paragraph">{!! Str::limit($aboutus->description, 400, '...') !!}</p>
                    <div class="row g-4">
                        @foreach ($aboutKeypoints as $aboutKeypoint )
                        <div class="col-md-6">
                            <div class="bg-prime-trans mb-4 wow fadeInUp" data-wow-delay="1.5"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="card border-0 mb-0">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="mb-2 custom-title-md">{{ $aboutKeypoint->title }}</h5>
                                            <p class="custom-text-md">{{ $aboutKeypoint->details }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-3 mb-0 mb-md-4 mb-lg-0 mt-4">
                        <a href="{{route('aboutus')}}" class="btn btn-dark d-inline-flex align-items-center"><i
                                class="isax isax-add-circle5 me-2"></i>More About Backpack Wala</a>
                        <a href="car-booking.html" class="btn btn-primary d-inline-flex align-items-center"><i
                                class="isax isax-calendar-2 me-2"></i>All Tour Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- /About Section -->
<!--Client Section-->
<section class="place-section bg-light-300">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="section-header text-center">
                    <h2 class="section-main-title">{{$clientTitle->title}}</h2>
                </div>
            </div>
        </div>
        <div class="more-companies-logo">
            <div class="owl-carousel client-slider-two owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2640px, 0px, 0px); transition: 2s; width: 4400px;">
                        @foreach ($clients as $client)
                        <div class="owl-item" style="width: 196px; margin-right: 24px;">
                            <div class="client-img">
                                @if($client->show_url)
                                <a href="{{$client->url}}">
                                    @endif
                                    <img src="{{ asset('storage/' . $client->logo) }}" alt="Client Logo">
                                    @if($client->show_url)
                                </a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                            class="fa-solid fa-chevron-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="fa-solid fa-chevron-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</section>
<!--Client Section-->
{{-- <!-- HOT Deals -->
@if($hotDeals->isNotEmpty())
<section class="hero-sec-hot">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title text-white">Hot Deals</h2>
                </div>
            </div>
        </div>
        <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp mt-3" data-wow-delay="1.5">
            <!-- Tours Grid -->
            @foreach($hotDeals as $package)
            <div class="place-item mb-4 flex-fill">
                <div class="place-img">
                    <div class="img-slider image-slide owl-carousel nav-center">
                        <!-- Check if the package is from PackageTour or HajjPackage -->
                        @if(isset($package->package_tour_id))
                        @foreach ($packagetourimages as $packageimage)
                        @if($packageimage->package_tour_id == $package->id)
                        <div class="slide-images">
                            <a href="#">
                                <img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid" alt="img">
                            </a>
                        </div>
                        @endif
                        @endforeach
                        @elseif(isset($package->hajj_packages_id))
                        @foreach ($imageshajjpackage as $packageimage)
                        @if($packageimage->hajj_packages_id == $package->id)
                        <div class="slide-images">
                            <a href="#">
                                <img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid" alt="img">
                            </a>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </div>
                    <div class="fav-item">
                        <span class="badge d-inline-flex align-items-center">{{ $package->offer }} <br />off</span>
                        <a href="javascript:void(0);" class="fav-icon selected">
                            <i class="isax isax-heart5"></i>
                        </a>
                    </div>
                </div>
                <div class="place-content custom-padding-sm">
                    <h5 class="tour-package-title mb-1">
                        <!-- Check if the package is from PackageTour or HajjPackage -->
                        @if(isset($package->package_tour_id))
                        <a href="{{route('PackagetourDetails',$package->slug)}}">{{ $package->package_name }}</a>
                        @elseif(isset($package->hajj_packages_id))
                        <a href="{{route('HajjpackageDetails',$package->slug)}}">{{ $package->package_name }}</a>
                        @endif
                    </h5>
                    <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i>{{ $package->location }}</p>
                    <div class="tour-quick-overview-box mb-3">
                        <div class="guest-details2">
                            <ul>
                                <li>
                                    <h6><i class='bx bx-moon'></i>{{ $package->duration }}</h6>
                                </li>
                            </ul>
                        </div>
                        <span class="d-inline-block vertical-splits">
                            <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                        </span>
                        <div class="guest-details2 ms-2">
                            <ul class="list-inline mb-0">
                                <li class="text-end list-inline-item">
                                    @foreach ($package->features as $feature)
                                    <img class="feature-img" src="{{ asset('storage/' . $feature->icon) }}"
                                        alt="Feature Icon"
                                        style="width: 20px; height: 24px; object-fit: contain; display: inline-block; margin-right: 5px;">
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex flex-wrap align-items-center w-50">
                            <!-- Check if the package is from PackageTour or HajjPackage -->
                            @if(isset($package->package_tour_id))
                            <a href="{{route('PackagetourDetails',$package->slug)}}" class="view-tour-btn-sm">VIEW
                                PACKAGE</a>
                            @elseif(isset($package->hajj_packages_id))
                            <a href="{{route('HajjpackageDetails',$package->slug)}}" class="view-tour-btn-sm">VIEW
                                PACKAGE</a>
                            @endif
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> {{ $package->price }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Tours Grid -->
        </div>
        <div class="text-center view-all wow fadeInUp mt-5">
            <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i
                    class="isax isax-arrow-right-3 ms-2"></i></a>
        </div>
    </div>
</section>
@endif
<!-- HOT Deals --> --}}
<!-- Testimonial Section -->
<section class="place-section bg-light-300">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">What’s Our <span>CUSTOMER</span> Says</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel testimonial-slider">
            <!-- Testimonial Item-->
            @foreach ($testimonials as $testimonial)
            <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                <div class="card-body">
                    <h6 class="testimonial-quots"><i class='bx bxs-quote-left bx-tada text-mute'></i>{{
                        $testimonial->title }}</h6>
                    <p class="default-text">{!! $testimonial->description !!}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" class="rounded-circle"
                                    alt="img">
                            </a>
                            <div class="ms-3">
                                <h6 class="testimonial-title"><a href="javascript:void(0);">{{ $testimonial->name }}</a>
                                </h6>
                                <p class="testimonial-designation">{{ $testimonial->designation }} , {{
                                    $testimonial->country }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- /Testimonial Section -->
<!-- Advertise Section -->
<section class="place-section">
    <div class="container">
        <div class="blog-slider owl-carousel nav-center">
            @foreach ($advertisements as $advertisement)
            <!-- Blog Item-->
            <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                <a href="{{$advertisement->url}}" class="blog-img">
                    <img src="{{ asset('storage/' .$advertisement->image) }}" alt="img">
                </a>
            </div>
            <!-- /Blog Item-->
            @endforeach

        </div>
    </div>
</section>
<!-- Advertise Section -->
<!-- How It Work Section -->
<section class="section work-section bg-light-500">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-lg-4">
                <div class="section-header">
                    <div>
                        <p class="mb-2 fw-medium d-flex align-items-center"><span class="text-bar bg-white"></span>How
                            it Works</p>
                        @if ($howWork)
                        <h2 class="section-main-title">{{ $howWork->title }}</h2>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-lg-8">
                <div class="row">
                    @foreach($keypoints as $keypoint)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="work-avatar">
                                        0{{ $loop->iteration }}<small class="text-primary">.</small>
                                    </span>
                                    <span class="work-icon d-flex">
                                        <img src="{{ asset('storage/' . $keypoint->icon_img) }}" alt="Work Icon"
                                            style="width: 40px; height: 40px;">
                                    </span>
                                </div>
                                <div>
                                    <h5 class="mb-2 text-truncate">{{ $keypoint->title }}</h5>
                                    <p class="text-truncate line-clamb-3">{{ $keypoint->details }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /How It Work Section -->
<!-- Blog Section -->
<section class="place-section blog-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">Recent <span>Blogs</span></h2>
                    <p class="sub-title">Stay Updated on the Stories & Stay Updated </p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($blogs as $blog )
            <!-- Blog Item-->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="blog-item blog-wrap flex-fill wow fadeInUp" data-wow-delay="0.2s">
                    <a href="{{ route('blog.details', $blog->slug) }}" class="blog-img">
                        <img src="{{ asset('storage/' . $blog->blog_image) }}" alt="img">
                        <span class="badge bg-white text-gray-9 fs-14 fw-medium">{{ $blog->blogCategory->name }}</span>
                    </a>
                    <div class="blog-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-center mb-2">
                                <span class="avatar avatar-md2 flex-shrink-0 me-2">
                                    <img src="{{ asset('storage/'. $blog->author_image ) }}" alt="img" class="">
                                </span>
                                <p class="fs-14">{{ $blog->author }}</p>
                            </a>
                            <p class="fs-13 fw-medium d-flex align-items-center mb-2"><i
                                    class="isax isax-calendar-1 text-gray-9 fs-20 me-2"></i>{{\Carbon\Carbon::parse($blog->date)->format('d
                                F, Y') }}</p>
                        </div>
                        <h5 class="blog-title"><a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- /Blog Item-->
            @endforeach
        </div>
</section>
<!-- /Blog Section -->
@endsection
