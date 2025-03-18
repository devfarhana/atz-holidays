@extends('layouts.admin')
@section('title','Teams')
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
                    <a href="#" class="text-muted text-hover-primary">Teams</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Manage Teams</li>
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
                        <h3>Team Page</h3>
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
                                        <td>{{ $teamPage->title }}</td>
                                        
                                        <td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-primary m-2" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit_team_page_{{ $teamPage->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            @include('admin.team.team-page-edit')
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
                        <h3>Teams Table</h3>
                    </div>
                     <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Member</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row border rounded border-secondary p-5">
                        <div class="table-responsive p-5">
                            <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-muted">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($team->image)
                                                <img src="{{ asset('storage/' . $team->image) }}" width="70px" height="70px" alt="image"
                                                class="rounded-circle me-2">
                                                @endif
                                                <span>{{ $team->name }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $team->position }}</td>
                                        <!-- Status -->
                                        <td>
                                            @if($team->status)
                                                <a href="{{ route('team.toggle-status', $team->id) }}" class="badge badge-success">Active</a>
                                            @else
                                                <a href="{{ route('team.toggle-status', $team->id) }}" class="badge badge-danger">Inactive</a>
                                            @endif
                                        </td>
                                        <!-- Action Buttons -->
                                        <td>
                                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm fw-bold btn-primary edit"
                                                data-bs-toggle="modal" data-bs-target="#editModal" data-team-id="{{ $team->id }}">Edit</a>
                                            <a href="#" class="btn btn-sm fw-bold btn-danger delete" data-team-id="{{ $team->id }}">Delete</a>
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
@include('admin.team.edit')
@include('admin.team.create')
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            var team_id = $(this).data('team-id');
            $.ajax({
                url: '/dashboard/teams/'+ team_id +'/edit/',
                type: 'GET',
                success: function(response) {
                    $('#editForm').find('input[name="team_id"]').val(team_id);
                    $('#editForm').find('input[name="name"]').val(response.name);
                    $('#editForm').find('input[name="position"]').val(response.position);
                    // $('#editForm').find('textarea[name="description"]').text(response.description);
                    $('#editForm').find('textarea[name="description"]').summernote('code', response.description);
                    if (response.image) {
                        $('#editForm').find('img[id="image_preview"]').attr('src', '/storage/' + response.image );
                    }
                }
            });
        });

        $(document).on('submit', '#editForm', function(e) {
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(this);
            var id = form.find('input[name="team_id"]').val();
            var method = form.find('input[name="_method"]').val();
            var token = form.find('input[name="_token"]').val();
            console.log(formData);

            $.ajax({
                url: 'teams/' + id,
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#editModal').modal('hide');
                    location.reload();
                }
            });

        })


        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var team_id = $(this).data('team-id');
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
                    window.location.href = '/dashboard/teams/delete/' + team_id;
                }
            });

        });
    })
</script>
 {{-- image preview --}}
 <script>
        function handleImagePreview(edit_image, edit_image_preview) {
            $(edit_image).on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
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
