<div class="modal fade" id="kt_modal_extra_service_{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add Information for {{$service->title}}</h2>
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
                <form action="{{ route('service-extra.store', $service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method("POST")

                    @php
                    $serviceextra = $serviceextras->where('service_id', $service->id)->first();
                    @endphp
                        @if ($serviceextra)
                            <div class="row p-5">
                                <input type="text" name="service_id" id="" value="{{ $service->id }}" style="display: none">
                                <div class="col-md-6 mb-7">
                                    <label for="first_title" class="form-label">Title-1</label>
                                    <input type="text" class="form-control mb-4" id="first_title" name="first_title"
                                        value="{{ $serviceextra->first_title }}">
                                </div>
                                <div class="col-md-6 mb-7">
                                    <label for="first_details" class="form-label">Details-1</label>
                                    <textarea type="text" class="form-control mb-4" id="first_details" name="first_details">{{ $serviceextra->first_details }}</textarea>
                                </div>
                                <!-- Add details -->
                                <div class="col-md-6 mb-7">
                                    <label for="second_title" class="form-label">Title-2</label>
                                    <input type="text" class="form-control mb-4" id="second_title" name="second_title"
                                        value="{{ $serviceextra->second_title }}">
                                </div>
                                <div class="col-md-6 mb-7">
                                    <label for="second_details" class="form-label">Details-2</label>
                                    <textarea type="text" class="form-control mb-4" id="second_details" name="second_details">{{ $serviceextra->second_details }}</textarea>
                                </div>
                                <!-- Add details -->
                                <div class="col-md-6 mb-7">
                                    <label for="third_title" class="form-label">Title-3</label>
                                    <input type="text" class="form-control mb-4" id="third_title" name="third_title"
                                        value="{{ $serviceextra->third_title }}">
                                </div>
                                <div class="col-md-6 mb-7">
                                    <label for="third_details" class="form-label">Details-3</label>
                                    <textarea type="text" class="form-control mb-4" id="third_details" name="third_details">{{ $serviceextra->third_details }}</textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        @else
                        <div class="row p-5">
                            <input type="text" name="service_id" id="" value="{{ $service->id }}" style="display: none">

                            <!-- Add details -->
                            <div class="col-md-6 mb-7">
                                <label for="first_title" class="form-label">Title-1</label>
                                <input type="text" class="form-control mb-4" id="first_title" name="first_title" placeholder="Enter title">
                            </div>
                            <div class="col-md-6 mb-7">
                                <label for="first_details" class="form-label">Details-1</label>
                                <textarea type="text" class="form-control mb-4" id="first_details" name="first_details" placeholder="Enter title"></textarea>
                            </div>
                            <!-- Add details -->
                            <div class="col-md-6 mb-7">
                                <label for="second_title" class="form-label">Title-2</label>
                                <input type="text" class="form-control mb-4" id="second_title" name="second_title" placeholder="Enter title">
                            </div>
                            <div class="col-md-6 mb-7">
                                <label for="second_details" class="form-label">Details-2</label>
                                <textarea type="text" class="form-control mb-4" id="second_details" name="second_details" placeholder="Enter title"></textarea>
                            </div>
                            <!-- Add details -->
                            <div class="col-md-6 mb-7">
                                <label for="third_title" class="form-label">Title-3</label>
                                <input type="text" class="form-control mb-4" id="third_title" name="third_title" placeholder="Enter title">
                            </div>
                            <div class="col-md-6 mb-7">
                                <label for="third_details" class="form-label">Details-3</label>
                                <textarea type="text" class="form-control mb-4" id="third_details" name="third_details" placeholder="Enter title"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </div>
                        @endif


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
