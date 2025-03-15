<div class="modal fade" id="kt_modal_feature_{{ $package->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New Feature</h2>
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
                <form action="{{ route('hajj-feature.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-info btn-round ms-auto mb-3" id="addFeature">
                                <i class="fa fa-plus"></i> Add Feature
                            </button>
                        </div>

                        <div class="row">
                            @foreach ($package->features as $feature)
                            <div class="row feature-entry mb-3" id="feature-entry-{{ $loop->iteration }}">
                                <div class="col-md-5">
                                    <input type="hidden" name="feature_ids[]" value="{{ $feature->id }}">
                                    <input class="form-control" type="text" name="feature_title[]" id="feature_{{ $loop->iteration }}" value="{{ $feature->feature_title }}" placeholder="Enter Feature">
                                </div>
                                <div class="col-md-5 image">
                                    <input class="form-control edit_image" type="file" name="icons[]" accept="image/*">
                                    @if($feature->icon)
                                        <img class="edit_image_preview mt-2" src="{{ asset('storage/' . $feature->icon) }}" alt="Old Image" width="96" height="72">
                                    @else
                                        <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                                    @endif
                                </div>

                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger btn-sm" onclick="removeFeatureEntry('feature-entry-{{ $loop->iteration }}')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach

                        </div>

                        <div class="row" id="newFeatureSection"></div>

                        <div>
                            <button class="btn btn-success" type="submit">Update</button>
                            <button class="btn btn-danger" type="button" onclick="history.back()">Cancel</button>
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
    document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for all "Add Feature" buttons
    document.querySelectorAll('#addFeature').forEach(function (button) {
        button.addEventListener('click', function () {
            // Get the closest modal (if applicable)
            const modal = button.closest('.modal');
            const modalId = modal ? modal.id : null;
            const newFeatureSection = modal ? modal.querySelector('#newFeatureSection') : document.querySelector('#newFeatureSection');

            if (!newFeatureSection) return; // Ensure section exists before adding

            // Count the number of feature entries in this section
            const featureCounter = newFeatureSection.querySelectorAll('.feature-entry').length + 1;

            // Create a new feature entry
            const newFeatureEntry = document.createElement('div');
            newFeatureEntry.classList.add('row', 'feature-entry', 'mb-3');
            newFeatureEntry.id = `feature-entry-${modalId ? modalId + '-' : ''}${featureCounter}`;

            newFeatureEntry.innerHTML = `
                <div class="col-md-5">
                    <input class="form-control" type="text" name="feature_title[]" placeholder="Enter Feature">
                </div>
                <div class="col-md-5 image">
                    <input class="form-control edit_image" type="file" name="icons[]" accept="image/*">\
                     <img class="edit_image_preview d-none mt-2" src="" alt="Preview Image" width="96" height="72">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeFeatureEntry('${newFeatureEntry.id}')">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            `;

            // Append the new feature entry to the newFeatureSection
            newFeatureSection.appendChild(newFeatureEntry);
        });
    });
});

// Function to remove a feature entry
function removeFeatureEntry(id) {
    const featureEntry = document.getElementById(id);
    if (featureEntry) {
        featureEntry.remove();
    }
}


</script>
<script>
    $(document).ready(function () {
        function handleImagePreview(inputSelector, previewSelector) {
            $(document).on('change', inputSelector, function () {
                let file = this.files[0];
                let reader = new FileReader();
                let preview = $(this).closest('.image').find(previewSelector);

                if (file) {
                    reader.onload = function (e) {
                        preview.attr('src', e.target.result).removeClass('d-none');
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.addClass('d-none');
                }
            });
        }

        // Ensure both existing and new file inputs are handled
        handleImagePreview('.edit_image', '.edit_image_preview');
    });
</script>

@endpush
