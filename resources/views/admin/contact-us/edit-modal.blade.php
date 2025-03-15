<div class="modal fade" id="kt_modal_edit_kormo_poridhi_{{ $contact->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Contact Us</h2>
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
            <div class="modal-body py-lg-5 px-lg-10">
                <!-- Update Form -->
                <form action="{{ route('contact-us.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <div class=" col-md-12 mb-7">
                            <label class="form-label" for="floatingInput">Title</label>
                            <input type="text" name="title" value="{{ old('title', $contact->title) }}" class="form-control" />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class=" col-md-12 mb-7">
                            <label class="form-label" for="floatingInput">Address</label>
                            <input type="text" name="address" value="{{ old('address', $contact->address) }}" class="form-control" />
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class=" col-md-12 mb-7">
                            <label class="form-label" for="floatingInput">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="form-control" />
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class=" col-md-12 mb-7">
                            <label class="form-label" for="floatingInput">Email</label>
                            <input type="text" name="email" value="{{ old('email', $contact->email) }}" class="form-control" />
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-12 mb-7">
                            <label class="form-label" for="map">Google Map Iframe</label>
                            <textarea class="form-control" name="map" cols="30" rows="10">{{ $contact->map }}</textarea>
                            @error('map') <span class="text-danger">{{ $message }}</span> @enderror
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
