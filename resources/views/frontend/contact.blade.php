@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} ||Contact
@endsection
@section('content')
<section class="page-header">
   <div class="page-header-bg" style="background-image: url({{ asset('frontend/assets') }}/images/Slider-1.jpg)">
   </div>
   <div class="page-header-shape-1"><img src="{{ asset('frontend/assets') }}/images/shapes/page-header-shape-1.png" alt=""></div>
   <div class="container">
      <div class="page-header__inner">
         <h2>Contact Us</h2>
         <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>/</span></li>
            <li>Contact Us</li>
         </ul>
      </div>
   </div>
</section>
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title-seven text-left">
                                <span class="section-title-seven__tagline"><span class="section-title-seven__tagline__icon"><i class="insur-four-icon-check"></i></span>Contact Us</span>
                                <h2 class="section-title-seven__title">Feel free to get in touch with experts</h2>
                            </div>
                            <div class="contact-page__call-email">
                                <div class="contact-page__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                        <a href="tel:{{$contact->phone}}" class="contact-page__call-number">{{$contact->phone}}</a>
                                        <a href="mailto:{{$contact->email}}"
                                            class="contact-page__email">{{$contact->email}}</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="contact-page__call-email mt-4">
                                <div class="contact-page__call-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                <div class="site-footer-five__contact__content">
                                            <p class="site-footer-five__contact__text" style="width: 200px;">{{$contact->address}}</p>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="{{ asset('frontend/assets') }}/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
<section class="cta-one cta-three">
   <div class="container">
      <div class="cta-one__content">
         <div class="cta-one__inner">
            <div class="cta-one__left">
               <h3 class="cta-one__title">Find a local Agent</h3>
            </div>
            <div class="cta-one__right">
               <div class="cta-one__call">
                  <div class="cta-one__call-icon">
                     <i class="fas fa-phone"></i>
                  </div>
                  <div class="cta-one__call-number">
                     <a href="tel:+880 1618 990 034">+880 1618 990 034</a>
                     <p>Call to Our Agent</p>
                  </div>
               </div>
               <div class="cta-one__btn-box">
                  <a href="#" class="thm-btn cta-one__btn">Book Now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="google-map-two">
    {!! $contact->map !!}
</section>
@endsection
@push('script')

<script>
</script>

@endpush
