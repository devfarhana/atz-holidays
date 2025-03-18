<div class="modal fade" id="kt_modal_edit_hotel_{{ $hotel->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Hotel</h2>
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
                <form action="{{ route('packagehotel.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Hotel Name </label>
                            <input type="text" name="hotel_name" value="{{ $hotel->hotel_name }}" class="form-control">
                            @error('hotel_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-7 col-12">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" value="{{ $hotel->location }}" class="form-control">
                            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- description-->
                        <div class="mb-7 col-12">
                            <label class="form-label">Details</label>
                            <textarea type="text" class="form-control description" name="details">{{ old('details', $hotel->details) }}</textarea>
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-7 col-6">
                            <label class="form-label">Rating</label>
                            <input type="text" name="rating" value="{{ $hotel->rating }}" class="form-control">
                            @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-7 col-6">
                            <label class="form-label">Number Of Reviews</label>
                            <input type="text" name="number_review" value="{{ $hotel->number_review }}" class="form-control">
                            @error('number_review') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Image -->
                        <div class=" col-md-6 mb-7 image">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-4 edit_image" name="image">
                            @if($hotel->image)
                                <img class="edit_image_preview" src="{{ asset('storage/' . $hotel->image) }}" width="96px" height="72px" alt="image">
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


</script>
{{-- image preview --}}
<script>
    $(document).ready(function () {
   function handleImagePreview(inputClass, previewClass) {
       $(document).on('change', inputClass, function () {
           let file = this.files[0];
           let reader = new FileReader();
           let preview = $(this).closest('.image').find(previewClass); // Find preview in the same container

           if (file) {
               reader.onload = function (e) {
                   preview.attr('src', e.target.result).removeClass('d-none');
               };
               reader.readAsDataURL(file);
           } else {
               preview.addClass('d-none');
           }
       });
   }

       handleImagePreview('#image', '#image_preview');
       handleImagePreview('#breadcrumb_image', '#breadcrumb_image_preview');
       handleImagePreview('.edit_image', '.edit_image_preview');
       handleImagePreview('.edit_logo', '.edit_logo_preview');
       handleImagePreview('#add_image', '#add_image_preview');
       handleImagePreview('#logo', '#logo_preview');
       handleImagePreview('#edit_logo', '#edit_logo_preview');
       handleImagePreview('#alternative_image', '#alternative_image_preview');
       handleImagePreview('#edit_alternative_image', '#edit_alternative_image_preview');
       handleImagePreview('#about_img_1', '#about_img_1_preview');
       handleImagePreview('#about_img_2', '#about_img_2_preview');
       handleImagePreview('#about_img_3', '#about_img_3_preview');
       handleImagePreview('#about_img_4', '#about_img_4_preview');
       handleImagePreview('#image_2', '#image_2_preview');
       handleImagePreview('#favicon', '#favicon_preview');
       handleImagePreview('#system_logo', '#system_logo_preview');


       });
</script>

@endpush
