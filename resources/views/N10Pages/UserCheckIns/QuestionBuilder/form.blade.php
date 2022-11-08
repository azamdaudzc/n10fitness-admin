@extends('layouts.main-layout')

@section('template_title')
    Users
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="card-body py-5">

            <form method="POST" id="crud-form" action="{{ route('checkin.questions.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf
                @if ($data)
                    <input type="hidden" name="id" value="{{ $data->id }}">
                @endif

                <div class="mb-10">
                    <label for="question" class="form-label">Question</label>
                    <input class="form-control" placeholder="question" name="question" type="text" id="question"
                        value="{{ @$data->question }}">
                </div>

                <div class="mb-10">
                    <label for="display_order" class="form-label">Display Order</label>
                    <input class="form-control" placeholder="display_order" name="display_order" type="number"
                        id="display_order" value="{{ @$data->display_order }}">
                </div>


                <!--begin::Repeater-->
                <div id="kt_docs_repeater_nested">
                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="kt_docs_repeater_nested_outer">
                            @foreach ($question_inputs as $input)
                                <div data-repeater-item>
                                    <div class="form-group row mb-5">
                                        <div class="col-md-1">
                                            <label class="form-label">Type</label>

                                            <select class="form-control mb-2 mb-md-0" onchange="selectChanged(this)"
                                                name="input_type" id="">
                                                <option value="">Select Input Type</option>
                                                <option value="text" @if ($input->input_type == 'text') selected @endif>
                                                    Text</option>
                                                <option value="number" @if ($input->input_type == 'number') selected @endif>
                                                    Number</option>
                                                <option value="radio" @if ($input->input_type == 'radio') selected @endif>
                                                    Radio</option>
                                                <option value="select" @if ($input->input_type == 'select') selected @endif>
                                                    Select</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label">Placeholder</label>
                                            <input type="text" name="placeholder" value="{{ $input->placeholder }}"
                                                placeholder="Placeholder" class="form-control mb-2 mb-md-0">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Label</label>
                                            <input type="text" name="label" value="{{ $input->label }}"
                                                placeholder="Label" class="form-control mb-2 mb-md-0">
                                        </div>
                                        <div class="col-md-1">
                                            <label class="form-label">Order</label>
                                            <input type="number" name="display_order" value="{{ $input->display_order }}"
                                                placeholder="Display Order" class="form-control mb-2 mb-md-0">
                                        </div>

                                        <div class="col-md-4 nested-option"
                                            @if ($input->options == null) style="display: none" @endif>
                                            <div class="inner-repeater">
                                                <div data-repeater-list="kt_docs_repeater_nested_inner" class="mb-5">
                                                    @if (json_decode($input->options) != null)
                                                        @foreach (json_decode($input->options) as $option)
                                                            <div data-repeater-item>
                                                                <label class="form-label">Options label/value</label>
                                                                <div class="input-group pb-3">
                                                                    <input type="text" name="question_label"
                                                                        value="{{ $option->question_label }}"
                                                                        class="form-control" placeholder="Label" />
                                                                    <input type="text" name="question_value"
                                                                        value="{{ $option->question_value }}"
                                                                        class="form-control" placeholder="Value" />
                                                                    <button
                                                                        class="border border-secondary btn btn-icon btn-light-danger"
                                                                        data-repeater-delete type="button">
                                                                        <i class="la la-trash-o fs-3"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <button class="btn btn-sm btn-light-primary" data-repeater-create
                                                    type="button">
                                                    <i class="la la-plus"></i> Add Option
                                                </button>
                                            </div>
                                        </div>


                                        <div class="col-md-1">
                                            <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                <input class="form-check-input"
                                                    @if ($input->is_required == 1) checked @endif name="is_required"
                                                    type="checkbox" value="" />
                                                <label class="form-check-label" for="form_checkbox">
                                                    Required
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete
                                                class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                                <i class="la la-trash-o fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div data-repeater-item>
                                <div class="form-group row mb-5">
                                    <div class="col-md-1">
                                        <label class="form-label">Type</label>

                                        <select class="form-control mb-2 mb-md-0" onchange="selectChanged(this)"
                                            name="input_type" id="">
                                            <option value="">Select Input Type</option>
                                            <option value="text">Text</option>
                                            <option value="number">Number</option>
                                            <option value="radio">Radio</option>
                                            <option value="select">Select</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="form-label">Placeholder</label>
                                        <input type="text" name="placeholder" placeholder="Placeholder"
                                            class="form-control mb-2 mb-md-0">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Label</label>
                                        <input type="text" name="label" placeholder="Label"
                                            class="form-control mb-2 mb-md-0">
                                    </div>
                                    <div class="col-md-1">
                                        <label class="form-label">Order</label>
                                        <input type="number" name="display_order" placeholder="Display Order"
                                            class="form-control mb-2 mb-md-0">
                                    </div>

                                    <div class="col-md-4 nested-option" style="display: none">
                                        <div class="inner-repeater">
                                            <div data-repeater-list="kt_docs_repeater_nested_inner"
                                                class="mb-5 nested-option-inner">
                                            </div>
                                            <button class="btn btn-sm btn-light-primary" data-repeater-create
                                                type="button">
                                                <i class="la la-plus"></i> Add Option
                                            </button>
                                        </div>
                                    </div>


                                    <div class="col-md-1">
                                        <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                            <input class="form-check-input" name="is_required" type="checkbox"
                                                value="" id="form_checkbox" />
                                            <label class="form-check-label" for="form_checkbox">
                                                Required
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="javascript:;" data-repeater-delete
                                            class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                            <i class="la la-trash-o fs-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group">
                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                            <i class="la la-plus"></i>Add Row
                        </a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Repeater-->
                <div class="error-area"></div>
                <div class="box-footer mt-20">
                    <button type="submit" class="btn btn-primary me-10" id="crud-form-submit-button">
                        <span class="indicator-label">
                            Submit
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script type="text/javascript">
        function startRepeater() {
            $('#kt_docs_repeater_nested').repeater({
                repeaters: [{
                    selector: '.inner-repeater',
                    show: function() {
                        $(this).slideDown();
                    },

                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                }],

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        }
        $(function() {



            startRepeater();
            $(document).on("submit", "form", function(event) {
                event.preventDefault();
                $('#crud-form-submit-button').attr("data-kt-indicator", "on");

                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),

                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(d, status) {
                        if (d.success == true) {
                            toastr.success(d.msg);
                            window.location.href = "{{ route('checkin.questions.index') }}";

                        }
                        $('#crud-form-submit-button').attr("data-kt-indicator", "off");

                    },
                    error: function(data) {
                        var response = JSON.parse(data.responseText);
                        var errorString = '<ul>';
                        $.each(response.errors, function(key, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul>';
                        $('.error-area').html('');
                        toastr.error(errorString);
                        $('#crud-form-submit-button').attr("data-kt-indicator", "off");

                    }
                });

            });



        });

        function selectChanged(select) {
            var option_element =
                '<div data-repeater-item> <label class="form-label">Options label/value</label> <div class="input-group pb-3"> <input type="text" name="question_label" class="form-control" placeholder="Label" />  <input type="text" name="question_value" class="form-control" placeholder="Value" /> <button class="border border-secondary btn btn-icon btn-light-danger" data-repeater-delete type="button"> <i class="la la-trash-o fs-3"></i> </button>  </div> </div>';

            switch ($(select).val()) {
                case 'radio':
                    $(select).parent().parent().find("div.nested-option").show();
                    $(select).parent().parent().find("div.nested-option").find("div.nested-option-inner").html(
                        option_element);
                    startRepeater();
                    break;
                case 'select':
                    $(select).parent().parent().find("div.nested-option").show();
                    $(select).parent().parent().find("div.nested-option").find("div.nested-option-inner").html(
                        option_element);
                    startRepeater();
                    break;
                default:
                    $(select).parent().parent().find("div.nested-option").hide();
                    $(select).parent().parent().find("div.nested-option").find("div.nested-option-inner").html('');
                    break;
            }
        }
    </script>
@endsection
