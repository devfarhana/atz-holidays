<div class="modal fade" id="kt_modal_edit_team_page_{{ $teamPage->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-md">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Team Page</h2>
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
                <form action="{{ route('team-page.update', $teamPage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $teamPage->title) }}" placeholder="Enter Title" />
                        </div>
                        <div class="mb-7 col-12 image">
                            <label class="form-label">Banner Image</label>
                            <input type="file" class="form-control mb-3 edit_image" name="banner_img" accept="image/*">
                            @if($teamPage->banner_img)
                            <img class="edit_image_preview mt-2" id="edit_image_preview" src="{{ asset('storage/' . $teamPage->banner_img) }}" alt="Old Image" width="96" height="72">
                            @else
                            <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
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
