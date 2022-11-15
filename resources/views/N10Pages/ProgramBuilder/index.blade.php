@extends('layouts.main-layout')

@section('template_title')
    Users
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">



            <div class="mb-5 hover-scroll-x">
                <div class="d-grid">
                    <ul class="nav nav-tabs flex-nowrap text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 @if ($goto == 1) active @endif"
                                data-bs-toggle="tab" href="#kt_tab_pane_1">Approved Warmups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 @if ($goto == 2) active @endif"
                                data-bs-toggle="tab" href="#kt_tab_pane_2">Requested Warmups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 @if ($goto == 3) active @endif"
                                data-bs-toggle="tab" href="#kt_tab_pane_3">Rejected Warmups</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade  @if ($goto == 1) show active @endif" id="kt_tab_pane_1"
                    role="tabpanel">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="fa-solid fa-magnifying-glass position-absolute ms-6"></i>
                                    <input type="text" data-kt-user-table-filter="search" id="search_table_1"
                                        class="form-control form-control-solid w-250px ps-14"
                                        placeholder="Search Program" />
                                </div>
                            </div>

                        </div>
                        <div class="card-body py-4">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="approved_table">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th>Name</th>
                                        <th>Days</th>
                                        <th>Weeks</th>
                                        <th>Creator</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade @if ($goto == 2) show  active @endif" id="kt_tab_pane_2"
                    role="tabpanel">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="fa-solid fa-magnifying-glass position-absolute ms-6"></i>
                                    <input type="text" data-kt-user-table-filter="search" id="search_table_2"
                                        class="form-control form-control-solid w-250px ps-14"
                                        placeholder="Search Program" />
                                </div>
                            </div>
                            <div class="card-toolbar">


                            </div>
                        </div>
                        <div class="card-body py-4">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="requested_table">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th>Name</th>
                                        <th>Days</th>
                                        <th>Weeks</th>
                                        <th>Creator</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade @if ($goto == 3) show active @endif" id="kt_tab_pane_3"
                    role="tabpanel">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="fa-solid fa-magnifying-glass position-absolute ms-6"></i>
                                    <input type="text" data-kt-user-table-filter="search" id="search_table_3"
                                        class="form-control form-control-solid w-250px ps-14"
                                        placeholder="Search Program" />
                                </div>
                            </div>

                        </div>
                        <div class="card-body py-4">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="rejected_table">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th>Name</th>
                                        <th>Days</th>
                                        <th>Weeks</th>
                                        <th>Creator</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_drawer_example_basic" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true"
        data-kt-drawer-toggle=".create_new_off_canvas_modal" data-kt-drawer-close="#kt_drawer_example_basic_close"
        data-kt-drawer-width="500px">
        <div class="py-5 col-12 p-1">
            <div id="subdiv_kt_drawer_example_basic"></div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function() {

            let form_body = $('#subdiv_kt_drawer_example_basic');
            $('body').on('click', '.view_record', function() {
                let id = $(this).attr('data-id');
                form_body.empty();
                $.post('{{ route('program.builder.details') }}', {
                    _token: '{{ csrf_token() }}',
                    id
                }, function(d) {
                    form_body.html(d);
                });
            });


            let table = $('#approved_table').DataTable({
                pageLength: 10,
                lenghtChange: false,
                ajax: {
                    url: "{{ route('program.builder.list') }}?type=approved",
                },
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'days'
                    },
                    {
                        data: 'weeks'
                    },
                    {
                        data: 'creator'
                    },
                    {
                        data: 'actions'
                    },
                ],
            });
            let table2 = $('#requested_table').DataTable({
                pageLength: 10,
                lenghtChange: false,
                ajax: {
                    url: "{{ route('program.builder.list') }}?type=requested",
                },
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'days'
                    },
                    {
                        data: 'weeks'
                    },
                    {
                        data: 'creator'
                    },
                    {
                        data: 'actions'
                    },
                ],
            });
            let table3 = $('#rejected_table').DataTable({
                pageLength: 10,
                lenghtChange: false,
                ajax: {
                    url: "{{ route('program.builder.list') }}?type=rejected",
                },
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'days'
                    },
                    {
                        data: 'weeks'
                    },
                    {
                        data: 'creator'
                    },
                    {
                        data: 'actions'
                    },
                ],
            });

            $('#search_table_1').on('keyup', function() {
                table.search($(this).val()).draw();
            });
            $('#search_table_2').on('keyup', function() {
                table2.search($(this).val()).draw();
            });
            $('#search_table_3').on('keyup', function() {
                table3.search($(this).val()).draw();
            });





            function reloadTable() {
                table.ajax.reload(null, false);
                table2.ajax.reload(null, false);
                table3.ajax.reload(null, false);
                KTDrawer.hideAll();
            }




            $('body').on('click', '.delete_record', function() {
                let id = $(this).attr('data-id');

                Swal.fire({
                    html: `Are you sure you want to delete this question`,
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
                        $.post('{{ route('program.builder.delete') }}', {
                            _token: '{{ csrf_token() }}',
                            id
                        }, function(d) {
                            if (d.success == true) {
                                toastr.success(d.msg);
                                reloadTable();
                            }
                        });
                    }
                });
            });

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
                                reloadTable();
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
                                reloadTable();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
