@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} || About Us
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->about_banner) }}') no-repeat; background-size: cover; width:100%" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{'/'}}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- About Section -->
<section class="place-section bg-light-200">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-car mb-4 mb-lg-0 wow zoomIn">
                    <div class="row align-items-center gx-0">
                        <div class="col-6">
                            <div class="about-img-01">
                                <img src="{{ asset('storage/' .$aboutus->about_img_1) }}" alt="img" class="img-fluid about-image">
                            </div>
                            <div class="about-img-03">
                                <img src="{{ asset('storage/' .$aboutus->about_img_3) }}" alt="img" class="img-fluid about-image">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-img-02">
                                <img src="{{ asset('storage/' .$aboutus->about_img_2) }}" alt="img" class="img-fluid about-image">
                            </div>
                            <div class="about-img-04">
                                <img src="{{ asset('storage/' .$aboutus->about_img_4) }}" alt="img" class="img-fluid about-image">
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
                        <h2 class="section-main-title">{{ $aboutus->sub_title }}</span></h2>
                    </div>
                    <p class="base-paragraph">{!! $aboutus->description !!}</p>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($aboutKeypoints as $aboutKeypoint )
            <div class="col-md-4">
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
    </div>
</section>
<!-- /About Section -->


<!-- Our Team -->
<section class="section team-section">
    <div class="container">
        <div>
            <div class="row justify-content-center">
                <div class="col-md-7 d-flex justify-content-center">
                    <div class="header-section text-center">
                        <h2 class="mb-2">Our <span class="text-primary">Team</span></h2>
                        @if ($teamPage)
                        <p class="fs-16 text-gray-6">{{$teamPage->title}}</p>
                        @endif

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item-->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Img"
                                    class="img-fluid">
                            </div>
                            <div class="team-overlay ">
                                <div class="bg-white py-2 px-3  rounded-pill  text-center">
                                    <h5>{{ $team->name }}</h5>
                                    <p class="fs-16 text-gray-6">{{ $team->position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Team Item-->
                </div>
                @endforeach

            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="{{route('team')}}" class="btn btn-dark">View All Experts<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- /Our Team -->

<!-- Testimonial Section -->
<section class="place-section testimonial-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header text-center">
                    <h2 class="section-main-title">What’s Our <span>CUSTOMER</span> Says</h2>
                    <p class="sub-title">DreamsTour Marketplace is a platform designed to connect fans with exclusive
                        experiences related to a specific tour</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel testimonial-slider">
            <!-- Testimonial Item-->
            @foreach ($testimonials as $testimonial)
            <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                <div class="card-body">
                    <h6 class="testimonial-quots"><i class='bx bxs-quote-left bx-tada text-mute'></i>{{ $testimonial->title }}</h6>
                    <p class="default-text">{!! $testimonial->description !!}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" class="rounded-circle"
                                    alt="img">
                            </a>
                            <div class="ms-3">
                                <h6 class="testimonial-title"><a href="javascript:void(0);">{{ $testimonial->name }}</a></h6>
                                <span>{{ $testimonial->designation }}</span>
                                <p class="testimonial-designation">{{ $testimonial->country }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Testimonial Item-->
        </div>
    </div>
    <div class="testimonial-bg">
        <img src="{{ asset('frontend/assets') }}/img/bg/testimonial-bg-01.svg" alt="img">
    </div>
</section>
<!-- /Testimonial Section -->
@endsection
