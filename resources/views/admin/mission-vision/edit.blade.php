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
                    <a href="index.html" class="text-muted text-hover-primary">Mission & Vision</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Edit Mission & Vision</li>
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
                        <h3>Mission & Vision Edit Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-6 m-auto">
                            <form action="{{ route('mission-vision.update', $missionvision->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Title</label>
                                        <input type="text" name="title" value="{{ old('title', $missionvision->title) }}" class="form-control" placeholder="Enter Title" />
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Mission Title</label>
                                        <input type="text" name="mission_title" value="{{ old('mission_title', $missionvision->mission_title) }}" class="form-control" placeholder="Enter Mission Title" />
                                        @error('mission_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Vision Title</label>
                                        <input type="text" name="vision_title" value="{{ old('vision_title', $missionvision->vision_title) }}" class="form-control" placeholder="Enter Vision Title" />
                                        @error('vision_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 mb-7">
                                        <label class="form-label" for="description">Mission Description</label>
                                        <textarea class="form-control description" name="mission_description" id="kt_docs_ckeditor_classic" cols="30" rows="10">{{ old('mission_description', $missionvision->mission_description) }}</textarea>
                                        @error('mission_description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 mb-7">
                                        <label class="form-label" for="description">Vision Description</label>
                                        <textarea class="form-control description" name="vision_description" id="kt_docs_ckeditor_classic" cols="30" rows="10">{{ old('vision_description', $missionvision->vision_description) }}</textarea>
                                        @error('vision_description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                     <div>
                                        <button class="btn btn-success" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
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
         $(document).ready(function () {
        $('.description').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
    </script>

@endpush
