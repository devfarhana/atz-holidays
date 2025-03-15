@extends('layouts.admin')
@section('title',' Testimonial')
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
                    <a href="index.html" class="text-muted text-hover-primary">Testimonial</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Testimonial</li>
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
                            <h3>Testimonial Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_testimonial">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row border rounded border-secondary p-5">
                            <div class="table-responsive p-5">
                                <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Country</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->designation }}</td>
                                            <td>{{ $testimonial->country }}</td>
                                            <td>{{ $testimonial->title }}</td>
                                            <td>{!! $testimonial->description !!}</td>
                                            <!-- Image -->
                                            <td>
                                                @if($testimonial->image)
                                                <img src="{{ asset('storage/' . $testimonial->image) }}" width="96px"
                                                    height="72px" alt="image">
                                                @endif
                                            </td>

                                            <!-- Status -->
                                            <td>
                                                @if($testimonial->status)
                                                <a href="{{ route('testimonial.toggle-status', $testimonial->id) }}"
                                                    class="badge badge-success">Active</a>
                                                @else
                                                <a href="{{ route('testimonial.toggle-status', $testimonial->id) }}"
                                                    class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_testimonial-{{ $testimonial->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-5"></i>
                                                </a>
                                                <a href="#" id="delete-testimonial-link" data-testimonial-id="{{ $testimonial->id }}">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>

                                                <form id="delete-testimonial-form-{{ $testimonial->id }}"
                                                    action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @include('admin.testimonial.partial.edit-modal')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    @include('admin.testimonial.partial.create-modal')
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('[id^="delete-testimonial-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const testimonialId = this.getAttribute('data-testimonial-id');
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
                        document.getElementById('delete-testimonial-form-' + testimonialId).submit();
                    }
                });
            });
        });
    });
</script>
<script>
    // Handle existing image removal
    const removeImageButtons = document.querySelectorAll('.remove-image-btn');
    removeImageButtons.forEach(button => {
        button.addEventListener('click', function () {
            const imageId = this.dataset.id;

            // Hide the image from the UI
            const imageContainer = this.closest('.position-relative');
            imageContainer.style.display = 'none';

            // Enable the hidden input to mark the image for removal
            const inputToRemove = document.querySelector(`input.remove-image-input[value="${imageId}"]`);
            if (inputToRemove) {
                inputToRemove.disabled = false; // Enable the input so it's submitted
            }
        });
    });
</script>
@endpush
