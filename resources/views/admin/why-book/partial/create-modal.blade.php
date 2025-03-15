<div class="modal fade" id="kt_modal_create_why_book" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Advertisement</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{ route('why-book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Title<span class=" text-danger">*</span></label>
                            <input type="text" class=" form-control" name="title" placeholder="Enter Title" required />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--  details -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Details</label>
                            <input type="text" class="form-control" name="details" placeholder="Enter Details" />
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- icon -->
                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Icon</label>
                            <input type="file" class="form-control" id="image" name="icon"  />
                            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror <br>
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

