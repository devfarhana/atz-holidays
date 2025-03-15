@extends('layouts.admin')
@section('title', 'Admin')
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
                    <a href="#" class="text-muted text-hover-primary">Gallery</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Gallery</li>
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
                        <h3>Gallery Table</h3>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_gallery">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row border rounded border-secondary p-5">
                        <div class="table-responsive p-5">
                            <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-muted">
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $gallery->title }}</td>
                                        <!-- Image -->
                                        <td>
                                            @if($gallery->image)
                                            <img src="{{ asset('storage/' . $gallery->image) }}" width="96px"
                                                height="72px" alt="image">
                                            @endif
                                        </td>
                                        <!-- Status -->
                                        <td>
                                            @if($gallery->status)
                                            <a href="{{ route('gallery.toggle-status', $gallery->id) }}"
                                                class="badge badge-success">Active</a>
                                            @else
                                            <a href="{{ route('gallery.toggle-status', $gallery->id) }}"
                                                class="badge badge-danger">Inactive</a>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_gallery-{{ $gallery->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-light-danger m-2
                                            galleryDelete" data-gallery-id="{{$gallery->id}}">
                                                <i class="fa-solid fa-trash"></i></button>

                                            {{-- <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                id="delete-gallery-link" data-gallery-id="{{ $gallery->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                            <form id="delete-gallery-form-{{ $gallery->id }}"
                                                action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form> --}}
                                        </td>
                                    </tr>
                                    @include('admin.gallery.partial.edit-modal')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--end::Content container-->
</div>
<!--end::Content-->
@include('admin.gallery.partial.create-modal')
@endsection
@push('script')
<script>
    $(document).on('click', '.categoryDelete', function() {
        var category_id = $(this).data('category-id');

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
                window.location.href = '/dashboard/gallery/category/destroy/' + category_id;
            }
        });

    });

    $(document).on('click', '.galleryDelete', function() {
        var gallery_id = $(this).data('gallery-id');

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
                window.location.href = '/dashboard/gallery/destroy/' + gallery_id;
            }
        });

    });
</script>
@endpush
