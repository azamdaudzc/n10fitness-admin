@extends('layouts.main-layout')

@section('template_title')
    Users
@endsection

@section('content')

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card shadow-sm">
                <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                    <h3 class="card-title">Program</h3>
                </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <label for="program-name"><strong>Program Name</strong></label><br>
                            <label for="">{{ $program->title }}</label>
                        </div>
                        <div class="mb-5">
                            <label for="program-groups"><strong>Program Weeks</strong></label><br>
                            <label for="">{{ $program->weeks }}</label>
                        </div>
                        <div class="mb-5">
                            <label for="program-days"><strong>Program Days</strong></label><br>
                            <label for="">{{ $program->days }}</label>
                        </div>

                        @if ($program->approved_by == 0 && $program->rejected_by == 0)
                        <div><a class="btn btn-primary align-self-center approve_record" data-id="{{ $program->id }}"
                                href="javascript:void(0);">Approve</a>
                            <a class="btn btn-danger align-self-center reject_record" data-id="{{ $program->id }}"
                                href="javascript:void(0);">Reject</a>
                        </div>
                    @elseif ($program->approved_by != 0)
                        <div class="badge badge-light-success h-40px">Approved</div>
                    @else
                        <div class="badge badge-light-danger h-40px">Rejected</div>
                    @endif
                    </div>

            </div>
            <div class="accordion" id="kt_accordion_1">
                @for ($i = 1; $i <= $week_group_count; $i++)
                <div class="card card-dashed mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Group {{ $per_group_data[$i]->week_group }} [ Week:
                            {{ $week_group_range[$i]->StartFrom }} -
                            Week:
                            {{ $week_group_range[$i]->EndTo }} ]</h3>
                        <div class="card-toolbar">

                        </div>
                    </div>
                    <div class="card-body">

                    <div class="program-main-area">
                        <div class="program-sub-area col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                                    <h3 class="card-title">Week Calories & Proteins</h3>
                                </div>
                                     <div class="card-body">


                            <div class="pro-cal-area table-responsive " style="width:100%">
                                <table class="table">
                                    <thead>
                                        <tr><td></td><td>Calo</td><td>Prot</td></tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($all_group_data as $item)
                                         @if ($item->week_no <= $week_group_range[$i]->EndTo && $item->week_no >= $week_group_range[$i]->StartFrom)

                                        <tr><td>Week
                                            {{ $item->week_no }}</td>
                                        <td> {{ $item->assigned_calories }}</td>
                                        <td> {{ $item->assigned_proteins }}</td></tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                        @for ($j = 1; $j <= $program->days; $j++)

                            <div class="program-sub-area col-md-5">
                                <div class="card shadow-sm ">
                                    <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                                        <h3 class="card-title">Day {{ $j }}</h3>
                                    </div>
                                        <div class="card-body">

                                <Strong>Warmups :</Strong> <br>
                                <ul class="h-100px">
                                    @foreach ($warmups as $w)
                                        @if (in_array($w->id, $selected_warmup_ids[$i][$j]))
                                            <li>{{ $w->name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="form-group">

                                    @foreach ($week_day_exercise_data[$i][$j] as $exercise)
                                        <div class="mt-10">
                                            <hr class="solid">
                                            <div class="mt-5 mb-5 h-50px">
                                                @foreach ($exercises as $w)
                                                    @if ($exercise->exercise_library_id == $w->id)
                                                        <strong>Exercise:</strong><br>
                                                        {{ $w->name }}
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="mt-5 mb-5 h-50px">
                                                <label for=""><strong>Note:</strong></label><br>
                                                {{ $week_day_exercise_set[$exercise->id]->notes }}
                                            </div>

                                            <div class="table-responsive ">
                                                <table class="table-bordered program-table">
                                                    <thead>
                                                        <tr>
                                                            <td>#</td>
                                                            <td>Sets
                                                            </td>
                                                            <td>Reps
                                                            </td>
                                                            <td>RPE</td>
                                                            <td>Load
                                                            </td>
                                                            <td>Rest
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @for ($wr = $week_group_range[$i]->StartFrom; $wr <= $week_group_range[$i]->EndTo; $wr++)
                                                            <tr>
                                                                <td>{{ $wr }}
                                                                </td>
                                                                <td>{{ $week_day_exercise_set[$exercise->id]->set_no }}
                                                                </td>
                                                                <td>{{ $week_day_exercise_set[$exercise->id]->rep_min_no }}/{{ $week_day_exercise_set[$exercise->id]->rep_max_no }}
                                                                </td>
                                                                <td>{{ $week_day_exercise_set[$exercise->id]->rpe_no }}
                                                                </td>
                                                                <td>{{ $week_day_exercise_set[$exercise->id]->load_text }}
                                                                </td>
                                                                <td> {{ $week_day_exercise_set[$exercise->id]->rest_time }}
                                                                </td>
                                                            </tr>
                                                        @endfor

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            </div>
                            </div>
                        @endfor
                    </div>
                    </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        $(function() {

            $('body').on('click', '.approve_record', function() {
                let id = $(this).attr('data-id');

                Swal.fire({
                    html: `Are you sure you want to approve`,
                    icon: "info",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "Ok, got it!",
                    cancelButtonText: 'Nope, cancel it',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: 'btn btn-danger'
                    }
                }).then(function(data) {
                    if (data.isConfirmed == true) {
                        $.post('{{ route('program.builder.approve') }}', {
                            _token: '{{ csrf_token() }}',
                            id
                        }, function(d) {
                            if (d.success == true) {
                                toastr.success(d.msg);
                                location.reload();
                            }
                        });
                    }
                });
            });
            $('body').on('click', '.reject_record', function() {
                let id = $(this).attr('data-id');

                Swal.fire({
                    html: `Are you sure you want to reject`,
                    icon: "info",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "Ok, got it!",
                    cancelButtonText: 'Nope, cancel it',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: 'btn btn-danger'
                    }
                }).then(function(data) {
                    if (data.isConfirmed == true) {
                        $.post('{{ route('program.builder.reject') }}', {
                            _token: '{{ csrf_token() }}',
                            id
                        }, function(d) {
                            if (d.success == true) {
                                toastr.success(d.msg);
                                location.reload();

                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
