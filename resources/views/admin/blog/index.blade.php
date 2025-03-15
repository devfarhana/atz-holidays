@extends('layouts.admin')
@section('title',' Blog')
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
                    <a href="index.html" class="text-muted text-hover-primary">Blog</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Blog</li>
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
                            <h3>Category Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_category_blog">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row border rounded border-secondary p-5">
                            <div class="table-responsive p-5">
                                <table id="" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allblogCategories as $blogCategory)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $blogCategory->name }}</td>

                                            <!-- Status -->
                                            <td>
                                                @if($blogCategory->status)
                                                <a href="{{ route('blog.category.toggle-status', $blogCategory->id) }}"
                                                    class="badge badge-success">Active</a>
                                                @else
                                                <a href="{{ route('blog.category.toggle-status', $blogCategory->id) }}"
                                                    class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>

                                            <!-- Action Buttons -->
                                            <td>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_category-{{ $blogCategory->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-5"></i>
                                                </a>
                                                <a href="#" id="delete-blog-link"
                                                    data-blog-id="{{ $blogCategory->id }}">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>

                                                <form id="delete-blog-form-{{ $blogCategory->id }}"
                                                    action="{{ route('blog.category.destroy', $blogCategory->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                            @include('admin.blog.partial.edit-category-modal')

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
                            <h3>Blog Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_blog">Create</a>
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
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Additional images</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBlog as $blog)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->blogCategory->name }}</td>
                                            <!-- Image -->
                                            <td>
                                                @if($blog->blog_image)
                                                <img src="{{ asset('storage/' . $blog->blog_image) }}" width="96px"
                                                    height="72px" alt="image">
                                                @endif
                                            </td>
                                            <td>
                                                @foreach ($blog->images as $image)
                                                <img class="border"
                                                    src="{{ asset('storage/' . $image->additional_image) }}"
                                                    width="75px" height="75px" alt="image">
                                                @endforeach
                                            </td>


                                            <!-- Status -->
                                            <td>
                                                @if($blog->status)
                                                <a href="{{ route('blog.toggle-status', $blog->id) }}"
                                                    class="badge badge-success">Active</a>
                                                @else
                                                <a href="{{ route('blog.toggle-status', $blog->id) }}"
                                                    class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_blog-{{ $blog->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-5"></i>
                                                </a>
                                                <a href="#" id="delete-blog-link" data-blog-id="{{ $blog->title }}">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </a>

                                                <form id="delete-blog-form-{{ $blog->title }}"
                                                    action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @include('admin.blog.partial.edit-modal')
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
    @include('admin.blog.partial.create-modal')
    @include('admin.blog.partial.create-category-modal')
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('[id^="delete-blog-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const blogId = this.getAttribute('data-blog-id');
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
                        document.getElementById('delete-blog-form-' + blogId).submit();
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
