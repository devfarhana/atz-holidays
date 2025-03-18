<div class="header-nav">
    <div class="main-menu-wrapper">
       <div class="navbar-logo">
          <a class="logo-white header-logo" href="index.php">
          <img src="{{ asset('storage/' . $settings->logo) }}" class="logo" style="height: 50px;" alt="Logo">
          </a>
          <a class="logo-dark header-logo" href="index.php">
          <img src="{{ asset('storage/' . $settings->system_logo) }}" class="logo" style="height: 50px;" alt="Logo">
          </a>
       </div>
       <nav id="mobile-menu">
          <ul class="main-nav">
             <li class="megamenu active">
                <a href="{{'/'}}">Home</a>
             </li>
             <!--<li class="has-submenu mega-innermenu">-->
             <!--    <a href="javascript:void(0);">About Backpack Wala<i class="fa-solid fa-angle-down"></i></a>-->
             <!--    <ul class="submenu mega-submenu">-->
             <!--        <li>-->
             <!--            <div class="megamenu-wrapper">-->
             <!--                <div class="row">-->
             <!--                    <div class="col-lg-3">-->
             <!--                        <ul>-->
             <!--                            <li><a href="#">About Us</a></li>-->
             <!--                            <li><a href="#">Expert Team</a></li>-->
             <!--                        </ul>-->
             <!--                    </div>-->
             <!--                </div>-->
             <!--            </div>-->
             <!--        </li>-->
             <!--    </ul>-->
             <!--</li>-->
             <li class="has-submenu mega-innermenu">
                <a href="javascript:void(0);">Tour Packages<i class="fa-solid fa-angle-down"></i></a>
                <ul class="submenu mega-submenu">
                   <li>
                      <div class="megamenu-wrapper">
                         <ul>
                            <li><a href="{{route('packageTour')}}">Package Tour</a></li>
                            <li><a href="{{route('hajjPackage')}}">Hajj & Umrah Package</a></li>
                            {{-- <li><a href="car-map.html">Package Tour</a></li>
                            <li><a href="car-details.html">Domestic Tour</a></li>
                            <li><a href="car-booking.html">International Tour</a></li>
                            <li><a href="add-car.html">Budget Tour</a></li> --}}
                         </ul>
                      </div>
                   </li>
                </ul>
             </li>
             <li class="mega-innermenu">
                <a href="javascript:void(0);">Hotels</a>
             </li>
             <li class="mega-innermenu">
                <a href="javascript:void(0);">Visa Center</a>
             </li>
             <li class="has-submenu mega-innermenu">
                <a href="javascript:void(0);">Services<i class="fa-solid fa-angle-down"></i></a>
                <ul class="submenu mega-submenu">
                   <li>
                      <div class="megamenu-wrapper">
                         <ul>
                            <li><a href="hotel-details.html">Air Ticket</a></li>
                            <li><a href="hotel-grid.html">Rent A Car</a></li>
                            <li><a href="hotel-list.html">Bus Tickets</a></li>
                            <li><a href="hotel-map.html">Travel Insurance</a></li>
                         </ul>
                      </div>
                   </li>
                </ul>
             </li>
             <!--<li class="has-submenu mega-innermenu">-->
             <!--    <a href="javascript:void(0);">Gallery<i class="fa-solid fa-angle-down"></i></a>-->
             <!--    <ul class="submenu mega-submenu">-->
             <!--        <li>-->
             <!--            <div class="megamenu-wrapper">-->
             <!--                <ul>-->
             <!--                            <li><a href="cruise-grid.html">Photo Gallery</a></li>-->
             <!--                            <li><a href="cruise-list.html">Video Gallery</a></li>-->
             <!--                        </ul>-->
             <!--            </div>-->
             <!--        </li>-->
             <!--    </ul>-->
             <!--</li>-->
             <!--<li class="has-submenu mega-innermenu">-->
             <!--   <a href="javascript:void(0);">Destinations<i class="fa-solid fa-angle-down"></i></a>-->
             <!--   <ul class="submenu mega-submenu">-->
             <!--      <li>-->
             <!--         <div class="megamenu-wrapper">-->
             <!--            <ul>-->
             <!--               <li><a href="tour-grid.html">International Destinations</a></li>-->
             <!--               <li><a href="tour-list.html">Domestic Destinations</a></li>-->
             <!--               <li><a href="tour-map.html">All Destinations</a></li>-->
             <!--            </ul>-->
             <!--         </div>-->
             <!--      </li>-->
             <!--   </ul>-->
             <!--</li>-->
             <li class="mega-innermenu">
                <a href="javascript:void(0);">Shop</a>
             </li>
             <!--<li class="mega-innermenu">-->
             <!--   <a href="demo2.php">Contact Us</a>-->
             <!--</li>-->
          </ul>
       </nav>
      <div class="header-btn d-flex align-items-center">
                            <div class="me-3">
                                <a href="javascript:void(0);">
                                    <i class='bx bx-search bx-flashing' ></i>
                                </a>
                            </div>
                            <div class="me-3">
                                <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate">
                                    <i class="isax isax-moon"></i>
                                </a>
                                <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-sun-1"></i>
                                </a>
                            </div>
                            <a href="become-an-expert.html" class="plan-my-holiday-button"><i class='bx bx-landscape bx-flashing me-2' ></i> Plan My Holiday</a>
                        </div>
    </div>
 </div>
