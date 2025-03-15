@extends('layouts.master')
@section('title')
{{ $settings->system_name }} ||Privacy & Policy
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-01 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Privacy & Policy</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy & Policy</li>
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

        <!-- Privacy Policy -->
        <p>
            At Travel DreamsTour, your privacy is important to us. This Privacy Policy outlines how we collect, use,
            disclose, and protect your personal information when you use our website and services.
        </p>

        <!-- Policy 1 -->
        @foreach($privacyPolicy as $privacy)
        <h6 class="mb-2">{{ $loop->iteration }}. {{$privacy->title}}</h6>
        <div class="mb-4">
           {!!$privacy->description!!}
        </div>
        @endforeach


        <!-- /Privacy Policy -->
    </div>
</div>
<!-- /Page Wrapper -->
@endsection
