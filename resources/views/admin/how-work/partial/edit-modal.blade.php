<div class="modal fade" id="kt_modal_edit_keypoint_{{ $keypoint->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit How It Works Keypoint</h2>
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
                <form action="{{ route('how-work.update', $keypoint->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Keypoint Title</label>
                            <input type="text" class=" form-control" name="title"  value="{{ old('title', $keypoint->title) }}"  />
                        </div>
                        <!--Details -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Details</label>
                            <textarea name="details" class="form-control" id="" cols="10" rows="5"value="{{ old('details', $keypoint->details) }}" >{{$keypoint->details}}</textarea>
                        </div>

                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Icon</label>
                            <input type="file" class="form-control mb-4 edit_image" name="icon_img"
                                onchange="previewImage(event)">

                            @if($keypoint->icon_img)
                            <!-- Show the preview image if Icon exists -->
                            <img class="mt-2 edit_image_preview" src="{{ asset('storage/' . $keypoint->icon_img) }}"
                                width="96px" height="72px" alt="Icon">
                            @else
                            <!-- Hide the prev edit_image_previewiew image if no Icon exists -->
                            <img class=" edit_image_preview" width="96px" height="72px" alt="Icon">
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


@endpush
