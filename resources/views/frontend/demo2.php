<?php include 'include/header.php'; ?>
<!-- Hero Section -->
<section class="hero-section">
   <div class="banner-slider banner-sec owl-carousel">
      <div class="slider-img">
         <img src="assets/img/Slider-01.jpg" alt="Img">
      </div>
      <div class="slider-img">
         <img src="assets/img/slider-4.jpg" alt="Img">
      </div>
      <!--<div class="slider-img">-->
      <!--   <img src="assets/img/Slider-01.jpg" alt="Img">-->
      <!--</div>-->
      <!--<div class="slider-img">-->
      <!--   <img src="assets/img/slider-4.jpg" alt="Img">-->
      <!--</div>-->
   </div>
   <div class="container">
      <div class="hero-content">
         <div class="row align-items-center">
            <div class="col-md-12 mx-auto wow fadeInUp" data-wow-delay="0.3s">
               <div class="banner-content mx-auto">
                  <h1 class="text-white display-5 mb-2">Get Closer to the Dream: <span>Your Tour</span> Essentials Await</h1>
                  <h6 class="text-light mx-auto">Your ultimate destination for all things help you celebrate & remember tour experience.</h6>
               </div>
               <div class="banner-form-tab">
                  <ul class="nav">
                     <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#flight">
                           <i class="fa-solid fa-plane-up me-2"></i>Flights
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Hotels">
                           <i class="fa-solid fa-hotel me-2"></i>Hotels
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Package">
                           <i class="fa-solid fa-suitcase-rolling me-2"></i>Package
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Visa">
                           <i class="fas fa-passport me-2"></i>Visa
                        </a>
                     </li>
                     <!-- <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour">
                        <i class="fa-solid fa-camera me-2"></i>Tour
                        </a>
                     </li> -->
                  </ul>
               </div>
               <div class="banner-form card mb-0">
                  <div class="card-body">
                     <form action="hotel-grid.html">
                        <div class="tab-content">
                           <div class="tab-pane fade" id="flight">
                              <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                 <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                       <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway" value="oneway" checked>
                                       <label class="form-check-label fs-14 ms-2" for="oneway">
                                          Oneway
                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                       <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip" value="roundtrip">
                                       <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                          Round Trip
                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                       <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway" value="multiway">
                                       <label class="form-check-label fs-14 ms-2" for="multiway">
                                          Multi Trip
                                       </label>
                                    </div>
                                 </div>
                                 <!-- <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple search</h6> -->
                              </div>
                              <div class="normal-trip">
                                 <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                       <div class="form-item dropdown">
                                          <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                             <label class="form-label fs-14 text-default mb-1">From</label>
                                             <input type="text" class="form-control" value="Dhaka">
                                             <p class="fs-12 mb-0">DAC, Hazrat Shahjalal International Airport</p>
                                          </div>
                                          <div class="dropdown-menu dropdown-md p-0">
                                             <ul>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">DAC, Hazrat Shahjalal International Airport</h6>
                                                      <!-- <p>DAC, Hazrat Shahjalal International Airport</p> -->
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">CGP, Shah Amanat International Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">CXB, Cox's Bazar Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">ZYL, Osmany International Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">SPD, Saidpur Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">JSR, Jashore Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">RJH, Shah Mokhdum Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">BZL, Barisal Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">IRD, Ishurdi Airport</h6>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-item dropdown ps-2 ps-sm-3">
                                          <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                             <label class="form-label fs-14 text-default mb-1">To</label>
                                             <h5>Cox's Bazar</h5>
                                             <p class="fs-12 mb-0">CXB, Cox's Bazar Airport</p>
                                             <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                             </span>
                                          </div>
                                          <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">DAC, Hazrat Shahjalal International Airport</h6>
                                                      <!-- <p>DAC, Hazrat Shahjalal International Airport</p> -->
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">CGP, Shah Amanat International Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">CXB, Cox's Bazar Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">ZYL, Osmany International Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">SPD, Saidpur Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">JSR, Jashore Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">RJH, Shah Mokhdum Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">BZL, Barisal Airport</h6>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">IRD, Ishurdi Airport</h6>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-item">
                                          <label class="form-label fs-14 text-default mb-1">Journey Date</label>
                                          <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                          <p class="fs-12 mb-0">Monday</p>
                                       </div>

                                       <!-- <div class="form-item round-drip"> -->
                                       <div class="form-item">
                                          <label class="form-label fs-14 text-default mb-1">Return Date</label>
                                          <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                          <p class="fs-12 mb-0">Wednesday</p>
                                       </div>
                                       <div class="form-item dropdown">
                                          <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                             <label class="form-label fs-14 text-default mb-1">Traveller,Class</label>
                                             <h5>4 <span class="fw-normal fs-14">Travellers </span></h5>
                                             <p class="fs-12 mb-0">Economy</p>
                                          </div>
                                          <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                             <h5 class="mb-3">Select Travelers & Class</h5>
                                             <div class="mb-3 border br-10 info-item pb-1">
                                                <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="mb-3">
                                                         <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                         <div class="custom-increment">
                                                            <div class="input-group">
                                                               <span class="input-group-btn float-start">
                                                                  <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                     <span><i class="isax isax-minus"></i></span>
                                                                  </button>
                                                               </span>
                                                               <input type="text" name="quantity" class=" input-number" value="01">
                                                               <span class="input-group-btn float-end">
                                                                  <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                     <span><i class="isax isax-add"></i></span>
                                                                  </button>
                                                               </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="mb-3">
                                                         <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                         <div class="custom-increment">
                                                            <div class="input-group">
                                                               <span class="input-group-btn float-start">
                                                                  <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                     <span><i class="isax isax-minus"></i></span>
                                                                  </button>
                                                               </span>
                                                               <input type="text" name="quantity" class=" input-number" value="01">
                                                               <span class="input-group-btn float-end">
                                                                  <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                     <span><i class="isax isax-add"></i></span>
                                                                  </button>
                                                               </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="mb-3">
                                                         <label class="form-label text-gray-9 mb-2">Infants<span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                         <div class="custom-increment">
                                                            <div class="input-group">
                                                               <span class="input-group-btn float-start">
                                                                  <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                     <span><i class="isax isax-minus"></i></span>
                                                                  </button>
                                                               </span>
                                                               <input type="text" name="quantity" class=" input-number" value="01">
                                                               <span class="input-group-btn float-end">
                                                                  <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                     <span><i class="isax isax-add"></i></span>
                                                                  </button>
                                                               </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-3 border br-10 info-item pb-1">
                                                <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                   <div class="form-check me-3 mb-3">
                                                      <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="economy" checked>
                                                      <label class="form-check-label" for="economy">
                                                         Economy
                                                      </label>
                                                   </div>
                                                   <div class="form-check me-3 mb-3">
                                                      <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="premium-economy">
                                                      <label class="form-check-label" for="premium-economy">
                                                         Premium Economy
                                                      </label>
                                                   </div>
                                                   <div class="form-check me-3 mb-3">
                                                      <input class="form-check-input" type="radio" value="Business" name="cabin-class" id="business">
                                                      <label class="form-check-label" for="business">
                                                         Business
                                                      </label>
                                                   </div>
                                                   <div class="form-check mb-3">
                                                      <input class="form-check-input" type="radio" value="First Class" name="cabin-class" id="first-class">
                                                      <label class="form-check-label" for="first-class">
                                                         First Class
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="d-flex justify-content-end">
                                                <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                 </div>
                              </div>
                              <div class="multi-trip">
                                 <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                       <div class="form-item dropdown">
                                          <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                             <label class="form-label fs-14 text-default mb-1">From</label>
                                             <input type="text" class="form-control" value="Newyork">
                                             <p class="fs-12 mb-0">Ken International Airport</p>
                                          </div>
                                          <div class="dropdown-menu dropdown-md p-0">
                                             <div class="input-search p-3 border-bottom">
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="Search Location">
                                                   <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                </div>
                                             </div>
                                             <ul>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Newyork</h6>
                                                      <p>Ken International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Boston</h6>
                                                      <p>Boston Logan International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                      <p>Dulles International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                      <p>Los Angeles International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Orlando</h6>
                                                      <p>Orlando International Airport</p>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-item dropdown ps-2 ps-sm-3">
                                          <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                             <label class="form-label fs-14 text-default mb-1">To</label>
                                             <h5>Las Vegas</h5>
                                             <p class="fs-12 mb-0">Martini International Airport</p>
                                             <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                             </span>
                                          </div>
                                          <div class="dropdown-menu dropdown-md p-0">
                                             <div class="input-search p-3 border-bottom">
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="Search Location">
                                                   <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                </div>
                                             </div>
                                             <ul>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Newyork</h6>
                                                      <p>Ken International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Boston</h6>
                                                      <p>Boston Logan International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                      <p>Dulles International Airport</p>
                                                   </a>
                                                </li>
                                                <li class="border-bottom">
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                      <p>Los Angeles International Airport</p>
                                                   </a>
                                                </li>
                                                <li>
                                                   <a class="dropdown-item" href="javascript:void(0);">
                                                      <h6 class="fs-16 fw-medium">Orlando</h6>
                                                      <p>Orlando International Airport</p>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-item">
                                          <label class="form-label fs-14 text-default mb-1">Departure</label>
                                          <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                          <p class="fs-12 mb-0">Monday</p>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade active show" id="Hotels">
                              <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                 <!-- <h6 class="fw-medium fs-16 mb-2">Book Hotel - Villas, Apartments & more.</h6> -->
                              </div>
                              <div class="d-lg-flex">
                                 <div class="d-flex  form-info">
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">City/Hotel/Resort/Area</label>
                                          <input type="text" class="form-control" value="Sylhet">
                                          <p class="fs-12 mb-0">Sylhet</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                         
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Dhaka</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Sylhet</h6>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="form-item">
                                       <label class="form-label fs-14 text-default mb-1">Check In</label>
                                       <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                       <p class="fs-12 mb-0">Monday</p>
                                    </div>
                                    <div class="form-item">
                                       <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                       <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                       <p class="fs-12 mb-0">Monday</p>
                                    </div>
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Rooms & Guests</label>
                                          <h5>4 <span class="fw-normal fs-14">Room, 1 Guests</span></h5>
                                          <p class="fs-12 mb-0">1 Adults</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                          <h5 class="mb-3">Select Travelers & Class</h5>
                                          <div class="mb-3 border br-10 info-item pb-1">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Adults</label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="mb-3 border br-10 info-item pb-1">
                                             <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                             <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="room" id="room1" checked>
                                                   <label class="form-check-label" for="room1">
                                                      Single
                                                   </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="room" id="room2">
                                                   <label class="form-check-label" for="room2">
                                                      Double
                                                   </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="room" id="room3">
                                                   <label class="form-check-label" for="room3">
                                                      Delux
                                                   </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                   <input class="form-check-input" type="radio" name="room" id="room4">
                                                   <label class="form-check-label" for="room4">
                                                      Suite
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="mb-3 border br-10 info-item pb-1">
                                             <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                             <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="property" id="property1" checked>
                                                   <label class="form-check-label" for="property1">
                                                      Villa
                                                   </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="property" id="property2">
                                                   <label class="form-check-label" for="property2">
                                                      Condo
                                                   </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                   <input class="form-check-input" type="radio" name="property" id="property3">
                                                   <label class="form-check-label" for="property3">
                                                      Cabin
                                                   </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                   <input class="form-check-input" type="radio" name="property" id="property4">
                                                   <label class="form-check-label" for="property4">
                                                      Apartments
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-end">
                                             <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                             <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Price per Night</label>
                                          <input type="text" class="form-control" value="$1000 - $15000">
                                          <p class="fs-12 mb-0">20 Offers Available</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">$500 - $2000</h6>
                                                   <p>Upto 65% offers</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Upto 65% offers</h6>
                                                   <p>Upto 40% offers</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">$5000 - $8000</h6>
                                                   <p>Upto 35% offers</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">$9000 - $11000</h6>
                                                   <p>Upto 20% offers</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">$11000 - $15000</h6>
                                                   <p>Upto 10% offers</p>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div> -->
                                 </div>
                                 <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="Package">
                              <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                 <!-- <h6 class="fw-medium fs-16 mb-2">Search For Cruise</h6> -->
                              </div>
                              <div class="d-lg-flex">
                                 <div class="d-flex  form-info">
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Location/Tour</label>
                                          <input type="text" class="form-control" value="Thailand">
                                          <p class="fs-12 mb-0">Thailand</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Newyork</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Boston</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Orlando</h6>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>

                                 <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                              </div>
                              <div class="d-flex flex-wrap align-items-center w-25 mt-3">
                                 <a href="package-tour-details.php" class="view-tour-btn-sm" data-bs-toggle="dropdown" data-bs-auto-close="outside">Need A Customized Package?</a>
                                 <div class="dropdown-menu dropdown-menu-end dropdown-xl" >
                                    <h5 class=" m-auto mb-3">Request Customized Package Plan</h5>
                                    <div class="mb-3 border br-10 info-item pb-1">
                                       <form class="form ms-4 me-4 mb-4">
                                          <div class="row mb-2">
                                             <div class="col-6">
                                                <div class="form-group">
                                                   <label class="text-dark mb-2">Tour Type</label>
                                                   <div class="custom-select-wrapper">
                                                      <select id="custPackagetourType" required="" class="form-control custom-select">
                                                         <option value="">Select</option>
                                                         <option value="LUXURY">LUXURY</option>
                                                         <option value="PREMIUM">PREMIUM</option>
                                                         <option value="STANDARD">STANDARD</option>
                                                      </select>
                                                      <span class="arrow-down">▼</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="form-group">
                                                   <label class="text-dark mb-2">Country</label>
                                                   <div class="custom-select-wrapper">
                                                      <select id="custPackageCountry" required="" class="form-control custom-select">
                                                         <option value="">Select</option>
                                                         <option value="Bangladesh">Bangladesh</option>
                                                         <option value="Malaysia">Malaysia</option>
                                                         <option value="Egypt">Egypt</option>
                                                         <option value="Greece">Greece</option>
                                                         <option value="India">India</option>
                                                         <option value="Indonesia">Indonesia</option>
                                                         <option value="Maldives">Maldives</option>
                                                         <option value="Nepal">Nepal</option>
                                                         <option value="Singapore">Singapore</option>
                                                         <option value="Spain">Spain</option>
                                                         <option value="Srilanka">Srilanka</option>
                                                         <option value="Thailand">Thailand</option>
                                                         <option value="Turkey">Turkey</option>
                                                         <option value="United Arab Emirates-Dubai">United Arab Emirates-Dubai</option>
                                                         <option value="Australia">Australia</option>
                                                         <option value="Austria">Austria</option>
                                                         <option value="Belgium">Belgium</option>
                                                         <option value="Cambodia">Cambodia</option>
                                                         <option value="Canada">Canada</option>
                                                         <option value="China">China</option>
                                                         <option value="Czech Republic">Czech Republic</option>
                                                         <option value="Denmark">Denmark</option>
                                                         <option value="Estonia">Estonia</option>
                                                         <option value="Finland">Finland</option>
                                                         <option value="France">France</option>
                                                         <option value="Germany">Germany</option>
                                                         <option value="Hong Kong">Hong Kong</option>
                                                         <option value="Hungary">Hungary</option>
                                                         <option value="Iceland">Iceland</option>
                                                         <option value="Italy">Italy</option>
                                                         <option value="Latvia">Latvia</option>
                                                         <option value="Liechtenstein ">Liechtenstein </option>
                                                         <option value="Lithuania">Lithuania</option>
                                                         <option value="Luxembourg">Luxembourg</option>
                                                         <option value="Malta">Malta</option>
                                                         <option value="Netherlands">Netherlands</option>
                                                         <option value="Norway">Norway</option>
                                                         <option value="Poland">Poland</option>
                                                         <option value="Portugal">Portugal</option>
                                                         <option value="Slovakia">Slovakia</option>
                                                         <option value="Slovenia">Slovenia</option>
                                                         <option value="Sweden">Sweden</option>
                                                         <option value="Switzerland">Switzerland</option>
                                                         <option value="United Kingdom">United Kingdom</option>
                                                         <option value="USA">USA</option>
                                                         <option value="Vietnam">Vietnam</option>
                                                      </select><span class="arrow-down">▼</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="cityParent" class="border rounded pt-2 ps-3 pb-0 mb-2">
                                             <div class="row mb-2">
                                                <div class="col-lg-5 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2">City</label>
                                                      <div class="custom-select-wrapper"><select class="form-control custom-select" id="custPackageCity-0" required="">
                                                            <option value="">Select</option>
                                                         </select><span class="arrow-down">▼</span> </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2">How many nights?</label><input required="" class="form-control" type="number" placeholder="How many nights?" value="0"></div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-12">
                                                   <div class="form-group mt-2 mb-2">
                                                      <div class="btn btn_primary btn_1" style="cursor: pointer;">Add city</div><small class="text-dark mb-2 ms-2">*Upto 4</small>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="border rounded pt-2 ps-3 pe-3 pb-0 mb-2">
                                             <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group mb-3"><label class="text-dark mb-2">Adult</label><input required="" class="form-control" type="text" placeholder="Adult" value="1"></div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2">Children</label><br>
                                                      <div class="d-flex justify-content-start align-items-center"><span class="bg-sec1 ps-3 pe-3 pt-2 pb-2 rounded " style="cursor: pointer;">-</span><input required="" disabled="" class="form-control w-75 text-center cust_from" type="number" placeholder="Children" value="0"><span class=" bg-sec2 ps-3 pe-3 pt-2 pb-2 rounded " style="cursor: pointer;">+</span></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row"></div>
                                          <div class="border rounded pt-2 ps-3 pe-3 pb-2 mb-2">
                                             <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2">Travel Date</label>
                                                      <div class="form-control customize-pack-date">
                                                         <div class="react-datepicker-wrapper">
                                                            <div class="react-datepicker__input-container"><input type="text" placeholder="Select Travel Date" class="form-control" value=""></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2">Room</label><input required="" class="form-control" type="number" placeholder="Room" value="0"></div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2 mt-2">Hotel Category</label>
                                                      <div class="custom-select-wrapper"><select required="" class="form-control custom-select">
                                                            <option value="">Select</option>
                                                            <option value="1">1 Star</option>
                                                            <option value="2">2 Star</option>
                                                            <option value="3">3 Star</option>
                                                            <option value="4">4 Star</option>
                                                            <option value="5">5 Star</option>
                                                         </select><span class="arrow-down">▼</span> </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                   <div class="form-group"><label class="text-dark mb-2 mt-2">&nbsp; &nbsp;</label><textarea style="height: 35px;" required="" class="form-control" placeholder="Write here"></textarea></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="border rounded pt-2 ps-3 pe-3 pb-3 mb-2">
                                             <div class="row">
                                                <div class="col-lg-4 col-sm-6">
                                                   <div class="form-group"><label class="text-dark mb-2">Your Name</label><input required="" class="form-control" type="text" placeholder="Name" value=""></div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6">
                                                   <div class="form-group"><label class="text-dark mb-2">Your Email</label><input required="" class="form-control" type="text" placeholder="Email" value=""></div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6">
                                                   <div class="form-group"><label class="text-dark mb-2">Your Phone</label><input required="" class="form-control" type="text" placeholder="Phone" value=""></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="form-group"><button type="submit" class="btn w-100 btn_primary btn_1">Request Plan</button></div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                       <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                       <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="Visa">
                              <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                 <!-- <h6 class="fw-medium fs-16 mb-2">Search For Cruise</h6> -->
                              </div>
                              <div class="d-lg-flex">
                                 <div class="d-flex  form-info">
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">I’m a citizen of</label>
                                          <input type="text" class="form-control" value="Bangladesh">
                                          <p class="fs-12 mb-0">Bangladesh</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Newyork</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Boston</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Orlando</h6>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Travelling to</label>
                                          <input type="text" class="form-control" value="Thailand">
                                          <p class="fs-12 mb-0">Thailand</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Newyork</h6>=
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Boston</h6>=
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Northern Virginia</h6>=
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Los Angeles</h6>=
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Orlando</h6>=
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Visa Category</label>
                                          <input type="text" class="form-control" value="Tourist Visa">
                                          <p class="fs-12 mb-0">Type</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Tourist Visa</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">All types of Visa</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Business Visa</h6>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Business Visa</h6>
                                                </a>
                                             </li>
                                            
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="Tour">
                              <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                 <h6 class="fw-medium fs-16 mb-2">Search holiday packages & trips</h6>
                              </div>
                              <div class="d-lg-flex">
                                 <div class="d-flex  form-info">
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Where would like to go?</label>
                                          <input type="text" class="form-control" value="Newyork">
                                          <p class="fs-12 mb-0">USA</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-md p-0">
                                          <div class="input-search p-3 border-bottom">
                                             <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
                                                <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                             </div>
                                          </div>
                                          <ul>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">USA</h6>
                                                   <p>200 Places</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Japan</h6>
                                                   <p>300 Places</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Singapore</h6>
                                                   <p>80 Places</p>
                                                </a>
                                             </li>
                                             <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Russia</h6>
                                                   <p>500 Places</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                   <h6 class="fs-16 fw-medium">Germany</h6>
                                                   <p>150 Places</p>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="form-item">
                                       <label class="form-label fs-14 text-default mb-1">Dates</label>
                                       <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                       <p class="fs-12 mb-0">Monday</p>
                                    </div>
                                    <div class="form-item">
                                       <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                       <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                       <p class="fs-12 mb-0">Wednesday</p>
                                    </div>
                                    <div class="form-item dropdown">
                                       <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                          <label class="form-label fs-14 text-default mb-1">Travellers</label>
                                          <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                          <p class="fs-12 mb-0">2 Adult</p>
                                       </div>
                                       <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                          <h5 class="mb-3">Select Travelers</h5>
                                          <div class="mb-3 border br-10 info-item pb-1">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Adult</label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="mb-3 d-flex align-items-center justify-content-between">
                                                      <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                      <div class="custom-increment">
                                                         <div class="input-group">
                                                            <span class="input-group-btn float-start">
                                                               <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                  <span><i class="isax isax-minus"></i></span>
                                                               </button>
                                                            </span>
                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                            <span class="input-group-btn float-end">
                                                               <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                  <span><i class="isax isax-add"></i></span>
                                                               </button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-end">
                                             <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                             <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Hero Section -->
