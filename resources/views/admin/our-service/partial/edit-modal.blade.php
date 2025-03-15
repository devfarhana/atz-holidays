<div class="modal fade" id="kt_modal_edit_service_{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit service</h2>
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
                <form action="{{ route('our-service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $service->title) }}" placeholder="Enter title"/>
                        </div>

                        <!-- description-->
                        <div class="mb-7 col-12">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control description" name="description">{{ old('description', $service->description) }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Image -->
                        <div class=" col-md-6 mb-7 image">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-4 edit_image" name="image">
                            @if($service->image)
                                <img class="edit_image_preview" src="{{ asset('storage/' . $service->image) }}" width="96px" height="72px" alt="image">
                            @endif
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
