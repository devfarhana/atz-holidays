<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
      <meta name="description" content="Backpac kWala - A premium Bootstrap 5 template crafted for travel and tour booking. Tailored for travel agencies and booking platforms, it features flight, hotel, and tour reservations, holiday packages, and an intuitive user experience. Fully responsive, highly customizable, and optimized for fast loading to enhance customer engagement.">
      <meta name="keywords" content="travel booking template, tour booking, Bootstrap 5 travel template, Backpac kWala, hotel booking, flights booking, holiday packages, tour agency website, travel agency template, travel HTML template, booking system, responsive travel template, Bootstrap travel website">
      <meta name="author" content="Dreams Technologies">
      <meta name="robots" content="index, follow">

      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


      <!-- Apple Touch Icon -->
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets') }}/img/favicon.png">
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('frontend/assets') }}/img/favicon.png" type="image/x-icon">
      <link rel="shortcut icon" href="{{ asset('frontend/assets') }}/img/favicon.png" type="image/x-icon">
      <!-- Theme Settings Js -->
      <script src="{{ asset('frontend/assets') }}/js/theme-script.js"></script>
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/animate.css">
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">
      <!-- Main.css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/meanmenu.css">
      <!-- Tabler Icon CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/tabler-icons/tabler-icons.css">
      <!-- Fontawesome Icon CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/fontawesome/css/all.min.css">
      <!--BoxIcon-->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!--BoxIcon-->
      <!-- Fancybox CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/fancybox/jquery.fancybox.min.css">
      <!-- Owlcarousel CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/swiper/swiper-bundle.min.css">
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/owlcarousel/owl.carousel.min.css">
      <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/plugins/slick/slick.css">
      <!-- Iconsax CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/iconsax.css">
      <!-- Datepicker CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap-datetimepicker.min.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/backpack-wala.css">
      <style>
         .main-nav li {
            position: relative !important;
         }
      </style>
   </head>
   <body>
      <!-- Loader -->
      <!--<div id="loader-wrapper">        	-->
      <!--       <div id="loader">-->
      <!--           <span class="loader-line"></span>-->
      <!--       </div>-->
      <!--   </div>-->
      <!-- /Loader -->
      <div class="main-header">
         <!-- Header Topbar-->
         <div class="header-topbar text-center">
            <div class="container">
               <div class="d-flex align-items-center justify-content-between flex-wrap">
                  <div class="d-flex align-items-center flex-wrap">
                     <p class="d-flex align-items-center mb-2 me-5 "><i class='bx bxs-phone bx-flashing me-2' ></i><a href="{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                     <p class="d-flex align-items-center mb-2"><i class='bx bx-mail-send bx-flashing me-2' ></i><a href="{{ $settings->email }}">{{ $settings->email }}</a></p>
                  </div>
                  <div class="header-btn d-flex align-items-center">
                            <button href="javascript:void(0);" class="login-button"><i class='bx bxs-user-account me-2'></i> Login</button>
                            <span class="login-devider"><i class='bx bx-dots-vertical-rounded bx-flashing' ></i></span>
                            <button href="javascript:void(0);" class="signup-button"><i class='bx bx-user-plus bx-flashing me-2' ></i> Sign Up</button>

                        </div>
               </div>
            </div>
         </div>
         <!-- /Header Topbar-->
         <!-- Header -->
         <header class="header-five wow fadeInDown" data-wow-delay="0.3">
            <div class="container">
               <div class="offcanvas-info">
                  <div class="offcanvas-wrap">
                     <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                           <div class="d-flex justify-content-between align-items-center mb-3">
                              <a href="index.php" class="black-logo-responsive">
                              <img src=" {{ asset('storage/' . $settings->favicon ) }}" style="height: 50px;" alt="logo-img">
                              </a>
                              <a href="index.php" class="white-logo-responsive">
                              <img src=" {{ asset('storage/' . $settings->favicon ) }}" style="height: 50px;" alt="logo-img">
                              </a>
                              <div class="offcanvas-close">
                                 <i class="ti ti-x"></i>
                              </div>
                           </div>
                           <div class="wishlist-info d-flex justify-content-between align-items-center">
                              <h6 class="fs-16 fw-medium">Cart & Wishlist</h6>
                              <div class="d-flex align-items-center">
                                 <div class="cart-dropdown me-3">
                                    <a href="javascript:void(0);" class="position-relative">
                                    <i class="isax isax-shopping-cart"></i><span class="count-icon bg-danger">0</span>
                                    </a>
                                 </div>
                                 <div class="fav-dropdown">
                                    <a href="wishlist.html" class="position-relative">
                                    <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                           <div class="mt-4">
                              <div class="header-dropdown d-flex flex-fill">
                                 <div class="w-100">
                                    <div class="dropdown flag-dropdown mb-2">
                                       <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="{{ asset('frontend/assets') }}/img/flags/flag.svg" class="me-2" alt="flag">ENG
                                       </a>
                                       <ul class="dropdown-menu p-2">
                                          <li>
                                             <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                             <img src="{{ asset('frontend/assets') }}/img/flags/us.png" class="me-2" alt="flag">ENG
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                             <img src="{{ asset('frontend/assets') }}/img/flags/jp.png" class="me-2" alt="flag">JPN
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                             <img src="{{ asset('frontend/assets') }}/img/flags/cn.png" class="me-2" alt="flag">CHI
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown">
                                       <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                       USD
                                       </a>
                                       <ul class="dropdown-menu p-2">
                                          <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="btn btn-dark w-100 mb-3"><a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a> / <a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                              <a href="javascript:void(0);" class="btn btn-primary w-100">Become Expert</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offcanvas-overlay"></div>
               @include('frontend.include.menu')
            </div>
         </header>
         <!-- /Header -->
      </div>
