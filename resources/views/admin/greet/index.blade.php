@extends('layouts.admin')
@section('title','Greeting')
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
                    <a href="index.html" class="text-muted text-hover-primary">Greetings</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Greetings</li>
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
                    <h3>Greeting Table</h3>
                </div>
            </div>
            <div class="card-body">
                <div class=" row rounded border border-secondary p-5">
                    <div class="table-responsive p-5">
                        <table class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th width="60%">Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($greetings as $greet)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $greet->image) }}" width="70px" height="70px" alt="image"
                                            class="rounded-circle me-2">
                                            <span>{{ $greet->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $greet->designation }}</td>
                                    <td>{!! $greet->message !!}</td>
                                    <td>
                                        <a href="{{ route('greetings.edit', $greet->id) }}" class="btn btn-sm btn-primary">Edit</a>
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
