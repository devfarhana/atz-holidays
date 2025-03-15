<div class="modal fade" id="kt_modal_images_{{ $package->id }}" class="images_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Images of {{$package->title}}</h2>
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
                <form action="{{ route('hajjimages.store', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("POST")

                    <div class="row p-5">
                        <input type="text" name="hajj_packages_id" id="" value="{{ $package->id }}" style="display: none">

                        <!-- Display Images with Delete Button -->
                        <div class="col-md-12 mb-7">
                            @foreach ($packageimages as $packageimage)
                                @if($packageimage->hajj_packages_id == $package->id)
                                    <div class="d-inline-block position-relative">
                                        <img src="{{ asset('storage/' . $packageimage->image) }}" width="150px" height="112px"
                                            alt="image" style="object-fit: cover;">
                                        <form action="{{ route('images.destroy', $packageimage->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="imagedelete position-absolute top-0 end-0 bg-light rounded-4">
                                                <i class="fa-solid fa-circle-xmark fs-2 text-danger"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="image" class="form-label">Add  Images</label>
                            <input type="file" class="form-control image-input" name="image[]" multiple>
                            <div class="d-flex flex-wrap gap-2 mt-3 image-preview"></div>
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
    $(document).ready(function() {

        // Ensure the image preview works when the modal is shown
        $('#kt_modal_images_{{ $package->id }}').on('shown.bs.modal', function() {
            const imageInput = $(this).find('.image-input');
            const previewContainer = $(this).find('.image-preview');

            // Clear previous previews
            previewContainer.html('');

            // Remove any existing change event listeners to avoid duplication
            imageInput.off('change');

            // Add the change event listener
            imageInput.on('change', handleImagePreview);
        });

        // Function to handle image preview
        function handleImagePreview(event) {
            const previewContainer = $(event.target).closest('.modal-content').find('.image-preview');
            previewContainer.html(''); // Clear previous previews

            const files = event.target.files;
            $.each(files, function(index, file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = $('<img>', {
                        src: e.target.result,
                        width: 96,
                        height: 72,
                        class: 'border'
                    });
                    previewContainer.append(img);
                };
                reader.readAsDataURL(file);
            }
        }
    });
    </script>
@endpush
