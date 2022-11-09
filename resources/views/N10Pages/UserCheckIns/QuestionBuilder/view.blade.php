<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->


        <!--end::Action-->

    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-12 fw-semibold text-muted">Question</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-12">
                <span class="fw-bold fs-6 text-gray-800">{{ $data->question }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-12 fw-semibold text-muted">Display Order</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-12 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{ $data->display_order }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        @foreach ($question_inputs as $input)
            <div class="col">
                @if ($input->input_type == 'select')
                    <div class="fv-row mb-7 fv-plugins-icon-container" data-select2-id="select2-data-114-vrpt">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                        </label>
                        <select name="" class="form-select form-select-solid lh-1 py-3 ">
                            <option value="">Select {{ $input->placeholder }}</option>
                            @if ($input->options != null)
                                @foreach (json_decode($input->options) as $option)
                                    <option value="{{ $option->question_value }}">{{ $option->question_label }}</option>
                                @endforeach
                            @endif
                        </select>

                    </div>
                @elseif ($input->input_type == 'radio')
                    <div class="py-5 mb-5">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                        </label>

                        @if ($input->options != null)
                            @foreach (json_decode($input->options) as $option)
                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            value="{{ $option->question_value }}" id="flexCheckDefault1" name="radio2">
                                        <label class="form-check-label"
                                            for="flexCheckDefault1">{{ $option->question_label }}</label>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>

                @elseif ($input->input_type == 'multi_select')
                    <div class="fv-row mb-7 fv-plugins-icon-container" data-select2-id="select2-data-114-vrpt">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                        </label>
                        <select class="js-example-basic-multiple form-select" name="states[]" multiple="multiple" >

                            <option value="">Select {{ $input->placeholder }}</option>
                            @if ($input->options != null)
                                @foreach (json_decode($input->options) as $option)
                                    <option value="{{ $option->question_value }}">{{ $option->question_label }}
                                    </option>
                                @endforeach
                            @endif
                        </select>

                    </div>

                @elseif ($input->input_type == 'textarea')
                <div class="fv-row mb-7">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                    </label>
                    <textarea class="form-control form-control-solid"
                        placeholder="{{ $input->placeholder }}" id="" cols="10" rows="5"></textarea><br>


                </div>
                @elseif ($input->input_type == 'image')
                <div class="fv-row mb-7">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                    </label>
                    <input class="form-control form-control-solid" type="file"
                        placeholder="{{ $input->placeholder }}" id=""><br>
                </div>
                @else
                    <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span @if ($input->is_required) class="required" @endif>{{ $input->label }}</span>
                        </label>
                        <input class="form-control form-control-solid" type="{{ $input->input_type }}"
                            placeholder="{{ $input->placeholder }}" id=""><br>
                    </div>
                @endif
            </div>
        @endforeach







    </div>
    <!--end::Card body-->
</div>

