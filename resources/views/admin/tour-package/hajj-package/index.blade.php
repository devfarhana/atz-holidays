@extends('layouts.admin')
@section('title','Package')
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
                    <a href="#" class="text-muted text-hover-primary">Tour Package</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage package</li>
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
                    <h3>Hajj & Umrah Package </h3>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{route('hajj-package.create')}}" class="btn btn-sm fw-bold btn-primary">Create
                        Package</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row rounded border border-secondary p-5">
                    <div class="table-responsive p-5">
                        <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th>SL</th>
                                    <th>Package Name</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Offer</th>
                                    <th>Duration</th>
                                    <th>Holiday Theme</th>
                                    <th>Hot Deals</th>
                                    <th>Status</th>
                                    <th>Additional Information</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $package->package_name }}</td>
                                    <td>{{ $package->location }} {{ $package->country }}</td>
                                    <td>{{ $package->price }}</td>
                                    <td>{{ $package->offer }}</td>
                                    <td>{{ $package->duration }}</td>
                                    <td>{{ $package->holiday_theme }}</td>
                                    <td>
                                        @if($package->hot_deal == 1)
                                        <a href="{{ route('hajj-package.toggle-hotDeals', $package->id) }}"
                                            class="badge badge-danger">Hot Deal</a>
                                        @else
                                        <a href="{{ route('hajj-package.toggle-hotDeals', $package->id) }}"
                                            class="badge badge-info">None</a>
                                        @endif

                                    </td>
                                    <td>
                                        @if($package->status)
                                        <a href="{{ route('hajj-package.toggle-status', $package->id) }}"
                                            class="badge badge-success">Active</a>
                                        @else
                                        <a href="{{ route('hajj-package.toggle-status', $package->id) }}"
                                            class="badge badge-danger">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('hajj-package.info', $package->id) }}"
                                            class="btn btn-sm btn-light-primary m-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="View More Info">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-light-secondary m-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_feature_{{ $package->id }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="View Features">
                                            <i class="fa-solid fa-bars-staggered"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-light-info m-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_images_{{ $package->id }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Images">
                                            <i class="fa-solid fa-file-image"></i>
                                        </a>

                                        @include('admin.tour-package.hajj-package.images-modal')
                                        @include('admin.tour-package.hajj-package.feature-modal')
                                    </td>
                                    <td>
                                        <a href="{{ route('hajj-package.edit',$package->id) }}"
                                            class="btn btn-sm btn-light-success m-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-light-danger m-2" id="delete-package-link"
                                            data-package-id="{{ $package->id }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>

                                        <form id="delete-package-form-{{ $package->id }}"
                                            action="{{ route('hajj-package.toggle-status', $package->id) }}"
                                            method="POST" style="display: none;">
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
</div>
<!--end::Content-->
@endsection

@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function () {
        const deleteLinks = document.querySelectorAll('[id^="delete-package-link"]');

        deleteLinks.forEach(function (deleteLink) {
            deleteLink.addEventListener('click', function (e) {
                e.preventDefault();
                const packageId = this.getAttribute('data-package-id');
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
                        document.getElementById('delete-package-form-' + packageId)
                            .submit();
                    }
                });
            });
        });
    });

</script>


@endpush
