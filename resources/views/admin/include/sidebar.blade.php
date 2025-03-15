<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
    style="background-color: #005353;">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="#">
            <img alt="Logo" src="{{ asset('storage/' . $settings->system_logo)}}"
                class="h-35px app-sidebar-logo-default" />
            <img alt="Logo" src="{{ asset('storage/' . $settings->favicon)}}"
                class="h-30px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize" style="background-color: #005353 !important;">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-element-11 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <span class="menu-title">Dashboards</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" {{ Route::currentRouteName() === 'silder.index' ? 'active' : '' }}
                            href="{{ route('slider.index') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-sliders"></i>
                            </span>
                            <span class="menu-title">Slider</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" {{ Route::currentRouteName() === 'advertisement.index' ? 'active' : '' }}
                            href="{{ route('advertisement.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-bullhorn" ></i>
                            </span>
                            <span class="menu-title">Advertisement</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'notice-type.index' ? 'active' : '' }}" href="{{ route('notice-type.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-briefcase"></i>
                            </span>
                            <span class="menu-title">Notice</span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                      <!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" {{ Route::currentRouteName() === 'popular-destination.index' ? 'active' : '' }}
                            href="{{ route('popular-destination.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title">Popular Destination</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                      <!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" {{ Route::currentRouteName() === 'client.index' ? 'active' : '' }}
                            href="{{ route('client.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="menu-title">Client</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                      <!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'blog.index' ? 'active' : '' }}"
                            href="{{route('blog.index')}}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-newspaper"></i>
                            </span>
                            <span class="menu-title">Blog</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa-regular fa-address-card"></i>
                            </span>
                            <span class="menu-title ">About Us</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" {{ Route::currentRouteName() === 'about-us.index' ? 'active' : '' }}
                                    href="{{ route('about-us.index') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title text-white">About</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" {{ Route::currentRouteName() === 'aboutkeypoint.index' ? 'active' : '' }}
                                    href="{{route('aboutkeypoint.index')}}">
                                    <span class="menu-bullet ">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title text-white">About Keypoint</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'how-work.index' ? 'active' : '' }}" href="{{ route('how-work.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-tasks"></i>
                            </span>
                            <span class="menu-title">How it Works</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--begin:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'teams.index' ? 'active' : '' }}" href="{{ route('teams.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="menu-title"> Expert Team</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--begin:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'testimonial.index' ? 'active' : '' }}" href="{{ route('testimonial.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-comments"></i>
                            </span>
                            <span class="menu-title">Testimonial</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                       <!--begin:Menu item-->
                       <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa fa-plane"></i>
                            </span>
                            <span class="menu-title ">Tour Packages</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" {{ Route::currentRouteName() === 'hajj-package.index' ? 'active' : '' }}
                                    href="{{route('hajj-package.index')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title text-white">Hajj & Umrah Package</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" {{ Route::currentRouteName() === 'package-tour.index' ? 'active' : '' }}
                                    href="{{route('package-tour.index')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title text-white">Package Tour</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                     <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'why-book.index' ? 'active' : '' }}"
                            href="{{route('why-book.index')}}">
                            <span class="menu-icon">
                                <i class="fas fa-calendar-check"></i>
                            </span>
                            <span class="menu-title">Why Book With Us</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'contact-us.index' ? 'active' : '' }}"
                            href="{{ route('contact-us.index') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-address-book"></i>
                            </span>
                            <span class="menu-title">Contact</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'faq.index' ? 'active' : '' }}"
                            href="{{ route('faq.index') }}">
                            <span class="menu-icon">
                                <i class="fas fa-question-circle"></i>
                            </span>
                            <span class="menu-title">FAQ</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                 <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'privacy-policy.index' ? 'active' : '' }}"
                            href="{{ route('privacy-policy.index') }}">
                            <span class="menu-icon">
                                <i class="fas fa-user-shield"></i>
                            </span>
                            <span class="menu-title">Privacy & Policy</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'terms-condition.index' ? 'active' : '' }}"
                            href="{{ route('terms-condition.index') }}">
                            <span class="menu-icon">
                                <i class="fas fa-file-contract"></i>
                            </span>
                            <span class="menu-title">Terms & Condition</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Route::currentRouteName() === 'setting.index' ? 'active' : '' }}"
                            href="{{ route('setting.index') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-gear"></i>
                            </span>
                            <span class="menu-title">Setting</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="#"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">Login as Site Manager</span>
            <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div>
    <!--end::Footer-->
</div>