@yield('content')



    <!-- Footer -->
    <footer class="footer-three footer-five">
            <div class="footer-top">
                <div class="container">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col-lg-4">
                        <div class="footer-about">
                            <span class="d-block mb-2 footer-logo-light">
                                <img src=" {{ asset('storage/' . $settings->system_logo ) }}" style="height: 50px;" alt="logo">
                                </span>
                            <span class="mb-2 footer-logo-dark">
                                <img src=" {{ asset('storage/' . $settings->system_logo ) }}" style="height: 50px;" alt="logo">
                                </span>
                            <p>{{ $settings->short_description }}</p>
                            <h5 class="text-light">Subscribe to Our Newsletter</h5>
                            <p class="mb-2">Just sign up and we'll send you a notification by email.</p>
                            <div class="footer-input">
                                <div class="input-group align-items-center justify-content-center">
                                    <span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
                            <div class="col">
                                <div class="footer-widget">
                                    <h5>Destinations</h5>
                                    <ul class="footer-menu">
                                        @foreach ($destinationcountries as $country)
                                        <li>
                                            <a href="javascript:void(0);"> {{ $country->country_name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-widget">
                                    <h5>Services</h5>
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="team.html">Visa Center</a>
                                        </li>
                                        <li>
                                            <a href="pricing-plan.html">Hotels</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Air Tickets</a>
                                        </li>
                                        <li>
                                            <a href="profile-settings.html">Rent A Cat</a>
                                        </li>
                                        <li>
                                            <a href="my-profile.html">Bus Tickets</a>
                                        </li>
                                        <li>
                                            <a href="agent-listings.html">Travel Insurance</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-widget">
                                    <h5>Quick Links</h5>
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="{{route('aboutus')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">News & Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Custom Tour Package</a>
                                        </li>
                                        <li>
                                            <a href="{{route('privacyPolicy')}}">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{route('termsCondition')}}">Terms and Conditions</a>
                                        </li>
                                        <li>
                                            <a href="{{route('faq')}}">FAQ's</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h5>Contact Info</h5>
                            <div class="customer-info">
                                <div class="customer-info-icon">
                                    <span><i class="isax isax-headphone5"></i></span>
                                </div>
                                <div class="customer-info-content">
                                    <span>Customer Support</span>
                                    <h6 class="text-light">{{ $settings->phone }}</h6>
                                </div>
                            </div>
                            <div class="customer-info">
                                <div class="customer-info-icon">
                                    <span><i class="isax isax-sms5"></i></span>
                                </div>
                                <div class="customer-info-content">
                                    <span>Drop Us an Email</span>
                                    <h6 class="text-light">{{ $settings->email }}</h6>
                                </div>
                            </div>
                            <div class="customer-info">
                                <div class="customer-info-icon">
                                    <span><i class='bx bxs-map bx-flashing' ></i></span>
                                </div>
                                <div class="customer-info-content">
                                    <h6 class="text-light">{{ $settings->address }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14">{{ $settings->footer_text }} Developed by<a href="https://qbit-tech.com/">QBit Tech</a></p>
                            <div class="d-flex align-items-center">
                                <ul class="social-icon">
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <div class="back-to-top">
		<a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
	</div>

   <!-- Jquery JS -->
   <script src="{{ asset('frontend/assets') }}/js/jquery-3.7.1.min.js"></script>

   <!-- Bootstrap JS -->
   <script src="{{ asset('frontend/assets') }}/js/bootstrap.bundle.min.js"></script>

   <!-- Wow JS -->
   <script src="{{ asset('frontend/assets') }}/js/wow.min.js"></script>

   <!-- MeanMenu Js -->
   <script src="{{ asset('frontend/assets') }}/js/jquery.meanmenu.min.js"></script>

   <!-- Owlcarousel Js -->
   <script src="{{ asset('frontend/assets') }}/plugins/owlcarousel/owl.carousel.min.js"></script>

   <!-- Sticky Sidebar JS -->
   <script src="{{ asset('frontend/assets') }}/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
   <script src="{{ asset('frontend/assets') }}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

   <!-- FancyBox JS -->
   <script src="{{ asset('frontend/assets') }}/plugins/fancybox/jquery.fancybox.min.js"></script>

   <!-- Slick Slider -->
   <script src="{{ asset('frontend/assets') }}/plugins/slick/slick.min.js"></script>

   <!-- Datepicker Core JS -->
   <script src="{{ asset('frontend/assets') }}/plugins/moment/moment.js"></script>
   <script src="{{ asset('frontend/assets') }}/js/bootstrap-datetimepicker.min.js"></script>

   <!-- cursor JS -->
   <script src="{{ asset('frontend/assets') }}/js/cursor.js"></script>

   <!-- Script JS -->
   <script src="{{ asset('frontend/assets') }}/js/script.js"></script>

   @stack('script')
</body>

</html>
