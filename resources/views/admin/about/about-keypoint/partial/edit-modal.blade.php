<div class="modal fade" id="kt_modal_edit_aboutKeypoint_{{ $aboutKeypoint->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit About Keypoint</h2>
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
                <!-- Update Form -->
                <form action="{{ route('aboutkeypoint.update', $aboutKeypoint->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <d class="row p-5">
                        <!-- Name -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $aboutKeypoint->title) }}" placeholder="Enter Title"/>
                        </div>

                        <!--Url -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Details</label>
                            <textarea class="form-control" name="details" id="" cols="10" rows="5" value="{{ old('details', $aboutKeypoint->details) }}">{{  $aboutKeypoint->details }}</textarea>
                        </div>
                        <!-- Submit Button -->
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
