<div class="modal fade" id="kt_modal_edit_client_{{ $client->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Client</h2>
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
                <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row p-5">
                        <!-- Title -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Organaization/Company Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $client->name) }}"
                                placeholder="Enter Name" />
                        </div>
                        <!--Url -->
                        <div class=" mb-7 col-6">
                            <label class="form-label">Website Url</label>
                            <input type="url" class="form-control" name="url"
                                value="{{ old('url', $client->url) }}" placeholder="Enter url" />
                        </div>

                        <div class="col-md-12 mb-7 image">
                            <label for="image" class="form-label">Organaization/Company Logo</label>
                            <input type="file" class="form-control mb-4 edit_image" name="logo"
                                onchange="previewImage(event)">

                            @if($client->logo)
                            <!-- Show the preview image if logo exists -->
                            <img class="mt-2 edit_image_preview" src="{{ asset('storage/' . $client->logo) }}"
                                width="96px" height="72px" alt="Logo">
                            @else
                            <!-- Hide the prev edit_image_previewiew image if no logo exists -->
                            <img class=" edit_image_preview" width="96px" height="72px" alt="Logo">
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
