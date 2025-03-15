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
                    <a href="index.html" class="text-muted text-hover-primary">Profile</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Edit Profile</li>
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
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Profile Edit Form</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <!-- update profile -->
                        <div class="card">
                            <div class="card-header header-bg-1">
                                <h2 class="card-title mt-2 h5 font-weight-bold text-dark">
                                    Profile Information
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Form for sending verification email -->
                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>

                                    <!-- Profile update form -->
                                    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
                                        @csrf
                                        @method('patch')

                                        <div class="col-md-12">
                                            <label for="name" class="form-label">User ID</label>
                                            <input type="text" id="user_id" name="user_id" class="form-control"
                                                value="{{ old('user_id', $user->user_id) }}" required autofocus autocomplete="user_id" disabled>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                            @if($errors->has('name'))
                                            <div class="text-danger small mt-2">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-md-12 pt-2">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ old('email', $user->email) }}" required autocomplete="username">
                                            @if($errors->has('email'))
                                            <div class="text-danger small mt-2">{{ $errors->first('email') }}</div>
                                            @endif

                                            <!-- Email Verification Section -->
                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                            <div class="mt-3">
                                                <p class="small text-muted">
                                                    Your email address is unverified.

                                                    <button form="send-verification" class="btn btn-link p-0">
                                                        Click here to re-send the verification email.
                                                    </button>
                                                </p>

                                                @if (session('status') === 'verification-link-sent')
                                                <p class="small text-success mt-2">
                                                    A new verification link has been sent to your email address.
                                                </p>
                                                @endif
                                            </div>
                                            @endif
                                        </div>

                                        <div class="d-flex align-items-center gap-3 mt-3">
                                            <button type="submit" class="btn btn-primary ms-auto">Save</button>

                                            @if (session('status') === 'profile-updated')
                                            <p class="small text-muted mb-0">Saved.</p>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <!-- update password -->
                        <div class="card">
                            <div class="card-header header-bg-1">
                                <h2 class="card-title mt-2 h5 font-weight-bold text-dark">
                                    Update Password
                                </h2>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('password.update') }}" class="mt-4">
                                    @csrf
                                    @method('put')

                                    <!-- Current Password -->
                                    <div class="col-md-12">
                                        <label for="update_password_current_password" class="form-label">Current Password</label>
                                        <input type="password" id="update_password_current_password" name="current_password"
                                            class="form-control" autocomplete="current-password">
                                        @if($errors->updatePassword->has('current_password'))
                                        <div class="text-danger small mt-2">{{ $errors->updatePassword->first('current_password') }}</div>
                                        @endif
                                    </div>

                                    <!-- New Password -->
                                    <div class="col-md-12 pt-2">
                                        <label for="update_password_password" class="form-label">New Password</label>
                                        <input type="password" id="update_password_password" name="password" class="form-control"
                                            autocomplete="new-password">
                                        @if($errors->updatePassword->has('password'))
                                        <div class="text-danger small mt-2">{{ $errors->updatePassword->first('password') }}</div>
                                        @endif
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-md-12 pt-2">
                                        <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" id="update_password_password_confirmation" name="password_confirmation"
                                            class="form-control" autocomplete="new-password">
                                        @if($errors->updatePassword->has('password_confirmation'))
                                        <div class="text-danger small mt-2">{{ $errors->updatePassword->first('password_confirmation') }}
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Save Button and Success Message -->
                                    <div class="d-flex align-items-center gap-3 mt-3">
                                        <button type="submit" class="btn btn-primary ms-auto">Save</button>

                                        @if (session('status') === 'password-updated')
                                        <p class="small text-muted mb-0">Saved.</p>
                                        @endif
                                    </div>
                                </form>

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
