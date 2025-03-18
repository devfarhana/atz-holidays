@extends('layouts.admin')
@section('title','Banner Images')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Banner Images</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Banner Image</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-title">
                    <h3>Banner Image Table</h3>
                </div>
            </div>
            <div class="card-body">
                <div class=" row rounded border border-secondary p-5">
                    <div class="table-responsive p-5">
                        <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Description</th>
                                    <th>About Image</th>
                                    <th>Years Of Experience</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aboutUs as $about)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->sub_title }}</td>
                                    <td class="w-25">{!! $about->description !!}</td>
                                    <td class="">
                                        @if($about->about_img_1)
                                            <img class="m-3" src="{{ asset('storage/' . $about->about_img_1) }}" width="96px" height="72px" alt="image">
                                        @endif
                                        @if($about->about_img_2)
                                            <img class="m-3" src="{{ asset('storage/' . $about->about_img_2) }}" width="96px" height="72px" alt="image">
                                        @endif
                                        @if($about->about_img_3)
                                            <img class="m-3" src="{{ asset('storage/' . $about->about_img_3) }}" width="96px" height="72px" alt="image">
                                        @endif
                                        @if($about->about_img_4)
                                            <img class="m-3" src="{{ asset('storage/' . $about->about_img_4) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </td>
                                    <td>{{ $about->year_of_experience }} <br>{{ $about->experience_txt }}</td>
                                    <td>
                                        <a href="{{ route('about-us.edit',$about->id) }}" class="btn btn-sm btn-light-primary m-2">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