<!-- Popular Destination -->
<section class="place-section pb-2">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title">Popular <span>Destinations</span></h2>
            </div>
         </div>
      </div>
      <div>
         <div class="place-nav pricing-plan-tab">
            <div class="nav justify-content-center">
               <div class="tab-btn d-flex align-items-center">
                  <div>
                     <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#pricing-list-01">
                        Srilanka
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#pricing-list-02">
                        Nepal
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#pricing-list-01">
                        Miami Beach
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#pricing-list-02">
                        Bangkok
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#pricing-list-01">
                        Los Angeles
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content">
            <!-- Category-1 -->
            <div class="tab-pane fade active show" id="pricing-list-01">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-12 ">
                     <div class="destination-set  wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T1.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set  wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T8.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="destination-img">
                           <img src="assets/img/T2.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T3.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T6.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T7.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T5.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T4.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Category-1 -->
            <!-- Category-2 -->
            <div class="tab-pane fade " id="pricing-list-02">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-12 ">
                     <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T6.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T7.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="destination-img">
                           <img src="assets/img/T5.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T4.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set  wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T1.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set  wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T8.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                           <img src="assets/img/T2.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                     <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                           <img src="assets/img/T3.jpg" alt="Img">
                        </div>
                        <div class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                           <a href="javascript:void(0);">
                              <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Category-2 -->
         </div>
      </div>
   </div>
