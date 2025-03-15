<div class="modal fade" id="kt_modal_edit_slider_content_{{ $sliderContent->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Slider</h2>
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
                <form action="{{ route('content.update', $sliderContent->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $sliderContent->title) }}" placeholder="Enter title"/>
                        </div>

                        <!-- Sub Title -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" value="{{ old('sub_title', $sliderContent->sub_title) }}" placeholder="Enter sub-title"/>
                        </div>

                        <!-- Button Text -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Button Text</label>
                            <input type="text" class="form-control" name="button_text" value="{{ old('button_text', $sliderContent->button_text) }}" placeholder="Enter button text"/>
                        </div>

                        <!-- Button Url -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Button Url</label>
                            <input type="url" class="form-control" name="button_url" value="{{ old('button_url', $sliderContent->button_url) }}" placeholder="Enter button url"/>
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
