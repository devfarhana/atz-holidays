@extends('layouts.admin')
@section('title',' Popular Destination')
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
                    <a href="index.html" class="text-muted text-hover-primary">Destination</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Popular Destination</li>
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
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-title">
                            <h3>Country Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_country">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row border rounded border-secondary p-5">
                            <div class="table-responsive p-5">
                                <table id="" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>SL</th>
                                            <th> Country Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allcountries as $countries)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $countries->country_name }}</td>

                                            <!-- Status -->
                                            <td>
                                                @if($countries->status)
                                                <a href="{{ route('popular-destination.country.toggle-status', $countries->id) }}"
                                                    class="badge badge-success">Active</a>
                                                @else
                                                <a href="{{ route('popular-destination.country.toggle-status', $countries->id) }}"
                                                    class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>

                                            <!-- Action Buttons -->
                                            <td>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_country-{{ $countries->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-5"></i>
                                                </a>
                                                <a href="#" id="delete-destination-link"
                                                    data-destination-id="{{ $countries->id }}">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>

                                                <form id="delete-destination-form-{{ $countries->id }}"
                                                    action="{{ route('popular-destination.country.destroy', $countries->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                            @include('admin.popular-destination.partial.edit-country-modal')

                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-title">
                            <h3>Popular Destination Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_destination">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row border rounded border-secondary p-5">
                            <div class="table-responsive p-5">
                                <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>SL</th>
                                            <th>Destination Name</th>
                                            <th>Country Name</th>
                                            <th>Blog Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allDestination as $destination)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $destination->destination_name }}</td>
                                            <td>{{ $destination->country->country_name }}</td>

                                            <!-- Image -->
                                            <td>
                                                @if($destination->image)
                                                <img src="{{ asset('storage/' . $destination->image) }}" width="96px"
                                                    height="72px" alt="image">
                                                @endif
                                            </td>


                                            <!-- Status -->
                                            <td>
                                                @if($destination->status)
                                                <a href="{{ route('popular-destination.toggle-status', $destination->id) }}"
                                                    class="badge badge-success">Active</a>
                                                @else
                                                <a href="{{ route('popular-destination.toggle-status', $destination->id) }}"
                                                    class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_destination-{{ $destination->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-5"></i>
                                                </a>
                                                <a href="#" id="delete-destination-link" data-destination-id="{{ $destination->destination_name }}">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>

                                                <form id="delete-destination-form-{{ $destination->destination_name }}"
                                                    action="{{ route('popular-destination.destroy', $destination->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @include('admin.popular-destination.partial.edit-modal')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.popular-destination.partial.create-modal')
    @include('admin.popular-destination.partial.create-country-modal')
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('[id^="delete-destination-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const destinationId = this.getAttribute('data-destination-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this action!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-secondary'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, find the form and submit it
                        document.getElementById('delete-destination-form-' + destinationId).submit();
                    }
                });
            });
        });
    });
</script>

@endpush
