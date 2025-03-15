<div class="modal fade" id="kt_modal_video_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <h2>Video of {{$package->package_name}}</h2>
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
                <form action="{{ route('hajj-video.store', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- New Video Upload -->
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Video<span class=" text-danger">*</span></label>
                            <input type="file" name="video" class="form-control" required />
                            @error('video') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="col-md-12 mb-4">
                        <label class="form-label">Video URL</label>
                            <input type="text" class="form-control" name="video_url" placeholder="Enter Video URL" />
                            @error('video_url') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    <button type="submit" class="btn btn-success">Add Video</button>
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
   document.addEventListener('DOMContentLoaded', function() {
    // Handle image removal using event delegation
    document.body.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-image-btn')) {
            const imageId = event.target.getAttribute('data-id');
            const input = event.target.nextElementSibling;

            // Toggle the input's disabled state
            input.disabled = !input.disabled;

            // Hide the image when it's marked for removal
            event.target.parentElement.style.display = input.disabled ? 'block' : 'none';
        }
    });

    // Ensure the image preview works when the modal is shown
    $('#kt_modal_images_{{ $package->id }}').on('shown.bs.modal', function () {
        const imageInput = this.querySelector('.image-input');
        const previewContainer = this.querySelector('.image-preview');

        // Clear previous previews
        previewContainer.innerHTML = '';

        // Remove any existing change event listeners to avoid duplication
        imageInput.removeEventListener('change', handleImagePreview);

        // Add the change event listener
        imageInput.addEventListener('change', handleImagePreview);
    });

    // Function to handle image preview
    function handleImagePreview(event) {
        const previewContainer = event.target.closest('.modal-content').querySelector('.image-preview');
        previewContainer.innerHTML = ''; // Clear previous previews

        Array.from(event.target.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.width = 96;
                img.height = 72;
                img.classList.add('border');
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
});
</script>
@endpush
