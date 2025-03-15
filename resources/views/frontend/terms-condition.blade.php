@extends('layouts.master')
@section('title')
{{ $settings->system_name }} ||Terms & Condition
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Terms & Condition</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Terms & Condition</li>
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

            <!-- Terms Condition -->
            <p>
                Welcome to Travel DreamsTour! By accessing or using our website and services, you agree to comply with and be bound by the following terms and conditions. Please read these carefully.
            </p>

            <!-- Terms 1 -->
            <h6 class="mb-2">1. Acceptance of Terms</h6>
            <p>
                By using our services, you confirm that you are at least 18 years old and have the legal capacity to enter into agreements.
            </p>
            <!-- /Terms 1 -->

            <!-- Terms2 -->
            @foreach($termsCondition as $term)
            <h6 class="mb-2">{{ $loop->iteration }}. {{$term->title}}</h6>
            <div class="mb-4">
                <div class="d-flex mb-1">{!!$term->description!!}</div>
            </div>
            @endforeach
            <!-- /Terms Condition-->
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
