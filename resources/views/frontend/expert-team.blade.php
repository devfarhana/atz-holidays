@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} ||Expert Team
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$teamPage->banner_img) }}') no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Expert Team</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Expert Team</li>
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
            <div class="row justify-content-center row-gap-5">
                @foreach ($teams as $team)
                <!-- Team Members -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card team">
                        <div class="card-body">
                            <a href="profile.html">
                                <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid" alt="Img">
                            </a>
                        </div>
                        <div class="team-member rounded-pill text-center shadow">
                            <h5><a href="profile.html">{{ $team->name }}</a></h5>
                            <p>{{ $team->position }}</p>
                        </div>
                    </div>
                </div>
                <!-- Team Members -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