</section>
<!-- Popular Destination -->
<!-- Notice Section -->
<section class="section client-section-four wow zoomIn pb-5" data-wow-delay="0.2s">
   <div class="container">
      <div class="client-sec">
         <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
            <div class="slide-list d-flex">
               <div class="support-item">
                  <h5>Personalized Itineraries</h5>
               </div>
               <div class="support-item">
                  <h5>Comprehensive Planning</h5>
               </div>
               <div class="support-item">
                  <h5>Expert Guidance</h5>
               </div>
               <div class="support-item">
                  <h5>Local Experience</h5>
               </div>
               <div class="support-item">
                  <h5>Customer Support</h5>
               </div>
               <div class="support-item">
                  <h5>Sustainability Efforts</h5>
               </div>
               <div class="support-item">
                  <h5>Multiple Regions</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Notice Section -->
<!-- Jajj & Umrah Package -->
<section class="hero-sec-six">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title text-white">Hajj & Umrah <span>Package</span></h2>
            </div>
         </div>
      </div>
      <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp mt-4" data-wow-delay="1.5">
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">20% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">15% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-4.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">10% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
      </div>
      <div class="text-center view-all wow fadeInUp mt-4">
         <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i class="isax isax-arrow-right-3 ms-2"></i></a>
      </div>
   </div>
