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
                    <a href="index.html" class="text-muted text-hover-primary">Banner Image</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Edit Banner Image</li>
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
                        <h3>Banner Image Edit Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-5">
                            <form action="{{ route('banner-image.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row d-flex">
                                    <div class="col-md-4 mb-3">
                                        <label>
                                            <h3>About Banner</h3>
                                        </label> <br>
                                        <label class="form-label" for="about_banner">
                                            <img src="{{ asset('storage/' . $banner->about_banner) }}"
                                                class="img-thumbnail"
                                                id="about_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="about_banner" name="about_banner"
                                                onchange="previewImage(event, 'about_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Team Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Team Banner</h3></label><br>
                                        <label for="team_banner">
                                            <img src="{{ asset('storage/' . $banner->team_banner) }}"
                                                class="img-thumbnail"
                                                id="team_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="team_banner" name="team_banner"
                                                onchange="previewImage(event, 'team_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Hajj Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Hajj Banner</h3></label><br>
                                        <label for="hajj_banner">
                                            <img src="{{ asset('storage/' . $banner->hajj_banner) }}"
                                                class="img-thumbnail"
                                                id="hajj_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="hajj_banner" name="hajj_banner"
                                                onchange="previewImage(event, 'hajj_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Package Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Package Banner</h3></label><br>
                                        <label for="package_banner">
                                            <img src="{{ asset('storage/' . $banner->package_banner) }}"
                                                class="img-thumbnail"
                                                id="package_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="package_banner" name="package_banner"
                                                onchange="previewImage(event, 'package_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Blog Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Blog Banner</h3></label><br>
                                        <label for="blog_banner">
                                            <img src="{{ asset('storage/' . $banner->blog_banner) }}"
                                                class="img-thumbnail"
                                                id="blog_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="blog_banner" name="blog_banner"
                                                onchange="previewImage(event, 'blog_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Contact Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Contact Banner</h3></label><br>
                                        <label for="contact_banner">
                                            <img src="{{ asset('storage/' . $banner->contact_banner) }}"
                                                class="img-thumbnail"
                                                id="contact_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="contact_banner" name="contact_banner"
                                                onchange="previewImage(event, 'contact_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- FAQ Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>FAQ Banner</h3></label><br>
                                        <label for="faq_banner">
                                            <img src="{{ asset('storage/' . $banner->faq_banner) }}"
                                                class="img-thumbnail"
                                                id="faq_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="faq_banner" name="faq_banner"
                                                onchange="previewImage(event, 'faq_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Privacy Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Privacy Banner</h3></label><br>
                                        <label for="privacy_banner">
                                            <img src="{{ asset('storage/' . $banner->privacy_banner) }}"
                                                class="img-thumbnail"
                                                id="privacy_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="privacy_banner" name="privacy_banner"
                                                onchange="previewImage(event, 'privacy_banner')"
                                                style="display: none;" />
                                        </label>
                                    </div>

                                    <!-- Terms Banner -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label"><h3>Terms Banner</h3></label><br>
                                        <label for="terms_banner">
                                            <img src="{{ asset('storage/' . $banner->terms_banner) }}"
                                                class="img-thumbnail"
                                                id="terms_banner_preview"
                                                style="cursor: pointer; width: 350px; height: 200px; object-fit: cover;" />
                                            <input type="file" class="form-control custom-input"
                                                id="terms_banner" name="terms_banner"
                                                onchange="previewImage(event, 'terms_banner')"
                                                style="display: none;" />
                                        </label>
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
        <!--end::Content container-->
    </div>
    <!--end::Content-->
    @endsection
    @push('script')
    <script>
        function previewImage(event, id) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById(id + '_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    @endpush
