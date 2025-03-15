<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Member</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <input type="hidden" id="team_id" name="team_id">
                        <!-- Title -->
                        <div class="mb-7 col-6">
                            <label class="form-label">Name</label>
                            <input type="text" class=" form-control" name="name" placeholder="Enter name" required />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Sub Title -->
                        <div class="mb-7 col-6">
                            <label class="form-label">Position</label>
                            <input type="text" class="form-control" name="position" placeholder="Enter Position" required />
                            @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Image -->
                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" />
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror <br>
                            <img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">

                        </div>
                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
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
        $('.summerNote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
</script>
@endpush
