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
                    <a href="index.html" class="text-muted text-hover-primary">About Us</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Edit About Us</li>
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
                        <h3>About Us Edit Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-6 m-auto">
                            <form action="{{ route('about-us.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Title</label>
                                        <input type="text" name="title" value="{{ old('title', $about->title) }}" class="form-control" placeholder="Enter Title" />
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-12 mb-7">
                                        <label class="form-label" for="floatingInput">Sub Title</label>
                                        <input type="text" name="sub_title" value="{{ old('sub_title', $about->sub_title) }}" class="form-control" placeholder="Enter Sub Title" />
                                        @error('sub_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 mb-7">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control summerNote" name="description" id="summerNote" cols="30" rows="10">{{ old('description', $about->description) }}</textarea>
                                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-7 image">
                                        <label for="breadcrumb_image" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control mb-4" id="breadcrumb_image" name="breadcrumb_image">
                                        @error('breadcrumb_image') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                        @if($about->breadcrumb_image)
                                            <img id="breadcrumb_image_preview" src="{{ asset('storage/' . $about->breadcrumb_image) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-7 image">
                                        <label for="about_img_1" class="form-label">About Image 01</label>
                                        <input type="file" class="form-control mb-4" id="about_img_1" name="about_img_1">
                                        @error('about_img_1') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                        @if($about->about_img_1)
                                            <img id="about_img_1_preview" src="{{ asset('storage/' . $about->about_img_1) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-7 image">
                                        <label for="about_img_2" class="form-label">About Image 02</label>
                                        <input type="file" class="form-control mb-4" id="about_img_2" name="about_img_2">
                                        @error('about_img_2') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                        @if($about->about_img_2)
                                            <img id="about_img_2_preview" src="{{ asset('storage/' . $about->about_img_2) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-7 image">
                                        <label for="about_img_3" class="form-label">About Image 03</label>
                                        <input type="file" class="form-control mb-4" id="about_img_3" name="about_img_3">
                                        @error('about_img_3') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                        @if($about->about_img_3)
                                            <img id="about_img_3_preview" src="{{ asset('storage/' . $about->about_img_3) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-7 image">
                                        <label for="about_img_4" class="form-label">About Image 04</label>
                                        <input type="file" class="form-control mb-4" id="about_img_4" name="about_img_4">
                                        @error('about_img_4') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                        @if($about->about_img_4)
                                            <img id="about_img_4_preview" src="{{ asset('storage/' . $about->about_img_4) }}" width="96px" height="72px" alt="image">
                                        @endif
                                    </div>


                                    <div class="card-title">
                                        <h3>Experience Section</h3>
                                        <hr>
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="experience_txt">Experience Text</label>
                                        <input type="text" name="experience_txt" value="{{ old('experience_txt', $about->experience_txt) }}" class="form-control" placeholder="Years Of Experience" />
                                        @error('experience_txt') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class=" col-md-6 mb-7">
                                        <label class="form-label" for="year_of_experience">Years</label>
                                        <input type="text" name="year_of_experience" value="{{ old('year_of_experience', $about->year_of_experience) }}" class="form-control" placeholder="Years" />
                                        @error('year_of_experience') <span class="text-danger">{{ $message }}</span> @enderror
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
            $('.summerNote').summernote({
                height: 300, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        })
    </script>
    @endpush
