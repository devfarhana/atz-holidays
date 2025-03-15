@extends('layouts.admin')
@section('title','Contact Us')
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
                    <a href="index.html" class="text-muted text-hover-primary">Contact</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Contact</li>
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
                    <h3>Contact Table</h3>
                </div>
                 {{-- <div class="d-flex justify-content-end">
                    <a href="{{route('contactus.create')}}" class="btn btn-sm fw-bold btn-primary">Create Contact</a>
                </div> --}}
            </div>
            <div class="card-body">
                <div class=" row rounded border border-secondary p-5">
                    <div class="table-responsive p-5">
                        <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th width="10%">Title</th>
                                    <th width="10%">Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Map</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{!! $contact->map !!}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_kormo_poridhi_{{ $contact->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @include('admin.contact-us.edit-modal')
                                    </td>
                                </tr>
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