</section>
<!-- Jajj & Umrah Package -->
<!--Tour Packages-->
<section class="place-section bg-light-400">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title"><span>Package</span> Tour</h2>
            </div>
         </div>
      </div>
      <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp" data-wow-delay="1.5">
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">20% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">15% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-4.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">10% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
      </div>
      <div class="text-center view-all wow fadeInUp mt-3">
         <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i class="isax isax-arrow-right-3 ms-2"></i></a>
      </div>
   </div>
</section>
<!--Tour Packages-->
<!-- About Section -->
<section class="place-section ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <div class="about-car mb-4 mb-lg-0 wow zoomIn">
               <div class="row align-items-center gx-0">
                  <div class="col-6">
                     <div class="about-img-01">
                        <img src="assets/img/cars/about-01.jpg" alt="img" class="img-fluid">
                     </div>
                     <div class="about-img-03">
                        <img src="assets/img/cars/about-02.jpg" alt="img" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="about-img-02">
                        <img src="assets/img/cars/about-03.jpg" alt="img" class="img-fluid">
                     </div>
                     <div class="about-img-04">
                        <img src="assets/img/cars/about-04.jpg" alt="img" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="about-exp">
                  <h2>10+</h2>
                  <p>Years of Experience</p>
               </div>
            </div>
         </div>
         <div class="col-lg-7 wow fadeInDown ">
            <div class="about-textarea">
               <div class="section-header text-left">
                  <h6 class="fs-14 fw-medium text-primary d-flex align-items-center mb-2"><i class="isax isax-trend-up me-1"></i>About Backpack Wala</h6>
                  <h2 class="section-main-title">Where comfort <span>meets elegance</span></h2>
               </div>
               <p class="base-paragraph">BackpackWala is a full-service travel agency, providing personalized and memorable travel experiences
                  for all types of travelers. With 10 years of experience and a passion for travel, our team of experts is dedicated to
                  helping you plan and book your perfect vacation. Whether you are looking to relax on a tropical beach, explore historic
                  cities, or embark on an adventure, we have you covered.
               </p>
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="bg-prime-trans mb-4 wow fadeInUp" data-wow-delay="1.5" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card border-0 mb-0">
                           <div class="card-body">
                              <div>
                                 <h5 class="mb-2 custom-title-md">Booking &amp; Confirmation</h5>
                                 <p class="custom-text-md">Ensure that the tour is available on the dates you plan to travel. Browse available tours in your destination.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="bg-teal-trans mb-4 wow fadeInUp" data-wow-delay="1.5" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card border-0 mb-0">
                           <div class="card-body">
                              <div>
                                 <h5 class="mb-2 custom-title-md">Checking Availability</h5>
                                 <p class="custom-text-md">Ensure that the tour is available on the dates you plan to travel. Browse available tours in your destination.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="d-flex align-items-center flex-wrap gap-3 mb-0 mb-md-4 mb-lg-0 mt-4">
                  <a href="about-us.php" class="btn btn-dark d-inline-flex align-items-center"><i class="isax isax-add-circle5 me-2"></i>More About Backpack Wala</a>
                  <a href="car-booking.html" class="btn btn-primary d-inline-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>All Tour Packages</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /About Section -->
