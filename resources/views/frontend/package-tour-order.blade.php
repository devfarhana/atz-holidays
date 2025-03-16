@extends('layouts.master')
@section('title')
{{ $settings->system_name }} || Order Now
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-02 text-center">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-12">
            <h2 class="breadcrumb-title mb-2">Tour Details</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                  <li class="breadcrumb-item">Tours</li>
                  <li class="breadcrumb-item active" aria-current="page">Tour Details</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
<!-- Page Wrapper -->
<section class="place-section">
   <div class="container">
      <div class="row">
         <!-- Booking Success -->
         <div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
               <div class="modal-content booking-success-modal">
                  <div class="modal-body">
                     <div>
                        <div class="booking-icon text-center mb-3">
                           <img src="assets/img/icons/tick-circle.svg" alt="icon" class="img-fluid">
                        </div>
                        <h5 class="text-center mb-3">Payment Successful</h5>
                        <div class="text-center mb-4">
                           <p>Booking on <strong>Rainbow Mountain Valley</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ">
                           <a href="javascript:void(0);" class="btn btn-light d-flex flex-shrink-0 me-2" data-bs-dismiss="modal">Contact Provider</a>
                           <a href="booking-confirmation.html" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- BookingSuccess -->
         <div class="col-lg-8">
            <div class="card checkout-card">
                <div class="card-header text-center border-0 pt-2 pb-0">
                  <div class="pb-2">
                     <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Secure Checkout</h5>
                  </div>
               </div>
               <div class="card-body">
                  <div class="p-2 bg-transparent-success border rounded-2 border-success mb-4">
                     <p class="text-gray-9 fs-14">Checkout Securely - it only takes few Minutes</p>
                  </div>
                  <div class="checkout-details">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">First Name</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Last Name</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Email</label>
                              <input type="email" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Phone</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Address line 1</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Address line 2</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">City</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">State</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Zip Code</label>
                              <input type="text" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                              <label class="form-label">Country</label>
                              <select class="select">
                                 <option>Select</option>
                                 <option>Barcelona</option>
                                 <option>London</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="mb-0">
                              <label class="form-label">Additional Info</label>
                              <textarea class="form-control" rows="4"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card payment-details">
                <div class="card-header text-center border-0 pt-2 pb-0">
                  <div class="pb-2">
                     <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Payment Details</h5>
                  </div>
               </div>
               <div class="card-body">
                  <div class="tab-pane fade active show" id="flight">
                     <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                        <div class="d-flex align-items-center flex-wrap">
                           <div class="form-check d-flex align-items-center me-3 mb-2">
                              <input class="form-check-input mt-0" type="radio" name="Radio" id="credit-card" value="credit-card" checked>
                              <label class="form-check-label fs-14 ms-2" for="credit-card">
                              Credit / Debit Card
                              </label>
                           </div>
                           <div class="form-check d-flex align-items-center me-3 mb-2">
                              <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip" value="roundtrip">
                              <label class="form-check-label fs-14 ms-2" for="roundtrip">
                              Paypal
                              </label>
                           </div>
                           <div class="form-check d-flex align-items-center me-3 mb-2">
                              <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway" value="multiway">
                              <label class="form-check-label fs-14 ms-2" for="multiway">
                              Stripe
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="credit-card-details ">
                        <div class="mb-3">
                           <h6 class="fs-16 ">Payment With Credit Card</h6>
                        </div>
                        <div class="card-detials mb-3">
                           <div class="row g-3">
                              <div class="col-lg-4 d-flex">
                                 <div class="card-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                       <div>
                                          <img src="assets/img/icons/visa.svg" alt="image" class="img-fluid mb-2">
                                          <p class="fs-16 fw-medium text-gray-6">**** **** **** 2547</p>
                                       </div>
                                       <div class="card-edit-icon">
                                          <a href="javascript:void(0);" class="rounded-circle"> <span class=" d-flex align-items-center justify-content-center fs-14"><i class="isax isax-edit-2"></i></span></a>
                                       </div>
                                    </div>
                                    <div>
                                       <h6 class="fs-14 mb-1">Expiry</h6>
                                       <span class="fs-14 fw-normal text-gray-6">May 2026</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 d-flex">
                                 <div class="card-content flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                       <div>
                                          <img src="assets/img/icons/visa-2.svg" alt="image" class="img-fluid mb-2">
                                          <p class="fs-16 fw-medium text-gray-6">**** **** **** 2547</p>
                                       </div>
                                       <div class="card-edit-icon">
                                          <a href="javascript:void(0);" class="rounded-circle"> <span class=" d-flex align-items-center justify-content-center fs-14"><i class="isax isax-edit-2"></i></span></a>
                                       </div>
                                    </div>
                                    <div>
                                       <h6 class="fs-14 mb-1">Expiry</h6>
                                       <span class="fs-14 fw-normal text-gray-6">May 2026</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 d-flex">
                                 <div class="card-add flex-fill d-flex align-items-center justify-content-center">
                                    <div class="add-option d-flex align-items-center justify-content-center">
                                       <a href="javascript:void(0);" id="open-folder" class="rounded-circle d-flex align-items-center justify-content-center">
                                       <span class="d-flex align-items-center justify-content-center">
                                       <i class="isax isax-add"></i>
                                       </span>
                                       </a>
                                       <input type="file" id="folder-input" class="file-input">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-form">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label class="form-label">Card Holder Name</label>
                                    <div class="user-icon">
                                       <span class="input-icon fs-14"><i class="isax isax-user"></i></span>
                                       <input type="email" class="form-control ">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label class="form-label">Card Number</label>
                                    <div class="user-icon">
                                       <span class="input-icon fs-14"><i class="isax isax-card-tick"></i></span>
                                       <input type="email" class="form-control ">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label class="form-label">Expire Date</label>
                                    <div class="user-icon">
                                       <span class="input-icon fs-14"><i class="isax isax-calendar-2"></i></span>
                                       <input type="email" class="form-control ">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label class="form-label">CVV</label>
                                    <div class="user-icon">
                                       <span class="input-icon fs-14"><i class="isax isax-check"></i></span>
                                       <input type="email" class="form-control ">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 theiaStickySidebar">
            <div class="card shadow-none">
               <div class="card-header border-0 pt-2 pb-0">
                  <div class="border-bottom pb-2">
                     <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Order Info</h5>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                     <img src="assets/img/tours/tours-07.jpg" alt="Img" class="img-fluid avatar avatar-xxl me-2">
                     <div>
                        <h5 class="tour-package-title mb-1"><a href="package-tour-details.php">Mystical Nepal</a></h5>
                        <p class="custom-text-sm"><i class="bx bxs-map"></i> Nepal-Kathmandu, Pokhara &amp; Ghandruk</p>
                     </div>
                  </div>
                  <div class="pt-3">
                     <div class="d-flex">
                        <div class="align-items-center w-50">
                           <div class="">
                              <p class="form-label text-gray-9 mb-0">Departure</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center w-50">
                           <div class="">
                              <h6 class="custom-title-sm">৳46,500</h6>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex pb-2">
                        <div class="align-items-center w-50">
                           <div class="">
                              <p class="form-label text-gray-9 mb-0">Return</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center w-50">
                           <div class="">
                              <p class="custom-text-sm">Nepal</p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex pb-2">
                        <div class="align-items-center w-50">
                           <div class="">
                              <p class="form-label text-gray-9 mb-0">Adult</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center w-50">
                           <div class="">
                              <p class="custom-text-sm"  id="adults"></p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex pb-2">
                        <div class="align-items-center w-50">
                           <div class="">
                              <p class="form-label text-gray-9 mb-0" >Children</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center w-50">
                           <div class="">
                              <p class="custom-text-sm" id="children"></p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex pb-0">
                        <div class="align-items-center w-50">
                           <div class="">
                              <p class="form-label text-gray-9 mb-0">No of Days</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center w-50">
                           <div class="">
                              <p class="custom-text-sm">5 Days & 4 Nights</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                // Retrieve data from localStorage
                document.getElementById('propertyType').textContent = localStorage.getItem('propertyType');
                document.getElementById('roomType').textContent = localStorage.getItem('roomType');
                document.getElementById('adults').textContent = localStorage.getItem('adults');
                document.getElementById('children').textContent = localStorage.getItem('children');
                document.getElementById('rooms').textContent = localStorage.getItem('rooms');
            </script>
            </div>
            <div class="card bg-light coupoun">
               <div class="card-header text-center border-0 pt-2 pb-0">
                  <div class="pb-2">
                     <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Coupon</h5>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div class="d-flex align-items-center mb-2">
                     <input type="text" class="form-control me-2" placeholder="Coupon Code">
                     <a href="javascript:void(0);" class="custom-button-md bg-primary p-3 w-40 flex-shrink-0">Apply Coupon</a>
                  </div>
                  <div>
                     <div class="coupoun-list mb-3">
                        <p class="text-center">Coupon has been applied successfully <a href="javascript:void(0);" class=" ms-2 text-primary text-decoration-underline">Remove</a> </p>
                     </div>
                     <div class="coupoun-list-two">
                        <p class="text-center">Code Invalid <a href="javascript:void(0);" class=" ms-2 text-primary text-decoration-underline">Close</a> </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow-none">
               <div class="card-header border-0 pt-2 pb-0">
                  <div class="border-bottom pb-2">
                     <h5><i class="isax isax-candle text-primary fs-16 me-2"></i> Payment Info</h5>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div class="mt-3 pb-2 border-bottom">
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="fs-16">Sub Total</h6>
                        <p class="fs-16">$8565</p>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="fs-16">Tax <span class="text-gray-6"> (10%)</span></h6>
                        <p class="fs-16">$85</p>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="fs-16">Booking Fees</h6>
                        <p class="fs-16">$89</p>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mb-0">
                        <h6 class="fs-16">Discount <span class="text-gray-6"> (10%)</span></h6>
                        <p class="fs-16">-$20</p>
                     </div>
                  </div>
                  <div class="pt-2">
                     <div class="d-flex align-items-center justify-content-between">
                        <h6>Amount to Pay</h6>
                        <h6 class="text-primary">$9569</h6>
                     </div>
                  </div>
               </div>
               <div class="card-footer bg-light pt-2">
                  <div class="d-flex align-items-center justify-content-space-between flex-wrap gap-2">
                     <a href="package-tour-details.php" type="submit" class="btn btn-secondary btn-lg w-40 search-btn ms-0  fs-14 mt-3">Back</a>
                     <a type="submit" class="btn btn-primary btn-lg search-btn ms-0 w-40 fs-14 mt-3" data-bs-toggle="modal" data-bs-target="#booking-success">Confirm</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Page Wrapper -->
@endsection

@push('script')
<script>
    // Retrieve data from localStorage
    const propertyType = localStorage.getItem('propertyType');
    const roomType = localStorage.getItem('roomType');
    const adults = localStorage.getItem('adults');
    const children = localStorage.getItem('children');
    const rooms = localStorage.getItem('rooms');

    // Display the data on the page
    document.getElementById('propertyType').textContent = propertyType;
    document.getElementById('roomType').textContent = roomType;
    document.getElementById('adults').textContent = adults;
    document.getElementById('children').textContent = children;
    document.getElementById('rooms').textContent = rooms;
</script>
@endpush
