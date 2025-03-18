<div class="modal fade" id="kt_modal_hotel_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <h2>Hotel of {{$package->package_name}}</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{ route('hotel.store', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="floatingInput">Hotel Name <span class="text-danger">*</span></label>
                            <input type="text" name="hotel_name" class="form-control" placeholder="Enter Hotel Name" required />
                            @error('hotel_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="floatingInput">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Enter Location" />
                            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="floatingInput">Details</label>
                            <textarea class="form-control summerNote" name="details" cols="30" rows="10"></textarea>
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="floatingInput">Rating</label>
                            <input type="text" name="rating" class="form-control" placeholder="Enter Rating" />
                            @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="floatingInput">Number Of Reviews</label>
                            <input type="text" name="number_review" class="form-control" placeholder="Enter Number Of Reviews" />
                            @error('number_review') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                          <!-- Image input -->
                          <div class="col-md-12 mb-3 image">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-5" id="image" name="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            <br><img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
                        </div>
                        <div>
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
<script>
    $(document).ready(function () {
        $('.summerNote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
</script>
@endpush
