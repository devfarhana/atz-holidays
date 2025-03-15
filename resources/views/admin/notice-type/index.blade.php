@extends('layouts.admin')
@section('title','Notice Type')
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
                    <a href="#" class="text-muted text-hover-primary">Notice Type</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Notice Type</li>
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
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Notice Type Create</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="sisterConcernForm"
                            action="{{ isset($notice) ? route('notice-type.update', $notice->id) : route('notice-type.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($notice))
                            @method("PUT")
                            @else
                            @method("POST")
                            @endif
                            <div class="row">
                                <!-- Company Name -->
                                <div class="mb-7 col-12">
                                    <label class="form-label">Name<span class=" text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Company Name" required value="{{ $notice->name ?? '' }}" />
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success" id="submitBtn">
                                        {{ isset($notice) ? 'Update' : 'Save' }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-title">
                            <h3>Notice Type Table</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" id="resetFormBtn" class="btn btn-success" style="display: none;">
                                Add New
                            </button>
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notices as $key => $notice)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                {{ $notice->name }}
                            </div>
                            <td>
                                @if($notice->status)
                                <a href="{{ route('notice-type.toggle-status', $notice->id) }}"
                                    class="badge badge-success">Active</a>
                                @else
                                <a href="{{ route('notice-type.toggle-status', $notice->id) }}"
                                    class="badge badge-danger">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-warning edit me-1"
                                    data-id="{{ $notice->id }}" data-name="{{ $notice->name }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="#" class="btn btn-sm fw-bold btn-danger delete"
                                    data-notice_type-id="{{ $notice->id }}">
                                    <i class="fa-solid fa-trash"></i>

                                </a>

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
</div>
<!--end::Content container-->
</div>
<!--end::Content-->
@endsection
@push('script')
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

    $(document).on('change', '#image', function(e) {
        handleImagePreview('#image', '#image_preview');
    })

    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var notice_type_id = $(this).data('notice_type-id');
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
                window.location.href = '/dashboard/notice-type/delete/' + notice_type_id;
            }
        });

    });

    $(document).ready(function () {
        $(".edit").click(function () {
            let id = $(this).data("id");
            let name = $(this).data("name");
            let url = $(this).data("url");
            let image = $(this).data("image");
            console.log(image);

            // Update Form Action for Editing
            $("#sisterConcernForm").attr("action", `/dashboard/notice-type/${id}`);

            // Change Method to PUT
            let methodInput = $("<input>")
                .attr("type", "hidden")
                .attr("name", "_method")
                .val("PUT");

            // Remove old _method input if exists and append the new one
            $("input[name='_method']").remove();
            $("#sisterConcernForm").append(methodInput);

            // Update Input Fields
            $("#name").val(name);
            $("#url").val(url);

            // Update Image Preview
            $("#image_preview").attr("src", image);

            // Change Submit Button Text
            $("#submitBtn").text("Update");

            // Show the Reset Button
            $("#resetFormBtn").show();
        });

        // Image Preview for New Uploads
        $("#image").change(function (event) {
            let reader = new FileReader();
            reader.onload = function () {
                $("#image_preview").attr("src", reader.result);
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Reset Form Button (Switch Back to Store Mode)
        $("#resetFormBtn").click(function () {
            // Reset Form Fields
            $("#sisterConcernForm").attr("action", "/dashboard/notice-type/store");
            $("#name").val("");
            $("#url").val("");
            $("#image_preview").attr("src", "");

            // Remove PUT Method Input
            $("input[name='_method']").remove();

            // Reset Submit Button Text
            $("#submitBtn").text("Save");

            // Hide Reset Button Again
            $(this).hide();
        });
    });


</script>
@endpush