<!--Client Section-->
<section class="place-section bg-light-500">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-8 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="section-header text-center">
               <h2 class="section-main-title">Trusted By <span>980+ Clients</span> Around the Globe</h2>
            </div>
         </div>
      </div>
      <div class="more-companies-logo">
         <div class="owl-carousel client-slider-two owl-loaded owl-drag">
            <div class="owl-stage-outer">
               <div class="owl-stage" style="transform: translate3d(-2640px, 0px, 0px); transition: 2s; width: 4400px;">
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-03.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-04.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-05.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-06.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-07.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-04.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-01.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-02.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-03.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-04.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-05.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-06.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-07.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-04.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-01.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-02.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-03.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-04.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-05.svg" alt="img">
                     </div>
                  </div>
                  <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                     <div class="client-img">
                        <img src="assets/img/clients/client-06.svg" alt="img">
                     </div>
                  </div>
               </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa-solid fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa-solid fa-chevron-right"></i></button></div>
            <div class="owl-dots disabled"></div>
         </div>
      </div>
   </div>
</section>
<!--Client Section-->
<!-- HOT Deals -->
<section class="hero-sec-hot">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title text-white"><span>HOT</span> Deals</h2>
            </div>
         </div>
      </div>
      <div class="cars-slider owl-dot-bottom owl-carousel wow fadeInUp mt-3" data-wow-delay="1.5">
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">20% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-1.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">15% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-4.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">10% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
         <!-- Tours Grid -->
         <div class="place-item mb-4 flex-fill">
            <div class="place-img">
               <div class="img-slider image-slide owl-carousel nav-center">
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-2.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
                  <div class="slide-images">
                     <a href="tour-grid.html">
                        <img src="assets/img/p-3.jpg" class="img-fluid" alt="img">
                     </a>
                  </div>
               </div>
               <div class="fav-item">
                  <span class="badge d-inline-flex align-items-center">50% <br />off</span>
                  <a href="javascript:void(0);" class="fav-icon selected">
                     <i class="isax isax-heart5"></i>
                  </a>
               </div>
            </div>
            <div class="place-content custom-padding-sm">
               <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
               <p class="custom-text-sm mb-2"><i class='bx bxs-map'></i> Nepal-Kathmandu, Pokhara & Ghandruk</p>
               <div class="tour-quick-overview-box mb-3">
                  <div class="guest-details2">
                     <ul>
                        <li>
                           <h6><i class='bx bx-moon'></i>3 Day, 2 Night</h6>
                        </li>
                     </ul>
                  </div>
                  <span class="d-inline-block vertical-splits">
                     <i class='bx bx-dots-vertical-rounded bx-flashing'></i>
                  </span>
                  <div class="guest-details2 ms-2">
                     <ul>
                        <li class="text-end">
                           <h6>
                              <i class='bx bxs-hotel'></i> <i class='bx bx-bus'></i> <i class='bx bx-trip'></i>
                              <i class='bx bx-restaurant'></i> <i class="isax isax-wind-2 me-2 text-primary"></i>
                           </h6>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between w-100">
                  <div class="d-flex flex-wrap align-items-center w-50">
                     <a href="package-tour-details.php" class="view-tour-btn-sm">VIEW PACKAGE</a>
                  </div>
                  <div class="d-flex align-items-center flex-wrap">
                     <h5 class="tour-package-price"><span class="custom-text-s">BDT</span> 27,500</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Tours Grid -->
      </div>
      <div class="text-center view-all wow fadeInUp mt-5">
         <a href="flight-grid.html" class="custom-button-md">All Tour Packages<i class="isax isax-arrow-right-3 ms-2"></i></a>
      </div>
   </div>
