@extends('layouts.admin')
@section('title')
    {{ $settings->system_name }} || Slider
@endsection
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
                    <a href="index.html" class="text-muted text-hover-primary">Slider</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Slider</li>
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
                            <h3>Slider Table</h3>
                        </div>
                         <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_slider">Create Slider</a>
                        </div>
                        @include('admin.slider.partial.create-modal')
                    </div>
                    <div class="card-body">
                        <div class="row border rounded border-secondary p-5">
                            <div class="table-responsive p-5">
                                <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>Sl</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $slider)
                                        <tr>
                                            <!-- Serial Number -->
                                            <td>{{ $loop->iteration }}</td>
                                            <!-- Image -->
                                            <td>
                                                @if($slider->image)
                                                    <img src="{{ asset('storage/' . $slider->image) }}" width="96px" height="72px" alt="image">
                                                @endif
                                            </td>

                                            <!-- Actions -->
                                            <td>
                                                @if($slider->status)
                                                <a href="{{ route('slider.toggle-status', $slider->id) }}" class="badge badge-success">Active</a>
                                            @else
                                                <a href="{{ route('slider.toggle-status', $slider->id) }}" class="badge badge-danger">Inactive</a>
                                            @endif

                                                <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_slider_{{ $slider->id }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-light-danger m-2" id="delete-slider-link" data-slider-id="{{ $slider->id }}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>

                                                <form id="delete-slider-form-{{ $slider->id }}" action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                            @include('admin.slider.partial.edit-modal')
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
                        <h3>Slider Content</h3>
                    </div>


                </div>
                <div class="card-body">
                    <div class=" row rounded border border-secondary p-5">
                        <div class="table-responsive p-5">
                            <table class="table table-row-bordered gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-muted">
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Button </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $sliderContent->title }}</td>
                                        <td>{{ $sliderContent->sub_title }}</td>
                                        <td>
                                            <a href="{{ $sliderContent->button_url }}" class="btn btn-success m-2" target="_blank">{{ $sliderContent->button_text }}</a>
                                        </td>
                                        <td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_slider_content_{{ $sliderContent->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            @include('admin.slider.partial.content_edit-modal')
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        const deleteLinks = document.querySelectorAll('[id^="delete-slider-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const sliderId = this.getAttribute('data-slider-id');
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
                        document.getElementById('delete-slider-form-' + sliderId).submit();
                    }
                });
            });
        });
    });
</script>
 {{-- image preview --}}
 <script>
    function handleImagePreview(edit_image, edit_image_preview) {
            $(edit_image).on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    $(edit_image_preview).attr('src', e.target.result).removeClass('d-none');
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    $(edit_image_preview).addClass('d-none');
                }
            });
        }

        handleImagePreview('#edit_image', '#edit_image_preview');
</script>

@endpush











