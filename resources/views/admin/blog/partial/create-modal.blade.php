<div class="modal fade" id="kt_modal_create_blog" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Blog</h2>
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
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Title<span class=" text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title" required/>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                         <!-- Category Select input -->
                         <div class="col-md-6 mb-7">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category_id">
                                <option value="">Select a category</option>
                                @foreach($blogCategories as $blogCategory)
                                    @if($blogCategory->name != 'All')
                                        <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('blog_category_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" placeholder="Enter Date" />
                            @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-7 col-md-6">
                            <label class="form-label" >Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Enter Author" />
                            @error('author') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label" >Author Details</label>
                           <textarea name="author_details" id="" class="form-control" cols="10" rows="5" placeholder="Write about author"></textarea>
                            @error('author_details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Tags</label>
                            <input type="text" name="tags" class="form-control" placeholder="Enter Tags" id="tags-input" oninput="formatTags(this)" />
                            @error('tags') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <script>
                            function formatTags(input) {
                                // Replace spaces with commas in the input value
                                input.value = input.value.replace(/\s+/g, ',');
                            }
                        </script>

                        <div class="col-md-12 mb-7">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control description" name="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                          <!-- Image input -->
                          <div class="col-md-6 mb-7 image">
                            <label for="image" class="form-label"> Blog Image</label>
                            <input type="file" class="form-control mb-5" id="image" name="blog_image">
                            @error('blog_image') <span class="text-danger">{{ $message }}</span> @enderror
                            <br><img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
                        </div>
                          <!-- Image input -->
                          <div class="col-md-6 mb-7 image">
                            <label for="image" class="form-label"> Author Image</label>
                            <input type="file" class="form-control mb-5" id="image" name="author_image">
                            @error('author_image') <span class="text-danger">{{ $message }}</span> @enderror
                            <br><img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
                        </div>
                          <!-- Additional Images -->
                          <div class="col-md-12 mb-7">
                            <label for="additional_image" class="form-label">Additional Images</label>
                            <input type="file" class="form-control mb-5" id="additional_image" name="additional_image[]"
                                multiple>
                            @error('additional_image') <span class="text-danger">{{ $message }}</span> @enderror <br>
                            <div id="additional_image_preview" class="d-flex flex-wrap gap-2 mt-3"></div>
                        </div>


                        <div>
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
    <script>
        // Additional images preview
        const additionalImageInput = document.getElementById('additional_image');
        const additionalImagePreviewContainer = document.getElementById('additional_image_preview');

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