</section>
<!-- HOT Deals -->

<!-- Testimonial Section -->
<section class="place-section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title">What’s Our <span>CUSTOMER</span> Says</h2>
            </div>
         </div>
      </div>
      <div class="owl-carousel testimonial-slider">
         <!-- Testimonial Item-->
         <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
            <div class="card-body">
               <h6 class="testimonial-quots"><i class='bx bxs-quote-left bx-tada text-mute'></i>Great Hospitalization</h6>
               <p class="default-text">Dream Tours is the only way to go. We had the time of our life on our trip to the Ark. The customer service was wonderful & the staff was very helpful.</p>
               <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                        <img src="assets/img/user-27.webp" class="rounded-circle" alt="img">
                     </a>
                     <div class="ms-3">
                        <h6 class="testimonial-title"><a href="javascript:void(0);">Andrew Fetcher</a></h6>
                        <p class="testimonial-designation">Newyork, United States</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Testimonial Item-->
         <!-- Testimonial Item-->
         <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
            <div class="card-body">
               <h6 class="mb-4">Hidden Treasure</h6>
               <p class="mb-4">I went on the Gone with the Wind tour, and it was my first multi-day bus tour. The experience was terrific, thanks to the friendly tour guides.</p>
               <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                        <img src="assets/img/user-27.webp" class="rounded-circle" alt="img">
                     </a>
                     <div class="ms-3">
                        <h6 class="testimonial-title"><a href="javascript:void(0);">Andrew Fetcher</a></h6>
                        <p class="testimonial-designation">Newyork, United States</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Testimonial Item-->
         <!-- Testimonial Item-->
         <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
            <div class="card-body">
               <h6 class="mb-4">Easy to Find your Leisuere Place</h6>
               <p class="mb-4">Thanks for arranging a smooth travel experience for us. Our cab driver was polite, timely, and helpful. The team ensured making it a stress-free trip.</p>
               <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                        <img src="assets/img/user-27.webp" class="rounded-circle" alt="img">
                     </a>
                     <div class="ms-3">
                        <h6 class="testimonial-title"><a href="javascript:void(0);">Andrew Fetcher</a></h6>
                        <p class="testimonial-designation">Newyork, United States</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Testimonial Item-->
         <!-- Testimonial Item-->
         <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
            <div class="card-body">
               <h6 class="mb-4">Great Service</h6>
               <p class="mb-4">We had a fantastic time as a family. There were activities for every age group, and the kids loved the kids’ club, fun activities, good customer service.</p>
               <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                     <span class="avatar avatar-md  flex-shrink-0">
                        <img src="assets/img/user-27.webp" class="rounded-circle" alt="img">
                     </span>
                     <div class="ms-3">
                        <h6 class="testimonial-title"><a href="javascript:void(0);">Andrew Fetcher</a></h6>
                        <p class="testimonial-designation">Newyork, United States</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Testimonial Item-->
      </div>
   </div>
