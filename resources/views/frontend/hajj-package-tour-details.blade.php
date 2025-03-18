@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} || Package Details
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->hajj_banner) }}') no-repeat; background-size: cover; width:100%" >
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title mb-2">Tour Details</h2>
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                   <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                   <li class="breadcrumb-item">Tours</li>
                   <li class="breadcrumb-item active" aria-current="page">Tour Details</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </div>
 <!-- /Breadcrumb -->
 <!-- Page Wrapper -->
 <section class="place-section">
    <div class="container">
       <div class="row">
          <div class="col-xl-8">
             <div class="banner-form card">
                <div class="card-header">
                   <div class="d-flex align-items-center justify-content-between">
                      <div class="">
                         <div class="banner-form-tab mb-0 p-0">
                            <ul class="nav">
                               <li>
                                  <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#photos">
                                  Photos
                                  </a>
                               </li>
                               <li>
                                  <a href="javascript:void(0);" class="nav-link " data-bs-toggle="tab" data-bs-target="#videos">
                                  Videos
                                  </a>
                               </li>
                               <li>
                                  <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#map">
                                  MAP
                                  </a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="d-flex align-items-center">
                         <a href="javascript:void(0);" class="btn btn-outline-light btn-icon btn-sm d-flex align-items-center justify-content-center me-2"><i class="isax isax-share"></i></a>
                         <a href="javascript:void(0);" class="btn btn-outline-light btn-sm d-inline-flex align-items-center"><i class="isax isax-heart5 text-danger me-1"></i>Save</a>
                      </div>
                   </div>
                </div>
                <div class="card-body">
                   <div class="tab-content">
                      <div class="tab-pane fade active show" id="photos">
                         <div class="service-wrap">
                            <div class="slider-wrap vertical-slider tour-vertical-slide d-flex align-items-center">
                               <div class="slider-for nav-center" id="large-img">
                                @foreach ($hajjpackageimages as $packageimage)
                        @if($packageimage->hajj_packages_id == $package->id)
                                <div class="service-img">
                                    <img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid"
                                        alt="Slider Img">
                                </div>
                                @endif
                                @endforeach
                               </div>

                               @if($hajjpackageimages->isNotEmpty())
                               <a href="{{ asset('storage/' . $hajjpackageimages->first()->image) }}" data-fancybox="gallery" class="btn btn-white btn-xs view-btn">
                                   <i class="isax isax-image me-1"></i>See All
                               </a>
                           @endif


                               <div class="slider-nav nav-center" id="small-img">
                                @foreach ($hajjpackageimages as $packageimage)
                        @if($packageimage->hajj_packages_id == $package->id)
                                <div class="service-img">
                                    <div><img src="{{ asset('storage/' . $packageimage->image) }}" class="img-fluid" alt="Slider Img"></div>
                                </div>
                                @endif
                                @endforeach
                               </div>
                            </div>
                         </div>
                      </div>
                       <div class="tab-pane fade" id="videos">
                         <div class="service-wrap mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                               <div class="mb-2">
                                  <h4 class="mb-1 d-flex align-items-center flex-wrap mb-2">Mystical Nepal - Kathmandu, Pokhara & Ghandruk Adventure</h4>
                                  <div class="d-flex align-items-center flex-wrap">
                                     <p class="fs-14 mb-2 me-3 pe-3 border-end"><i class="isax isax-receipt text-primary me-2"></i>Adventure Tour</p>
                                  </div>
                               </div>
                            </div>
                            <div class="slider-wrap vertical-slider tour-vertical-slide d-flex align-items-center">
                                <div class="slider-for nav-center" id="large-img">
                                    @foreach($package->video as $video)
                                        <div class="service-img">
                                            <video src="{{ asset('storage/' . $video->video) }}" class="img-fluid" controls autoplay></video>
                                        </div>
                                    @endforeach
                                </div>

                                <a href="assets/img/tours/tour-large-01.jpg" data-fancybox="gallery"
                                    class="btn btn-white btn-xs view-btn">
                                    <i class="isax isax-image me-1"></i>See All
                                </a>

                                <div class="slider-nav nav-center" id="small-img">
                                    @foreach($package->video as $video)
                                        <div>
                                            <video src="{{ asset('storage/' . $video->video) }}" class="img-fluid" controls></video>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                         </div>
                      </div>
                      <div class="tab-pane fade" id="map">
                         <!-- Map -->
                         <div>
                            {!! $package->map_url !!}
                         </div>
                         <!-- /Map -->
                      </div>
                   </div>
                </div>
             </div>
             <div class="banner-form card mb-0">
                    <div class="card-header">
                        <div class="banner-form-tab mb-0 p-0">
                            <ul class="nav">
                                <li>
                                    <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#overview">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link " data-bs-toggle="tab"
                                        data-bs-target="#Hotel">
                                        Hotel
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Activities">
                                        Activities
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Itinerary">
                                        Itinerary
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Inclusions">
                                        Inclusions
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Exclusions">
                                        Exclusions
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Price">
                                        Price
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Policy">
                                        Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="overview">
                                <div class="tab-content" id="package-tab-content">
                                    <div class="long-description">
                                        <h4 class="mb-1 d-flex align-items-center flex-wrap mb-2">
                                            {{$package->package_name}}</h4>
                                        <p style="text-align:justify"><span
                                                style="font-size:14px">{!!$package->description!!}</span></p>
                                        <p style="text-align:justify"> </p>
                                        <p><strong><u>Quick facts</u>:</strong></p>
                                        <ul>
                                            <li><strong>Duration:</strong>{{$package->duration}}</li>
                                            <li><strong>Start Point:</strong>{{$package->start_point}}</li>
                                            <li><strong>End Point:</strong>{{$package->end_point}}</li>
                                            <li><strong>Route:</strong>{{$package->route}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Hotel">
                                <div class="hotel-list">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="hotel-list">
                                                @foreach($package->hotel as $hotel)
                                                <div class="place-item mb-4">
                                                    <div class="place-img">
                                                        <div class="slide-images">
                                                            <a href="hotel-details.html">
                                                                <img src="{{ asset('storage/' . $hotel->image) }}"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="place-content pb-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between border-bottom flex-wrap">
                                                            <div>
                                                                <h5 class="mb-1 text-truncate"><a
                                                                        href="hotel-details.html">{{ $hotel->hotel_name }}</a></h5>
                                                                <p class="d-flex align-items-center mb-2"><i
                                                                        class="isax isax-location5 me-2"></i>{{ $hotel->location }}</p>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <div class="d-flex align-items-center text-nowrap">
                                                                    <span
                                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">{{ $hotel->rating }}</span>
                                                                    <p class="fs-14">({{ $hotel->number_review }})</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="line-ellipsis fs-14 mt-2">{!! Str::limit($hotel->details, 400, '...') !!}</p>
                                                        <a href="#" class="btn btn-primary mb-3">Room Details</a>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Activities">
                                <div class="hotel-list">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="hotel-list">
                                                <div class="place-item mb-4">
                                                    @foreach($package->activity as $activity)
                                                    <div class="place-img">
                                                        <div class="slide-images">
                                                            <a href="hotel-details.html">
                                                                <img src="{{ asset('storage/' . $activity->image) }}"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="place-content pb-1">
                                                        <h5 class="mb-1 text-truncate"><a href="hotel-details.html">{{
                                                                $activity->title }}</a></h5>
                                                        <p class="d-flex align-items-center mb-2"><i
                                                                class="isax isax-location5 me-2"></i>{{
                                                            $activity->location }}</p>
                                                        <p class="fs-14 mt-2">{!!$activity->description !!}</p>
                                                    </div>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Itinerary">
                                <h6 class="mb-3">Itinerary</h6>
                                <div class="d-flex align-items-center justify-content-between flex-wrap">

                                    <div class="row">
                                        <div class="col-lg-3 theiaStickySidebar">
                                            <div class="card border-0 mb-4 mb-lg-0">
                                                <div class="card-body">
                                                    <div>
                                                        <ul class="add-tab-list">
                                                            @foreach($package->itinerary as $key => $itinerary)
                                                                <li><a href="#basic_info" class="{{ $key == 0 ? 'active' : '' }}">{{ $itinerary->itinerary_days }}</a></li>
                                                            @endforeach
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <form action="add-hotel.html">
                                                @foreach($package->itinerary as $itinerary)
                                                <div class="card shadow-none" id="basic_info">
                                                    <div class="card-header">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-4">
                                                            <h5 class="fs-18 mt-5">{{ $itinerary->itinerary_days }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-1">
                                                        <div class="flow-content">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                <div>
                                                                    <h6 class="fw-medium mb-1">Day 1, Kickoff in Los
                                                                        Angeles</h6>
                                                                </div>
                                                            </div>
                                                            <p>{!! $itinerary->description !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Inclusions">
                                <h5 class="fs-18 mb-3">Includes</h5>
                                <div class="row gy-2">
                                    <div class="col-md-12">
                                        @foreach($package->inclusion as $inclusion)
                                        <p class="d-flex align-items-center mb-2">
                                            <i class="isax isax-tick-square5 text-success me-2"></i>{{ $inclusion->title}}
                                        </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Exclusions">
                                <h5 class="fs-18 mb-3">Excludes</h5>
                                <div class="row gy-2">
                                    <div class="col-md-12">
                                        @foreach($package->exclusion as $exclusion)
                                        <p class="d-flex align-items-center mb-2">
                                            <i class="isax isax-close-square5 text-danger me-2"></i>{{
                                            $exclusion->title }}
                                        </p>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Price">
                                <h5 class="mb-3 fs-18">Availability</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property"
                                                                id="property1" checked>
                                                            <label class="form-check-label" for="property1">
                                                                Villa
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property"
                                                                id="property2">
                                                            <label class="form-check-label" for="property2">
                                                                Condo
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property"
                                                                id="property3">
                                                            <label class="form-check-label" for="property3">
                                                                Cabin
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" name="property"
                                                                id="property4">
                                                            <label class="form-check-label" for="property4">
                                                                Apartments
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room"
                                                                id="room1" checked>
                                                            <label class="form-check-label" for="room1">
                                                                Single
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room"
                                                                id="room2">
                                                            <label class="form-check-label" for="room2">
                                                                Double
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room"
                                                                id="room3">
                                                            <label class="form-check-label" for="room3">
                                                                Delux
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" name="room"
                                                                id="room4">
                                                            <label class="form-check-label" for="room4">
                                                                Suite
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-form">
                                            <form class="d-lg-flex">
                                                <div class="d-flex form-info">
                                                    <div class="form-item">
                                                        <label class="form-label text-gray-9 mb-2">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="form-label text-gray-9 mb-2">Children <span
                                                                class="text-default fw-normal">( 2-12 Yrs
                                                                )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Policy">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Privacy Policy -->
                                            <p>
                                                At Travel DreamsTour, your privacy is important to us. This Privacy
                                                Policy outlines how we collect, use, disclose, and protect your personal
                                                information when you use our website and services.
                                            </p>
                                            <!-- Policy 1 -->
                                            @foreach($package->policy as $policy)
                                            <h6 class="mb-2">Policy {{ $loop->iteration }}</h6>
                                            <div class="mb-2">
                                                {!! $policy->description !!}
                                            </div>
                                            @endforeach
                                            <!-- /Policy 1 -->

                                            <!-- /Privacy Policy -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="col-xl-4 theiaStickySidebar">
            <div class="card bg-light-200">

                @if($hajjpackageimages->isNotEmpty())
                <img  src="{{ asset('storage/' . $hajjpackageimages->first()->image) }}" class="card-img-top" alt="Tour Image">
            @endif
                <div class="card-body">
                    <h5 class="">{{ $package->package_name }}</h5>
                    <p class="custom-text-sm border-bottom mb-3"><i class='bx bxs-map bx-flashing'></i> {{ $package->location }}</p>
                    <div>
                        <div class="tour-details-box">
                            <div class="align-items-center w-50">
                                <div class="">
                                    <p class="form-label text-gray-9 mb-0">Price</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-50">
                                <div class="">
                                    <h6 class="custom-title-sm">৳{{ $package->price }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tour-details-box">
                            <div class="align-items-center w-50">
                                <div class="">
                                    <p class="form-label text-gray-9 mb-0">Duration</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-50">
                                <div class="">
                                    <p class="custom-text-sm">{{ $package->duration }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-details-box">
                            <div class="align-items-center w-50">
                                <div class="">
                                    <p class="form-label text-gray-9 mb-0">Country</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-50">
                                <div class="">
                                    <p class="custom-text-sm">{{ $package->country }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour-details-box">
                            <div class="align-items-center w-50">
                                <div>
                                    <p class="form-label text-gray-9 mb-0">Features</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-50">
                                <div class="d-flex gap-2">
                                    @foreach ($package->features as $feature)
                                    <span class="icon-circle">
                                        <img src="{{ asset('storage/' . $feature->icon) }}" alt="Plane" style="width: 20px; height: 20px;">
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tour-details-box">
                            <div class="align-items-center w-50">
                                <div class="">
                                    <p class="form-label text-gray-9 mb-0">Holiday Theme</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-50">
                                <div class="">
                                    <p class="custom-text-sm">{{ $package->holiday_theme }}</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('bookNow',$package->slug)}}" class="btn btn-primary search-btn ms-0 w-100 fs-14 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card shadow-none">
                <div class="card-header border-0 pb-0">
                    <div class="pb-3 border-bottom">
                        <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Need BackpackWala Help?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <p class="custom-text-sm">We would be more than happy to help you. Our team advisor are 24/7 at
                        your service to help you. </p>
                    <div class="border-bottom mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i
                                    class="isax isax-call-calling5 fs-24"></i></span>
                            <div>
                                <p class="fs-14 mb-0">Phone Number</p>
                                <h6 class="text-gray-6">{{ $settings->phone }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex align-items-center3">
                            <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i
                                    class="isax isax-sms5 fs-24"></i></span>
                            <div>
                                <p class="fs-14 mb-0">Email Address</p>
                                <h6 class="text-gray-6">{{ $settings->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-none">
                <div class="card-header border-0 pb-0">
                    <div class="pb-3 border-bottom">
                        <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Why Book With Us?</h5>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($whyBooks as $whyBook)
                    <div class="border-bottom mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><img src="{{ asset('storage/' . $whyBook->icon) }}" alt="Plane" style="width: 20px; height: 20px;"></span>

                            <div>
                                <h6 class="text-gray-6"> {{ $whyBook->title }}</h6>
                                <p class="fs-14 mb-0">{{ $whyBook->details }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
       </div>
    </div>
 </section>
 <!-- /Page Wrapper -->

@endsection




