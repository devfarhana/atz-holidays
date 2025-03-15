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
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="#" class="text-muted text-hover-primary">Setting</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Setting</li>
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
            <div class="card-header">
                <div class="card-title">
                    <h3>Web Settings</h3>
                </div>
            </div>
            <div class="card-body">
                <!-- Form starts here -->
                <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row p-5">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="system_name">System Name</label>
                                    <input type="text" class="form-control" name="system_name" value="{{ old('system_name', $setting->system_name) }}" placeholder="Enter System Name"/>
                                    @error('system_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="short_description">Short Description</label>
                                    <textarea name="short_description" class="form-control" cols="30" rows="5">{{ old('short_description', $setting->short_description) }}</textarea>
                                    @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea name="address" class="form-control" cols="30" rows="5">{{ old('address', $setting->address) }}</textarea>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $setting->phone) }}" placeholder="Enter Phone Number"/>
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email', $setting->email) }}" placeholder="Enter Email Address"/>
                                </div>
                                <div class="col-md-12 mb-7 image">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input type="file" class="form-control mb-4" id="logo" name="logo">
                                    @error('logo') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                    @if($setting->logo)
                                        <img id="logo_preview" class="border" src="{{ asset('storage/' . $setting->logo) }}" width="96px" height="72px" alt="image"><br>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-7 image">
                                    <label class="form-label" for="favicon">Favicon</label>
                                    <input type="file" class="form-control mb-4" name="favicon" id="favicon">
                                    @error('favicon') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                    @if($setting->favicon)
                                        <img id="favicon_preview" class="border" src="{{ asset('storage/' . $setting->favicon) }}" width="96px" height="72px" alt="image"><br>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-7 image">
                                    <label class="form-label" for="system_logo">System Logo</label>
                                    <input type="file" class="form-control mb-4" name="system_logo" id="system_logo">
                                    @error('system_logo') <span class="text-danger">{{ $message }}</span> @enderror <br>
                                    @if($setting->system_logo)
                                        <img id="system_logo_preview" class="border" src="{{ asset('storage/' . $setting->system_logo) }}" width="96px" height="72px" alt="image"><br>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-label" for="footer_text">Footer Text</label>
                                    <input type="text" class="form-control" name="footer_text" value="{{ old('footer_text', $setting->footer_text) }}" placeholder="Enter Footer Text"/>
                                </div>
                                <div>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <div class="mb-4 text-center">
                                            @if($setting->logo)
                                                <img class="border" src="{{ asset('storage/' . $setting->logo) }}" width="96px" height="72px" alt="image"><br>
                                            @endif
                                        <strong>Logo</strong>
                                        </div>
                                        <div class="mb-4 text-center">
                                            @if($setting->favicon)
                                                <img class="border" src="{{ asset('storage/' . $setting->favicon) }}" width="96px" height="72px" alt="favicon"><br>
                                            @endif
                                            <strong>Favicon</strong>
                                        </div>
                                        <div class="mb-4 text-center">
                                            @if($setting->system_logo)
                                                <img class="border" src="{{ asset('storage/' . $setting->system_logo) }}" width="96px" height="72px" alt="system_logo"><br>
                                            @endif
                                            <strong>System Logo</strong>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <strong>System Name:</strong> {{ $setting->system_name }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>System Name:</strong> {{ $setting->short_description }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>Address:</strong> {{ $setting->address }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>Phone:</strong> {{ $setting->phone }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>Email:</strong> {{ $setting->email }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>Footer Text:</strong> {{ $setting->footer_text }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Form ends here -->
            </div>
        </div>
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
