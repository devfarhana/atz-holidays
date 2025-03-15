<div class="modal fade" id="kt_modal_create_aboutKeypoint" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-md">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create About Keypoint</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{ route('aboutkeypoint.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Title<span class=" text-danger">*</span></label>
                            <input type="text" class=" form-control" name="title" placeholder="Enter Title" required />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--  Details -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Details</label>
                            <textarea class="form-control" name="details" id="details" cols="10" rows="5" placeholder="Write here..."></textarea>
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Save</button>
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

