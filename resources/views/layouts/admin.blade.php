<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title> @yield('title') | Admin Dashboard</title>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('storage/' . $settings->favicon)}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('admin/assets') }}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets') }}/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/notifications/notification.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/plugins/summernote/summernote-bs5.min.css">
    <!--end::Global Stylesheets Bundle-->
    @stack('style')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }

    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('admin.include.header')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                @include('admin.include.sidebar')
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        @yield('content')
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    @include('admin.include.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('admin/assets') }}/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('admin/assets') }}/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('admin/assets') }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('admin/assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin/assets') }}/js/widgets.bundle.js"></script>
    <!--end::Custom Javascript-->
    <script src="{{asset('admin/assets/plugins/notifications/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/notifications/notifications.js')}}"></script>
    <script src="{{ asset('admin/assets') }}/plugins/summernote/summernote-bs5.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>

    @stack('script')

    <script>
        $("#kt_datatable_zero_configuration").DataTable();
        $("#kt_datatable_zero_karjokrom").DataTable();
    </script>
    {{-- image preview --}}
    <script>
        $(document).ready(function () {
       function handleImagePreview(inputClass, previewClass) {
           $(document).on('change', inputClass, function () {
               let file = this.files[0];
               let reader = new FileReader();
               let preview = $(this).closest('.image').find(previewClass); // Find preview in the same container

               if (file) {
                   reader.onload = function (e) {
                       preview.attr('src', e.target.result).removeClass('d-none');
                   };
                   reader.readAsDataURL(file);
               } else {
                   preview.addClass('d-none');
               }
           });
       }

           handleImagePreview('#image', '#image_preview');
           handleImagePreview('#breadcrumb_image', '#breadcrumb_image_preview');
           handleImagePreview('.edit_image', '.edit_image_preview');
           handleImagePreview('.edit_logo', '.edit_logo_preview');
           handleImagePreview('#add_image', '#add_image_preview');
           handleImagePreview('#logo', '#logo_preview');
           handleImagePreview('#edit_logo', '#edit_logo_preview');
           handleImagePreview('#alternative_image', '#alternative_image_preview');
           handleImagePreview('#edit_alternative_image', '#edit_alternative_image_preview');
           handleImagePreview('#about_img_1', '#about_img_1_preview');
           handleImagePreview('#about_img_2', '#about_img_2_preview');
           handleImagePreview('#about_img_3', '#about_img_3_preview');
           handleImagePreview('#about_img_4', '#about_img_4_preview');
           handleImagePreview('#image_2', '#image_2_preview');
           handleImagePreview('#favicon', '#favicon_preview');
           handleImagePreview('#system_logo', '#system_logo_preview');


           });
   </script>

    {{-- bootstrap notify --}}
    @if(Session::has('success'))
        <script>
            $.Notification.autoHideNotify('success', 'top right', 'Success', '{{ Session::get('success') }}');
        </script>
    @endif
    @if(Session::has('danger'))
        <script>
            $.Notification.autoHideNotify('danger', 'top right', 'Danger', '{{ Session::get('danger') }}');
        </script>
    @endif
    @if(Session::has('warning'))
    <script>
        $.Notification.autoHideNotify('warning', 'top right', 'Warning', '{{ Session::get('warning') }}');
    </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $.Notification.autoHideNotify('danger', 'top right', 'Error', '{{ $error }}');
            </script>
        @endforeach
    @endif
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
