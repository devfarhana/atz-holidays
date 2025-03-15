@extends('layouts.admin')
@section('title','Update Greeting')
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
                <a href="" class="text-muted text-hover-primary">Greetings</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-500 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Update Greeting</li>
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
                    <h3>Update Greeting</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-6 m-auto">
                        <form action="{{ route('greetings.update', $greeting->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class=" col-md-12 mb-7">
                                    <label class="form-label" for="floatingInput">Name</label>
                                    <input type="text" name="name" value="{{ old('name', $greeting->name) }}" class="form-control" placeholder="Enter Title" />
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class=" col-md-12 mb-7">
                                    <label class="form-label" for="floatingInput">Designation</label>
                                    <input type="text" name="designation" value="{{ old('designation', $greeting->designation) }}" class="form-control" placeholder="Enter Sub Title" />
                                    @error('designation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-7">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control mb-4" id="image" name="image">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror <br>

                                </div>
                                <div class="col-md-6">
                                    @if($greeting->image)
                                        <img id="image_preview" src="{{ asset('storage/' . $greeting->image) }}" width="150px" height="100%" alt="image">
                                    @endif
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control summerNote" name="message" id="summerNote" >{{ old('message', $greeting->message) }}</textarea>
                                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
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

    handleImagePreview('#image', '#image_preview');

    $(document).ready(function () {
        $('.summerNote').summernote({
            height: 800, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
</script>
@endpush
