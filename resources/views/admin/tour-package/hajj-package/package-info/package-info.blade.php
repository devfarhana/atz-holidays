@extends('layouts.admin')
@section('title','Package Info')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Actions-->

        <!--end::Actions-->
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="#" class="text-muted text-hover-primary">Tour Package Details Information</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Information</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header project-details-card-header">
                        <h4 class="project-details-card-header-title mt-5"><i class='bx bx-slider bx-tada'></i>
                            Details Info</h4>
                    </div>
                    <style>
                        .custom-nav-pills {
                            width: 100%;
                            padding: 10px;
                        }

                        .custom-nav-pills .nav-link {
                            display: flex;
                            align-items: center;
                            font-weight: 600;
                            font-size: 16px;
                            color: #6c757d;
                            padding: 12px 15px;
                            border-radius: 6px;
                            transition: all 0.3s ease;
                        }

                        .custom-nav-pills .nav-link.active {
                            background-color: #005353;
                            color: #fff;
                            margin-top: 10px;
                        }
                    </style>

                    <div class="card-body overflow-y-auto" style="max-height: 80vh;">
                        <div class=" nav flex-column custom-nav-pills" id="v-pills-tab-without-border" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link {{ session('activeTab') == 'overview' ? 'active' : '' }} "
                                id="overview-tab-nobd" data-bs-toggle="pill" href="#overview-nobd" role="tab"
                                aria-controls="overview-nobd" aria-selected="false" tabindex="-1">Overview</a>

                            <a class="nav-link {{ session('activeTab') == 'video' ? 'active' : '' }} "
                                id="video-tab-nobd" data-bs-toggle="pill" href="#video-nobd" role="tab"
                                aria-controls="video-nobd" aria-selected="false" tabindex="-1">Video</a>

                            <a class="nav-link {{ session('activeTab') == 'activities' ? 'active' : '' }} "
                                id="activities-tab-nobd" data-bs-toggle="pill" href="#activities-nobd" role="tab"
                                aria-controls="activities-nobd" aria-selected="false" tabindex="-1">Activities</a>

                            <a class="nav-link {{ session('activeTab') == 'hotel' ? 'active' : '' }} "
                                id="hotel-tab-nobd" data-bs-toggle="pill" href="#hotel-nobd" role="tab"
                                aria-controls="hotel-nobd" aria-selected="false" tabindex="-1">Hotel</a>

                            <a class="nav-link {{ session('activeTab') == 'itinerary' ? 'active' : '' }} "
                                id="itinerary-tab-nobd" data-bs-toggle="pill" href="#itinerary-nobd" role="tab"
                                aria-controls="itinerary-nobd" aria-selected="false" tabindex="-1">Itinerary</a>

                            <a class="nav-link {{ session('activeTab') == 'inclusions' ? 'active' : '' }} "
                                id="inclusions-tab-nobd" data-bs-toggle="pill" href="#inclusions-nobd" role="tab"
                                aria-controls="inclusions-nobd" aria-selected="false" tabindex="-1">Inclusions</a>

                            <a class="nav-link {{ session('activeTab') == 'exclusions' ? 'active' : '' }} "
                                id="exclusions-tab-nobd" data-bs-toggle="pill" href="#exclusions-nobd" role="tab"
                                aria-controls="exclusions-nobd" aria-selected="false" tabindex="-1">Exclusions</a>

                            {{-- <a class="nav-link {{ session('activeTab') == 'price' ? 'active' : '' }} "
                                id="price-tab-nobd" data-bs-toggle="pill" href="#price-nobd" role="tab"
                                aria-controls="price-nobd" aria-selected="false" tabindex="-1">Price</a> --}}

                            <a class="nav-link {{ session('activeTab') == 'policy' ? 'active' : '' }} "
                                id="policy-tab-nobd" data-bs-toggle="pill" href="#policy-nobd" role="tab"
                                aria-controls="policy-nobd" aria-selected="false" tabindex="-1">Policy</a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="v-pills-without-border-tabContent">
                    <div class="tab-pane fade {{ session('activeTab') == 'overview' ? 'show active' : '' }}"
                        id="overview-nobd" role="tabpanel" aria-labelledby="overview-tab-nobd">

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Overview</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="display table table-striped table-hover basic-datatables"
                                                    role="grid" aria-describedby="add-row_info">
                                                    <thead class="">
                                                        <tr role="row">
                                                            <th class="text-center">Sl</th>
                                                            <th class="text-start">Package Name</th>
                                                            <th class="text-center">Description</th>
                                                            <th class="text-center">Duration</th>
                                                            <th class="text-center">Start Point</th>
                                                            <th class="text-center">End Point</th>
                                                            <th class="text-center">Route</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1 text-center">1</td>
                                                            <td class="text-start">{{ $package->package_name}}</td>
                                                            <td class="text-start">{!! $package->description!!}</td>
                                                            <td class="text-start">{{ $package->duration}}</td>
                                                            <td class="text-start">{{ $package->start_point}}</td>
                                                            <td class="text-start">{{ $package->end_point}}</td>
                                                            <td class="text-start">{{ $package->route}}</td>

                                                            <td class="text-center">
                                                                <div class="form-button-action">
                                                                    <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_edit_overview_{{ $package->id }}">
                                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            @include('admin.tour-package.hajj-package.package-info.overview')
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade {{ session('activeTab') == 'video' ? 'show active' : '' }}"
                        id="video-nobd" role="tabpanel" aria-labelledby="video-tab-nobd">

                        @include('admin.tour-package.hajj-package.package-info.video.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Video</h3>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_video_{{ $package->id }}">Add Video</a>
                                </div>



                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Video</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->video as $video)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>
                                                        @if($video->video)
                                                            <video src="{{ asset('storage/' . $video->video) }}" width="96" height="72" controls autoplay></video>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <td>
                                                            @if($video->status)
                                                            <a href="{{ route('hajj-video.toggle', $video->id) }}"
                                                                class="badge badge-success">Active</a>
                                                            @else
                                                            <a href="{{ route('hajj-video.toggle', $video->id) }}"
                                                                class="badge badge-danger">Inactive</a>
                                                            @endif
                                                        </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_video_{{ $video->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                        id="delete-package-link"
                                                        data-package-id="{{ $video->id }}">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>

                                                    <form id="delete-package-form-{{ $video->id }}"
                                                        action="{{ route('hajj-video.destroy', $video->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                        @include('admin.tour-package.hajj-package.package-info.video.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'activities' ? 'show active' : '' }}"
                        id="activities-nobd" role="tabpanel" aria-labelledby="activities-tab-nobd">

                        @include('admin.tour-package.hajj-package.package-info.activity.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Activity</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_activity_{{ $package->id }}">Add Activity</a>

                                </div>



                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>Location</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->activity as $activity)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $activity->title }}</td>
                                                    <td>{{ $activity->location }}</td>
                                                    <td>{!! $activity->description !!}</td>
                                                    <td>
                                                        @if($activity->image)
                                                        <img src="{{ asset('storage/' . $activity->image) }}"
                                                            width="96px" height="72px" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($activity->status)
                                                        <a href="{{ route('hajj-activity.toggle', $activity->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hajj-activity.toggle', $activity->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_activity_{{ $activity->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $activity->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $activity->id }}"
                                                            action="{{ route('hajj-activity.destroy', $activity->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.activity.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'hotel' ? 'show active' : '' }}"
                    id="hotel-nobd" role="tabpanel" aria-labelledby="hotel-tab-nobd">

                        @include('admin.tour-package.hajj-package.package-info.hotel.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Hotel</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_hotel_{{ $package->id }}">Add Hotel</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Hotel Name</th>
                                                    <th>Location</th>
                                                    <th>Details</th>
                                                    <th>Rating</th>
                                                    <th>Number Of Review</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->hotel as $hotel)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $hotel->hotel_name }}</td>
                                                    <td>{{ $hotel->location }}</td>
                                                    <td>{!! $hotel->details !!}</td>
                                                    <td>{{ $hotel->rating }}</td>
                                                    <td>{{ $hotel->number_review }}</td>
                                                    <td>
                                                        @if($hotel->image)
                                                        <img src="{{ asset('storage/' . $hotel->image) }}"
                                                            width="96px" height="72px" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($hotel->status)
                                                        <a href="{{ route('hotel.toggle', $hotel->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hotel.toggle', $hotel->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_hotel_{{ $hotel->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $hotel->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $hotel->id }}"
                                                            action="{{ route('hotel.destroy', $hotel->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.hotel.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'itinerary' ? 'show active' : '' }}"
                        id="itinerary-nobd" role="tabpanel" aria-labelledby="itinerary-tab-nobd">

                        @include('admin.tour-package.hajj-package.package-info.itinerary.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Itinerary</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_itinerary_{{ $package->id }}">Add Itinerary</a>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Itinerary Days</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->itinerary as $itinerary)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $itinerary->itinerary_days }}</td>
                                                    <td>{!! $itinerary->description !!}</td>

                                                    <td>
                                                        @if($itinerary->status)
                                                        <a href="{{ route('hajj-itinerary.toggle', $itinerary->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hajj-itinerary.toggle', $itinerary->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_itinerary_{{ $itinerary->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $itinerary->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $itinerary->id }}"
                                                            action="{{ route('hajj-itinerary.destroy', $itinerary->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.itinerary.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'inclusions' ? 'show active' : '' }}"
                        id="inclusions-nobd" role="tabpanel" aria-labelledby="inclusions-tab-nobd">
                        @include('admin.tour-package.hajj-package.package-info.inclusion.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Inclusion</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_inclusion_{{ $package->id }}">Add Inclusion</a>

                                </div>



                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->inclusion as $inclusion)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $inclusion->title }}</td>

                                                    <td>
                                                        @if($inclusion->status)
                                                        <a href="{{ route('hajj-inclusion.toggle', $inclusion->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hajj-inclusion.toggle', $inclusion->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_inclusion_{{ $inclusion->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $inclusion->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $inclusion->id }}"
                                                            action="{{ route('hajj-inclusion.destroy', $inclusion->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.inclusion.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'exclusions' ? 'show active' : '' }}"
                        id="exclusions-nobd" role="tabpanel" aria-labelledby="exclusions-tab-nobd">

                        @include('admin.tour-package.hajj-package.package-info.exclusion.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Exclusion</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_exclusion_{{ $package->id }}">Add Exclusion</a>

                                </div>



                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->exclusion as $exclusion)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $exclusion->title }}</td>

                                                    <td>
                                                        @if($exclusion->status)
                                                        <a href="{{ route('hajj-exclusion.toggle', $exclusion->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hajj-exclusion.toggle', $exclusion->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_exclusion_{{ $exclusion->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $exclusion->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $exclusion->id }}"
                                                            action="{{ route('hajj-exclusion.destroy', $exclusion->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.exclusion.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'price ' ? 'show active' : '' }}"
                        id="price -nobd" role="tabpanel" aria-labelledby="price -tab-nobd">
                        {{-- @include('admin.system-configuration.additional-setup.price .create-modal') --}}
                        <div class="card">
                            <div class="card-header project-details-card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="project-details-card-header-title"><i
                                            class='bx bx-edit bx-tada'></i>Project
                                        Status</h4>
                                    <a href="#" class="purchase-button ms-auto" data-bs-toggle="modal"
                                        data-bs-target="#Modal-price ">
                                        <i class='bx bx-message-square-add bx-tada'></i> Add Project Status</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="display table table-striped table-hover basic-datatables"
                                                    role="grid" aria-describedby="add-row_info">
                                                    <thead class="">
                                                        <tr role="row">
                                                            <th class="text-center">Sl</th>
                                                            <th class="text-start">Project Status</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($project_statuses as $project_status)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1 text-center">{{
                                                                $loop->iteration }}</td>
                                                            <td class="text-start">{{ $project_status->name }}
                                                            </td>
                                                            <td class="text-center">
                                                                <form
                                                                    action="{{ route('hajj-price .toggle', $project_status->id) }}"
                                                                    method="POST" style="display: inline;">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn {{ $project_status->status == 1 ? 'status-box-1' : 'status-box-1' }}">
                                                                        {{ $project_status->status == 1 ?
                                                                        'Active' : 'Inactive' }}
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-button-action">
                                                                    <button class="btn btn-primary btn-link btn-lg me-2"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#Modal-price -edit-{{ $project_status->id }}">
                                                                        <i class='bx bxs-edit bx-tada'></i>
                                                                    </button>

                                                                    <a href="#" id="delete-project_status-link"
                                                                        title="delete"
                                                                        class="btn btn-link btn-danger btn-lg"
                                                                        data-project_status-id="{{ $project_status->id }}">
                                                                        <i class='bx bx-trash-alt'></i>
                                                                    </a>

                                                                    <form
                                                                        id="delete-project_status-form-{{ $project_status->id }}"
                                                                        action="{{ route('hajj-price .destroy', $project_status->id) }}"
                                                                        method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            @include('admin.system-configuration.additional-setup.price
                                                            .edit-modal')
                                                        </tr>
                                                        @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ session('activeTab') == 'policy' ? 'show active' : '' }}"
                        id="policy-nobd" role="tabpanel" aria-labelledby="policy-tab-nobd">
                        @include('admin.tour-package.hajj-package.package-info.policy.create-modal')
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title">
                                    <h3>Package Policy</h3>
                                </div>
                                <div class="d-flex justify-content-end">

                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_policy_{{ $package->id }}">Add Policy</a>

                                </div>



                            </div>
                            <div class="card-body">
                                <div class=" row rounded border border-secondary p-5">
                                    <div class="table-responsive p-5">
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-muted">
                                                    <th>Sl</th>
                                                    <th>Policy</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($package->policy as $policy)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{!! $policy->description !!}</td>
                                                    <td>
                                                        @if($policy->status)
                                                        <a href="{{ route('hajj-policy.toggle', $policy->id) }}"
                                                            class="badge badge-success">Active</a>
                                                        @else
                                                        <a href="{{ route('hajj-policy.toggle', $policy->id) }}"
                                                            class="badge badge-danger">Inactive</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-light-primary m-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_policy_{{ $policy->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-danger m-2"
                                                            id="delete-package-link"
                                                            data-package-id="{{ $policy->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <form id="delete-package-form-{{ $policy->id }}"
                                                            action="{{ route('hajj-policy.destroy', $policy->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @include('admin.tour-package.hajj-package.package-info.policy.edit-modal')
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for all "Add Feature" buttons
    document.querySelectorAll('#addFeature').forEach(function (button) {
        button.addEventListener('click', function () {
            // Get the closest modal (if applicable)
            const modal = button.closest('.modal');
            const modalId = modal ? modal.id : null;
            const newFeatureSection = modal ? modal.querySelector('#newFeatureSection') : document.querySelector('#newFeatureSection');

            if (!newFeatureSection) return; // Ensure section exists before adding

            // Count the number of feature entries in this section
            const featureCounter = newFeatureSection.querySelectorAll('.feature-entry').length + 1;

            // Create a new feature entry
            const newFeatureEntry = document.createElement('div');
            newFeatureEntry.classList.add('row', 'feature-entry', 'mb-3');
            newFeatureEntry.id = `feature-entry-${modalId ? modalId + '-' : ''}${featureCounter}`;

            newFeatureEntry.innerHTML = `
                <div class="col-md-5">
                    <input class="form-control" type="text" name="feature_title[]" placeholder="Enter Feature">
                </div>
                <div class="col-md-5 image">
                    <input class="form-control edit_image" type="file" name="icons[]" accept="image/*">\
                     <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeFeatureEntry('${newFeatureEntry.id}')">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            `;

            // Append the new feature entry to the newFeatureSection
            newFeatureSection.appendChild(newFeatureEntry);
        });
    });
});

// Function to remove a feature entry
function removeFeatureEntry(id) {
    const featureEntry = document.getElementById(id);
    if (featureEntry) {
        featureEntry.remove();
    }
}


</script>

<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function () {
        const deleteLinks = document.querySelectorAll('[id^="delete-package-link"]');

        deleteLinks.forEach(function (deleteLink) {
            deleteLink.addEventListener('click', function (e) {
                e.preventDefault();
                const packageId = this.getAttribute('data-package-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this action!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-secondary'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, find the form and submit it
                        document.getElementById('delete-package-form-' + packageId)
                            .submit();
                    }
                });
            });
        });
    });

</script>
{{-- image preview --}}
<script>
    function handleImagePreview(edit_image, edit_image_preview) {
        $(edit_image).on('change', function () {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                $(edit_image_preview).attr('src', e.target.result).removeClass('d-none');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                $(edit_image_preview).addClass('d-none');
            }
        });
    }

    handleImagePreview('#edit_image', '#edit_image_preview');

</script>

@endpush
