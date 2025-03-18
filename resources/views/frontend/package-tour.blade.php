@extends('layouts.master')
@section('title')
{{ $settings->system_name }} || Package Tour
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->hajj_banner) }}') no-repeat; background-size: cover; width:100%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Package Tour</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Package Tour</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<!-- Page Wrapper -->
<div class="content">
    <div class="container">
        <div class="row justify-content-center row-gap-5">
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
        </div>
    </div>
</div>
<!-- /Page Wrapper -->
@endsection
