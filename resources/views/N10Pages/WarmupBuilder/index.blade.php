@extends('layouts.main-layout')

@section('template_title')
Users
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="fa-solid fa-magnifying-glass position-absolute ms-6"></i>
                        <input type="text" data-kt-user-table-filter="search" id="search_table"
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search Question" />
                    </div>
                </div>
                <div class="card-toolbar">

                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <button type="button" class="btn btn-primary" onclick="createNewQuestion()">
                            <i class="fa-solid fa-plus fs-2"></i>Create New
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="users_table">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Instruction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
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
            function createNewQuestion(){
                window.location.href="{{route('warmup.builder.create-edit',' ')}}";
            }
    $(function() {

            let form_body = $('#subdiv_kt_drawer_example_basic');
            let table = $('#users_table').DataTable({
                pageLength:50,
                lenghtChange:false,
                ajax: {
                    url: "{{ route('warmup.builder.list') }}",
                },
                columns: [{
                    data: 'name'
                },
                {
                    data: 'description'
                },
                {
                    data: 'instructions'
                },
                {
                    data: 'actions'
                },
                ],
            });

            $('#search_table').on('keyup', function() {
                table.search($(this).val()).draw();
            });





            function reloadTable() {
                table.ajax.reload();
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
                    if(data.isConfirmed==true){
                        $.post('{{ route('warmup.builder.delete') }}', {_token: '{{ csrf_token() }}', id}, function (d) {
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
