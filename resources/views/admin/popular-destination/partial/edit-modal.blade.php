<div class="modal fade" id="kt_modal_edit_destination-{{ $destination->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Destination</h2>
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
                <form action="{{ route('popular-destination.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <div class="mb-7 col-md-12">
                            <label class="form-label">Destination Name</label>
                            <input type="text" class="form-control" name="destination_name" value="{{ old('destination_name', $destination->destination_name) }}" placeholder="Destination Name"/>
                            @error('destination_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Country Select input -->
                        <div class="col-md-6 mb-7">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-control" id="c" name="country_id">
                                @foreach ($destinationcountries as $countries)
                                        <option value="{{ $countries->id }}"
                                            {{ old('country_id', $destination->country_id) == $countries->id ? 'selected' : '' }}>
                                            {{ $countries->country_name }}
                                        </option>
                                @endforeach
                            </select>
                            @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <div class="col-md-6 mb-3 image">
                            <label for="edit_image" class="form-label">Image</label>
                            <input type="file" class="form-control mb-3 edit_image" name="image" accept="image/*">
                            @if($destination->image)
                            <img class="edit_image_preview mt-2" id="edit_image_preview" src="{{ asset('storage/' . $destination->image) }}" alt="Old Image" width="96" height="72">
                            @else
                            <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                            @endif
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

@endpush
