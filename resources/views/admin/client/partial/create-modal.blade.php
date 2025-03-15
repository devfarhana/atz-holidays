<div class="modal fade" id="kt_modal_create_client" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Client</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <!-- Title -->
                        <div class="mb-7 col-6">
                            <label class="form-label">Organaization/Company Name<span class=" text-danger">*</span></label>
                            <input type="text" class=" form-control" name="name" placeholder="Enter Name" required />
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                         <!--  URL -->
                         <div class="mb-7 col-6">
                            <label class="form-label">Website Url(Optional)</label>
                            <input type="url" class="form-control" name="url" placeholder="Enter URL" />
                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Image -->
                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Organaization/Company logo</label>
                            <input type="file" class="form-control" id="image" name="logo" />
                            @error('logo') <span class="text-danger">{{ $message }}</span> @enderror <br>
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

