<div class="modal fade" id="kt_modal_activity_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <h2>Activity of {{$package->package_name}}</h2>
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
                <form action="{{ route('activity.store', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class=" col-md-12 mb-7">
                        <label class="form-label" for="floatingInput"> Title<span class=" text-danger">*</span></label>
                        <input type="text" name="title"  class="form-control" placeholder="Enter Title" required />
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class=" col-md-12 mb-7">
                        <label class="form-label" for="floatingInput">Location</label>
                        <input type="text" name="location"  class="form-control" placeholder="Enter Location" />
                        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-12 mb-7">
                        <label class="form-label" for="floatingInput">Description</label>
                        <textarea class="form-control summerNote" name="description" cols="30" rows="10"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-12 mb-7 image">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control mb-5" id="image" name="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        <br><img class="border" id="image_preview" src="{{ asset('admin/assets/media/gallery.jpg') }}" width="96px" height="72px" alt="image">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
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
        $('.summerNote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    })
</script>
@endpush
