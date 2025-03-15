<!-- Modal -->
<div class="modal fade" id="kt_modal_edit_video_{{ $video->id }}" tabindex="-1" aria-hidden="true">
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
                <!-- Add New Video Form -->
                <form action="{{ route('video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-12">
                            <div id="video_input_edit" class="col-md-12 mb-7">
                                <label class="form-label">Video</label>
                                <input type="file" name="video" class="form-control mb-4">
                                @error('video') <span class="text-danger">{{ $message }}</span> @enderror
                                @if($video->video)
                                    <video src="{{ asset('storage/' . $video->video) }}" width="96" height="72" controls autoplay></video>
                                @endif
                            </div>
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
