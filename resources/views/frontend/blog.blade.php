@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} ||Blog
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->blog_banner) }}') no-repeat; background-size: cover; width:100%" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
