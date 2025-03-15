@extends('layouts.admin')
@section('title','Our Service')
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
                    <a href="index.html" class="text-muted text-hover-primary">Our Service</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Our Service</li>
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
                    <h3>Our Service Table</h3>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_service">Create Service</a>
                </div>
                @include('admin.our-service.partial.create-modal')
            </div>
            <div class="card-body">
                <div class=" row rounded border border-secondary p-5">
                    <div class="table-responsive p-5">
                        <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Service Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td class="w-25">{!! $service->description !!}</td>
                                    <!-- image 1 -->
                                    <td>
                                        @if($service->image)
                                            <img src="{{ asset('storage/' . $service->image) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </td>
                                    <td>
                                        @if($service->status)
                                            <a href="{{ route('our-service.toggle-status', $service->id) }}" class="badge badge-success">Active</a>
                                        @else
                                            <a href="{{ route('our-service.toggle-status', $service->id) }}" class="badge badge-danger">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-light-info m-2" data-bs-toggle="modal" data-bs-target="#kt_modal_images_service_{{ $service->id }}">
                                            <i class="fa-solid fa-file-image"></i>
                                        </a>
                                        @include('admin.our-service.partial.images-modal')
                                        <a href="#" class="btn btn-sm btn-light-secondary m-2" data-bs-toggle="modal" data-bs-target="#kt_modal_extra_service_{{ $service->id }}">
                                            <i class="fa-solid fa-bars-staggered"></i>
                                        </a>
                                        @include('admin.our-service.partial.extra-modal')
                                        <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_service_{{ $service->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @include('admin.our-service.partial.edit-modal')

                                        <a href="#" class="btn btn-sm btn-light-danger m-2" id="delete-service-link" data-service-id="{{ $service->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>

                                        <form id="delete-service-form-{{ $service->id }}" action="{{ route('our-service.destroy', $service->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('[id^="delete-service-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const serviceId = this.getAttribute('data-service-id');
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
                        document.getElementById('delete-service-form-' + serviceId).submit();
                    }
                });
            });
        });
    });
</script>

@endpush
