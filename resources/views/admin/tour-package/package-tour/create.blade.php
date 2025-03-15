@extends('layouts.admin')
@section('title')
    {{ $settings->system_name }}
@endsection
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Package Tour</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Add Package</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            @include('admin.include.clock')
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Create Package Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-5">
                            <form action="{{ route('package-tour.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="row">
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Tour Package Name<span class=" text-danger">*</span></label>
                                        <input type="text" name="package_name"  class="form-control" placeholder="Enter Tour Package Name" />
                                        @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Location</label>
                                        <input type="text" name="location"  class="form-control" placeholder="Enter Location" />
                                        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="floatingInput">Country</label>
                                        <input type="text" name="country"  class="form-control" placeholder="Enter Country" />
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="floatingInput">Duration</label>
                                        <input type="text" name="duration"  class="form-control" placeholder="Enter Duration" />
                                        @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="floatingInput">Package Price</label>
                                        <input type="text" name="price"  class="form-control" placeholder="Enter Package Price" />
                                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="floatingInput">Package Offer</label>
                                        <input type="text" name="offer"  class="form-control" placeholder="Enter Package Offer" />
                                        @error('offer') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="floatingInput">Holiday Theme</label>
                                        <input type="text" name="holiday_theme"  class="form-control" placeholder="Enter Holiday Theme" />
                                        @error('holiday_theme') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 mb-7">
                                        <label class="form-label" for="map_url">Google Map Iframe</label>
                                        <textarea class="form-control" name="map_url" cols="20" rows="10" placeholder="Write Here..."></textarea>
                                        @error('map_url') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                     <div>
                                        <button class="btn btn-success" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
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
        $(document).ready(function () {
            $('.summerNote').summernote({
                height: 300, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        })
    </script>
    <script>
        // Additional images preview
        const additionalImageInput = document.getElementById('additional_image');
        const additionalImagePreviewContainer = document.getElementById('additional_image_preview');

        additionalImageInput.addEventListener('change', function () {
            // Clear existing previews
            additionalImagePreviewContainer.innerHTML = '';

            // Loop through all selected files
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                if (file) {
                    const reader = new FileReader();
                    const imgElement = document.createElement('img');
                    imgElement.className = 'border';
                    imgElement.style.width = '96px';
                    imgElement.style.height = '72px';
                    imgElement.style.marginRight = '10px';

                    reader.onload = function (e) {
                        imgElement.src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                    additionalImagePreviewContainer.appendChild(imgElement);
                }
            }
        });
    </script>
    @endpush
