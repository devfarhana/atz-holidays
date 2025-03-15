<div class="modal fade" id="kt_modal_images_service_{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Images of {{$service->title}}</h2>
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
                <form action="{{ route('service-images.store', $service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method("POST")

                    <div class="row p-5">
                        <input type="text" name="service_id" id="" value="{{ $service->id }}" style="display: none">

                        <!-- Display Images with Delete Button -->
                        <div class="col-md-12 mb-7">
                            @foreach ($serviceimages as $serviceimage)
                            @if($serviceimage->service_id == $service->id)
                            <div class="d-inline-block position-relative">
                                <!-- Increased Image Size -->
                                <img src="{{ asset('storage/' . $serviceimage->image) }}" width="150px" height="112px"
                                    alt="image" style="object-fit: cover;">
                                <a class="imagedelete position-absolute top-0 end-0 bg-light rounded-4"
                                    data-service-imageid="{{ $serviceimage->id }}"
                                    href="{{ route('service-images.destroy', $serviceimage->id) }}">
                                    <i class="fa-solid fa-circle-xmark fs-2 text-danger"></i>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <!-- Add Image -->
                        <div class="col-md-6 mb-7">
                            <label for="image" class="form-label">Add Image</label>
                            <input type="file" class="form-control mb-4" id="add_image" name="image[]" multiple>
                            <div id="add_image_preview" class="d-flex flex-wrap gap-2 mt-3"></div>
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
    // Additional images preview
    const additionalImageInput = document.getElementById('add_image');
    const additionalImagePreviewContainer = document.getElementById('add_image_preview');

    additionalImageInput.addEventListener('change', function () {
        // Clear existing previews
        additionalImagePreviewContainer.innerHTML = '';

        // Loop through all selected files
        for (let i = 0; i < this.files.length; i++) {
            const file = this.files[i];
            if (file) {
                const reader = new FileReader();
                const imgElement = document.createElement('img');
                imgElement.className = 'border';
                imgElement.style.width = '96px';
                imgElement.style.height = '72px';
                imgElement.style.marginRight = '10px';

                reader.onload = function (e) {
                    imgElement.src = e.target.result;
                };

                reader.readAsDataURL(file);
                additionalImagePreviewContainer.appendChild(imgElement);
            }
        }
    });
</script>
@endpush
