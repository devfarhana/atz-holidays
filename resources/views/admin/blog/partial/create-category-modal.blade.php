<div class="modal fade" id="kt_modal_create_category_blog" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-md">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Category</h2>
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
                <form action="{{ route('blog.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Category Name<span class=" text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Category Name" required/>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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

