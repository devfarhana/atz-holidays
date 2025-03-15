<div class="modal fade" id="kt_modal_create_keypoint" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create How It Works Keypoint</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{route('how-work.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <!-- Title -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Keypoint Title<span class=" text-danger">*</span></label>
                            <input type="text" class=" form-control" name="title" placeholder="Enter Keypoint Title" required />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                         <!--  Details -->
                         <div class="mb-7 col-12">
                            <label class="form-label">Details</label>
                            <textarea name="details" class="form-control" id="" cols="10" rows="5" placeholder="Write Here..."></textarea>
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Image -->
                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Icon</label>
                            <input type="file" class="form-control" id="image" name="icon_img" />
                            @error('icon_img') <span class="text-danger">{{ $message }}</span> @enderror <br>
                            <img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
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
@push('script')


@endpush

