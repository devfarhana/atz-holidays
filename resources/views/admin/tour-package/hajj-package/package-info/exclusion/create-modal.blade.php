<div class="modal fade" id="kt_modal_exclusion_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <h2>Exclusions of {{$package->package_name}}</h2>
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
                <form action="{{ route('hajj-exclusion.store', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class=" col-md-12 mb-7">
                        <label class="form-label" for="floatingInput">Exclusion Title<span class=" text-danger">*</span></label>
                        <input type="text" name="title"  class="form-control" placeholder="Exclusion Title" required />
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
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



