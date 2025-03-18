@extends('layouts.master')
@section('title')
{{ $settings->system_name }} ||Faqs
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->faq_banner) }}') no-repeat; background-size: cover; width:100%" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Faqs</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">
            <!-- FAQ Section -->
            <div class="faq ">
                <div class="container">
                    <div class="faq-sec p-0">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="accordion" id="accordionFaq">
                                    @foreach($faqs as $index => $faq)
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="{{ 0.2 * ($index + 1) }}s">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq-collapse{{ $index }}" aria-expanded="false"
                                                    aria-controls="faq-collapse{{ $index }}">
                                                    {{ $faq->title }}
                                                </button>
                                            </h2>
                                            <div id="faq-collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p>{{ $faq->details }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /FAQ Section -->

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="que-sec text-center">
                        <h4 class="mb-3">Have Any Other Questions?</h4>
                        <p class="mb-3">If you cannot find answer to your question in our FAQ, you can always contact us. We wil answer to you shortly!</p>
                        <div class="d-flex justify-content-center">
                            <a href="contact-us.html" class="btn btn-primary d-flex align-items-center justify-content-center">Contact Us <i class="isax isax-arrow-right-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
