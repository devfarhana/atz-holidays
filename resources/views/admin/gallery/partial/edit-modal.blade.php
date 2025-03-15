<div class="modal fade" id="kt_modal_edit_gallery-{{ $gallery->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Gallery</h2>
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
            <div class="modal-body">
                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Title input -->
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $gallery->title) }}" placeholder="Enter title"/>
                        </div>
                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Image</label>
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            <br>
                            <input type="file" class="form-control mb-4 edit_image" id="" name="image">
                            @if($gallery->image)
                                <img class="edit_image_preview" src="{{ asset('storage/' . $gallery->image) }}" width="96px" height="72px" alt="image">
                            @endif
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

