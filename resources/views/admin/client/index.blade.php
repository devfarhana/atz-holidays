@extends('layouts.admin')
@section('title')
    {{ $settings->system_name }} || Client
@endsection
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
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
                    <a href="index.html" class="text-muted text-hover-primary">Our Client</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Our Client</li>
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h3>Client Title</h3>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $clientTitle->title }}</td>
                                        <td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_client_title_{{ $clientTitle->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            @include('admin.client.partial.title-edit-modal')
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h3>Client Table</h3>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_client">Create Client</a>
                    </div>
                    @include('admin.client.partial.create-modal')
                </div>
                <div class="card-body">
                    <div class=" row rounded border border-secondary p-5">
                        <div class="table-responsive p-5">
                            <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-muted">
                                        <th>Sl</th>
                                        <th>Organaization/Company Name</th>
                                        <th>Website Url</th>
                                        <th>Organaization/Company Logo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ $client->url }}" target="_blank" class="me-3 text-primary text-decoration-none">
                                                    {{ $client->url }}
                                                </a>
                                                <form action="{{ route('client.showURL', $client->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="border-0 bg-transparent p-0">
                                                        <i class="fa-solid fa-toggle-{{ $client->show_url ? 'on' : 'off' }}
                                                            text-{{ $client->show_url ? 'success' : 'danger' }} fs-4"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            @if($client->logo)
                                            <img src="{{ asset('storage/' . $client->logo) }}" width="96px"
                                                height="72px" alt="logo">
                                            @endif
                                        </td>
                                        <td>
                                            @if($client->status)
                                            <a href="{{ route('client.toggle-status', $client->id) }}"
                                                class="badge badge-success">Active</a>
                                            @else
                                            <a href="{{ route('client.toggle-status', $client->id) }}"
                                                class="badge badge-danger">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_client_{{ $client->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-light-danger m-2" id="delete-client-link"
                                                data-client-id="{{ $client->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                            <form id="delete-client-form-{{ $client->id }}"
                                                action="{{ route('client.destroy', $client->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            @include('admin.client.partial.edit-modal')
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
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
@push('script')
<script>
    // Use event delegation to handle click events for all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('[id^="delete-client-link"]');

        deleteLinks.forEach(function(deleteLink) {
            deleteLink.addEventListener('click', function(e) {
                e.preventDefault();
                const clientId = this.getAttribute('data-client-id');
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
                        document.getElementById('delete-client-form-' + clientId).submit();
                    }
                });
            });
        });
    });
</script>

@endpush
