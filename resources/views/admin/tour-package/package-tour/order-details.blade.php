@extends('layouts.admin')
@section('title','Order Details')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Actions-->

        <!--end::Actions-->
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
                    <a href="#" class="text-muted text-hover-primary">Order Details</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Order Details</li>
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
                    <h3>Order Details</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row rounded border border-secondary p-5">
                    <p><strong>Package Name:</strong> {{ $order->package->package_name }}</p>
                    <p><strong>Location:</strong> {{ $order->package->location }}</p>
                    <p><strong>Duration:</strong> {{ $order->package->duration }}</p>
                    <p><strong>Price:</strong> {{ $order->package->price }}</p>
                    <p><strong>Customer Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p><strong>Address:</strong> {{ $order->address_1 }} {{ $order->address_2 }}</p>
                    <p><strong>City:</strong> {{ $order->city }}</p>
                    <p><strong>State:</strong> {{ $order->state }}</p>
                    <p><strong>Country:</strong> {{ $order->country }}</p>
                    <p><strong>Zip Code:</strong> {{ $order->zip_code }}</p>
                    <p><strong>Additional Info:</strong> {{ $order->additional_info }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
@endsection
