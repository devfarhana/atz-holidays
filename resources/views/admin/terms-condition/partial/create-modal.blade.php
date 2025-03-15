<div class="modal fade" id="kt_modal_create_term" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Terms & Condition</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="{{ route('terms-condition.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- TITLE -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Title<span class=" text-danger">*</span></label>
                            <input type="text" class=" form-control" name="title" placeholder="Enter Title" required />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--  Details -->
                        <div class="mb-7 col-12">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control description" name="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
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
