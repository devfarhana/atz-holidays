<div class="modal fade" id="kt_modal_create_destination" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Destination</h2>
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
                <form action="{{ route('popular-destination.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Destination Name<span class=" text-danger">*</span></label>
                            <input type="text" class="form-control" name="destination_name" placeholder="Enter Destination Name" required/>
                            @error('destination_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                         <!-- Country Select input -->
                         <div class="col-md-6 mb-7">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-control" id="country" name="country_id">
                                <option value="">Select a Country</option>
                                @foreach ($destinationcountries as $countries)
                                    <option value="{{ $countries->id }}">{{ $countries->country_name }}</option>
                                @endforeach
                            </select>
                            @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                          <!-- Image input -->
                          <div class="col-md-6 mb-7 image">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-5" id="image" name="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            <br><img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
                        </div>
                          <!-- Image input -->



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
        $('.description').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
    </script>

@endpush

