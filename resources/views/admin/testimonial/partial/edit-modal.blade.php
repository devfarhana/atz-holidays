<div class="modal fade" id="kt_modal_edit_testimonial-{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Testimonial</h2>
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
                <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <div class="mb-7 col-md-6">
                            <label class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $testimonial->name) }}" placeholder="Enter name"/>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{ old('designation', $testimonial->designation) }}" placeholder="Enter Designation"/>
                            @error('designation') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" value="{{ old('country', $testimonial->country) }}" placeholder="Enter Country"/>
                            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $testimonial->title) }}" placeholder="Enter title"/>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <div class="col-md-12 mb-7">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control description" name="description">{{ old('description', $testimonial->description) }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3 image">
                            <label for="edit_image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-3 edit_image" name="image" accept="image/*">
                            @if($testimonial->image)
                            <img class="edit_image_preview mt-2" id="edit_image_preview" src="{{ asset('storage/' . $testimonial->image) }}" alt="Old Image" width="96" height="72">
                            @else
                            <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                            @endif
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
