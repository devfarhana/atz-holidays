<div class="modal fade" id="kt_modal_edit_overview_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Overviee</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{ route('overview.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label" for="floatingInput">Tour Package Name</label>
                            <input type="text" name="package_name" class="form-control"
                                placeholder="Enter Tour Package Name" value="{{$package->package_name}}" />
                            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-12 mb-7">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control description"
                                name="description">{{ old('description', $package->description) }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label" for="floatingInput">Duration</label>
                            <input type="text" name="duration" class="form-control" value="{{$package->duration}}"
                                placeholder="Enter Duration" />
                            @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label" for="floatingInput">Start Point</label>
                            <input type="text" name="start_point" class="form-control" value="{{$package->start_point}}"
                                placeholder="Enter Start Point" />
                            @error('start_point') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label" for="floatingInput">End Point</label>
                            <input type="text" name="end_point" class="form-control" value="{{$package->end_point}}"
                                placeholder="Enter Start Point" />
                            @error('end_point') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label" for="floatingInput">Route</label>
                            <input type="text" name="route" class="form-control" value="{{$package->route}}"
                                placeholder="Enter Route" />
                            @error('route') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

@push('script')
<script>
    $(document).ready(function () {
        $('.description').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
</script>


@endpush