</section>
<!-- /Testimonial Section -->
<!-- How It Work Section -->
<section class="section work-section">
   <div class="container">
      <div class="row">
         <div class="col-xxl-3 col-lg-4">
            <div class="section-header">
               <div>
                  <p class="mb-2 fw-medium d-flex align-items-center"><span class="text-bar bg-white"></span>How it Works</p>
                  <h2 class="section-main-title">Here’s a simple breakdown of <span>how our services work</span></h2>
               </div>
            </div>
         </div>
         <div class="col-xxl-9 col-lg-8">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="card border-0">
                     <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           <span class="work-avatar">
                              01<small class="text-primary">.</small>
                           </span>
                           <span class="work-icon d-flex"><i class="isax isax-buildings-25"></i></span>
                        </div>
                        <div>
                           <h5 class="mb-2 text-truncate">Search hotels</h5>
                           <p class="text-truncate line-clamb-3">Choose your dates, select your room type, and book directly through our website or by contacting us.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="card border-0">
                     <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           <span class="work-avatar">
                              02<small class="text-primary">.</small>
                           </span>
                           <span class="work-icon d-flex"><i class="isax isax-calendar-edit5"></i></span>
                        </div>
                        <div>
                           <h5 class="mb-2 text-truncate">Booking & Confirmation</h5>
                           <p class="text-truncate line-clamb-3">Upon arrival, check in at our reception. Our friendly staff will guide you through</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="card border-0">
                     <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           <span class="work-avatar">
                              03<small class="text-primary">.</small>
                           </span>
                           <span class="work-icon d-flex"><i class="isax isax-direct-send5"></i></span>
                        </div>
                        <div>
                           <h5 class="mb-2">Enjoy Your Stay</h5>
                           <p class="text-truncate line-clamb-3">Explore our amenities, dining options, and local attractions & Many More</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /How It Work Section -->
