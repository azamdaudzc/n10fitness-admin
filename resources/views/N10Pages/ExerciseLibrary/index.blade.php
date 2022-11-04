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
                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0 active" data-bs-toggle="tab" href="#kt_tab_pane_1">Approved Libraries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0" data-bs-toggle="tab" href="#kt_tab_pane_2">Requested Libraries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0" data-bs-toggle="tab" href="#kt_tab_pane_3">Rejected Libraries</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                <div class="card">
                <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="approved_table">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th>User</th>
                            <th>Video Link</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                <div class="card">
                <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="requested_table">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th>User</th>
                            <th>Video Link</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                <div class="card">
                <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="rejected_table">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th>User</th>
                            <th>Video Link</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                </div>
                </div>
            </div>
        </div>

        {{-- <div class="card">

            <div class="card-body py-4">

            </div>
        </div> --}}
    </div>
</div>
<div id="kt_drawer_example_basic" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true"
data-kt-drawer-toggle=".create_new_off_canvas_modal" data-kt-drawer-close="#kt_drawer_example_basic_close"
data-kt-drawer-width="500px">
<div class="py-5 col-12 pt-12 p-14">
    <div id="subdiv_kt_drawer_example_basic"></div>
</div>
</div>
@endsection

@section('page_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
<script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endsection
@section('scripts')
<script type="text/javascript">
    $(function() {

        let form_body = $('#subdiv_kt_drawer_example_basic');
        let table = $('#approved_table').DataTable({
            pageLength:10,
            lenghtChange:false,
            ajax: {
                url: "{{ route('exerciselibrary.list') }}?type=approved",
            },
            columns: [{
                data: 'user'
            },
            {
                data: 'video_link'
            },
            {
                data: 'description'
            },
            {
                data: 'createdAt'
            },
            {
                data: 'actions'
            },
            ],
        });
        let table2 = $('#requested_table').DataTable({
            pageLength:10,
            lenghtChange:false,
            ajax: {
                url: "{{ route('exerciselibrary.list') }}?type=requested",
            },
            columns: [{
                data: 'user'
            },
            {
                data: 'video_link'
            },
            {
                data: 'description'
            },
            {
                data: 'createdAt'
            },
            {
                data: 'actions'
            },
            ],
        });
        let table3 = $('#rejected_table').DataTable({
            pageLength:10,
            lenghtChange:false,
            ajax: {
                url: "{{ route('exerciselibrary.list') }}?type=rejected",
            },
            columns: [{
                data: 'user'
            },
            {
                data: 'video_link'
            },
            {
                data: 'description'
            },
            {
                data: 'createdAt'
            },
            {
                data: 'actions'
            },
            ],
        });

        $('#search_table').on('keyup', function() {
            table.search($(this).val()).draw();
        });


        $('.create_new_record').on('click', function() {
            window.location.href="{{ route('exerciselibrary.create-edit','')}}";
        });


            function reloadTable() {
                table.ajax.reload(null,false);
                table2.ajax.reload(null,false);
                table3.ajax.reload(null,false);
                KTDrawer.hideAll();
            }



            $('body').on('click', '.delete_record', function() {
                let id = $(this).attr('data-id');

                Swal.fire({
                    html: `Are you sure you want to delete this library`,
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
                    if(data.isConfirmed==true){
                        $.post('{{ route('exerciselibrary.delete') }}', {_token: '{{ csrf_token() }}', id}, function (d) {
                            if(d.success==true){
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
                    if(data.isConfirmed==true){
                        $.post('{{ route('exerciselibrary.approve') }}', {_token: '{{ csrf_token() }}', id}, function (d) {
                            if(d.success==true){
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
                    if(data.isConfirmed==true){
                        $.post('{{ route('exerciselibrary.reject') }}', {_token: '{{ csrf_token() }}', id}, function (d) {
                            if(d.success==true){
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
