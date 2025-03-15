<div class="modal fade" id="kt_modal_edit_privacy_{{ $privacy->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Privacy & Policy</h2>
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
                <form action="{{ route('privacy-policy.update', $privacy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                      <!-- Title -->
                      <div class=" mb-7 col-12">
                        <label class="form-label">Title</label>
                        <input type="text" class=" form-control" name="title"  value="{{ old('title', $privacy->title) }}"  />
                    </div>
                    <!--Details -->
                    <div class=" mb-7 col-12">
                        <label class="form-label">Description</label>
                        <textarea type="text" class="form-control description" name="description">{{ old('description', $privacy->description) }}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
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