<!-- Blog Section -->
<section class="place-section blog-section">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-header text-center">
               <h2 class="section-main-title">Recent <span>Blogs</span></h2>
               <p class="sub-title">Stay Updated on the Stories & Stay Updated </p>
            </div>
         </div>
      </div>
      <div class="row g-4 justify-content-center">
         <!-- Blog Item-->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="blog-item blog-wrap flex-fill wow fadeInUp" data-wow-delay="0.2s">
               <a href="blog-details.php" class="blog-img">
                  <img src="assets/img/sdfre.jpg" alt="img">
                  <span class="badge bg-white text-gray-9 fs-14 fw-medium">Booking</span>
               </a>
               <div class="blog-content">
                  <div class="d-flex align-items-center justify-content-between">
                     <a href="javascript:void(0);" class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-md2 flex-shrink-0 me-2">
                           <img src="assets/img/user-27.webp" alt="img" class="">
                        </span>
                        <p class="fs-14">Merkel James</p>
                     </a>
                     <p class="fs-13 fw-medium d-flex align-items-center mb-2"><i class="isax isax-calendar-1 text-gray-9 fs-20 me-2"></i>27 Sep 2025</p>
                  </div>
                  <h5 class="blog-title"><a href="blog-details.php">It empowers designers to swiftly created informative landing pages</a></h5>
               </div>
            </div>
         </div>
         <!-- /Blog Item-->
         <!-- Blog Item-->
         <div class="col-lg-4 col-md-6">
            <div class="blog-item blog-wrap flex-fill wow fadeInUp" data-wow-delay="0.2s">
               <a href="blog-details.php" class="blog-img">
                  <img src="assets/img/rrf.jpg" alt="img">
                  <span class="badge bg-white text-gray-9 fs-14 fw-medium">News</span>
               </a>
               <div class="blog-content">
                  <div class="d-flex align-items-center justify-content-between">
                     <a href="javascript:void(0);" class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-md2 flex-shrink-0 me-2">
                           <img src="assets/img/user-27.webp" alt="img" class="">
                        </span>
                        <p class="fs-14">Harriet Collins</p>
                     </a>
                     <p class="fs-13 fw-medium d-flex align-items-center mb-2"><i class="isax isax-calendar-1 text-gray-9 fs-20 me-2"></i>27 Sep 2025</p>
                  </div>
                  <h5 class="blog-title"><a href="blog-details.php">Want to be notified about new post and news from our Portal ?</a></h5>
               </div>
            </div>
         </div>
         <!-- /Blog Item-->
         <!-- Blog Item-->
         <div class="col-lg-4 col-md-6">
            <div class="blog-item blog-wrap flex-fill wow fadeInUp" data-wow-delay="0.2s">
               <a href="blog-details.php" class="blog-img">
                  <img src="assets/img/rerew.jpg" alt="img">
                  <span class="badge bg-white text-gray-9 fs-14 fw-medium">Tips</span>
               </a>
               <div class="blog-content">
                  <div class="d-flex align-items-center justify-content-between">
                     <a href="javascript:void(0);" class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-md2 flex-shrink-0 me-2">
                           <img src="assets/img/user-27.webp" alt="img" class="">
                        </span>
                        <p class="fs-14">Rachel Mariscal</p>
                     </a>
                     <p class="fs-13 fw-medium d-flex align-items-center mb-2"><i class="isax isax-calendar-1 text-gray-9 fs-20 me-2"></i>27 Sep 2025</p>
                  </div>
                  <h5 class="blog-title"><a href="blog-details.php">It empowers designers to swiftly created informative landing pages</a></h5>
               </div>
            </div>
         </div>
         <!-- /Blog Item-->
      </div>
   </div>
</section>
<!-- /Blog Section -->
<?php include 'include/footer.php'; ?>