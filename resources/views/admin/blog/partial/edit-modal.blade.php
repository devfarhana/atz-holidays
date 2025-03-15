<div class="modal fade" id="kt_modal_edit_blog-{{ $blog->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Blog</h2>
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
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $blog->title) }}" placeholder="Enter title"/>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Category Select input -->
                        <div class="col-md-6 mb-7">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category_id">
                                @foreach($blogCategories as $blogCategory)
                                        <option value="{{ $blogCategory->id }}"
                                            {{ old('blog_category_id', $blog->blog_category_id) == $blogCategory->id ? 'selected' : '' }}>
                                            {{ $blogCategory->name }}
                                        </option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-7 col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" value="{{ old('date', $blog->date) }}" placeholder="Enter Date" />
                            @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-7 col-md-6">
                            <label class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}" placeholder="Enter Author" />
                            @error('author') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Author Details</label>
                            <textarea name="author_details" id="" cols="30" rows="5" class="form-control" value="{{ old('author_details', $blog->author_details) }}" >{{$blog->author_details}}</textarea>
                            @error('author_details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Tags</label>
                            <input type="text" name="tags" class="form-control" value="{{ old('tags', $blog->tags) }}" placeholder="Enter Tags" />
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
                            <textarea type="text" class="form-control description" name="description">{{ old('description', $blog->description) }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3 image">
                            <label for="edit_image" class="form-label">Blog Image</label>
                            <input type="file" class="form-control mb-3 edit_image" name="blog_image" accept="image/*">
                            @if($blog->blog_image)
                            <img class="edit_image_preview mt-2" id="edit_image_preview" src="{{ asset('storage/' . $blog->blog_image) }}" alt="Old Image" width="96" height="72">
                            @else
                            <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3 image">
                            <label for="edit_image" class="form-label"> Author Image</label>
                            <input type="file" class="form-control mb-3 edit_image" name="author_image" accept="image/*">
                            @if($blog->author_image)
                            <img class="edit_image_preview mt-2" id="edit_image_preview" src="{{ asset('storage/' . $blog->authorg_image) }}" alt="Old Image" width="96" height="72">
                            @else
                            <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                            @endif
                        </div>
                        @if ($blog->images->isNotEmpty())
                        <div class="col-md-12 mb-7">
                            <label for="existing_images" class="form-label">Existing Additional Images</label>
                            <div class="d-flex flex-wrap mt-5 gap-2">

                                @foreach ($blog->images as $image)
                                <div class="position-relative">
                                    <img class="border" src="{{ asset('storage/' . $image->additional_image) }}"
                                        width="96px" height="72px" alt="image">
                                    <button type="button"
                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-image-btn"
                                        data-id="{{ $image->id }}" style="transform: translate(50%, -50%)">x</button>
                                    <input type="hidden" name="remove_images[]" value="{{ $image->id }}"
                                        class="remove-image-input" disabled>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- New Additional Images -->
                        <div class="col-md-12 mb-7">
                            <label for="additional_image" class="form-label">Add Additional Images</label>
                            <input type="file" class="form-control mb-5 additional_image-{{ $blog->id }}"
                                name="additional_image[]" multiple>
                            <div class="d-flex flex-wrap gap-2 mt-3 additional_image_preview-{{ $blog->id }}">
                            </div>
                        </div>

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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const additionalImageInput = document.querySelector('.additional_image-{{ $blog->id }}');
            const additionalImagePreviewContainer = document.querySelector('.additional_image_preview-{{ $blog->id }}');

            if (additionalImageInput && additionalImagePreviewContainer) {
                additionalImageInput.addEventListener('change', function () {
                    // Clear existing previews
                    additionalImagePreviewContainer.innerHTML = '';

                    // Loop through all selected files
                    Array.from(this.files).forEach(file => {
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
                    });
                });
            }
        });
    </script>

@endpush
