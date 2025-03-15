<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Login</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('storage/' . $settings->favicon)}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('admin/assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body class="bgi-size-cover bgi-position-center bgi-no-repeat" style="background-color: #123524;">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex justify-content-center flex-column flex-column-fluid flex-lg-row">
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center p-12 p-lg-20">
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10">
                        <form class="form w-100" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="text-center mb-11">
                                <div class="mb-5">
                                    <img alt="Logo" width="250px" src="{{ asset('storage/' . $settings->logo)}}" />
                                </div>
                                {{-- <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div> --}}
                            </div>
                            <div class="fv-row mb-8">
                                @error('user_id ')
                                <span class="text-danger mb-2"> {{ $messages }} </span>
                                @enderror
                                <input type="text" placeholder="User ID" name="user_id" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-3">
                                @error('user_id ')
                                    <span class="text-danger mb-2"> {{ $messages }} </span>
                                @enderror
                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="d-grid mt-4 mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets') }}/js/scripts.bundle.js"></script>
</body>
</html>
