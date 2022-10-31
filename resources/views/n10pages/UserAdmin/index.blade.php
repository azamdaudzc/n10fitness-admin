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
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
                    </div>
                </div>
                <div class="card-toolbar">

                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <button type="button" id="create_new_off_canvas_modal" class="btn btn-primary">
                            <i class="fa-solid fa-plus fs-2"></i>Create New
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="users_table">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th>User</th>
                            <th>Status</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<div
id="kt_drawer_example_basic"

class="bg-white"
data-kt-drawer="true"
data-kt-drawer-activate="true"
data-kt-drawer-toggle="#create_new_off_canvas_modal"
data-kt-drawer-close="#kt_drawer_example_basic_close"
data-kt-drawer-width="500px"
>
@include('n10pages.UserAdmin.form')
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
    var table;
    $(function () {

         table = $('#users_table').DataTable({
            pagingType: 'full_numbers',
            ajax: {
                url: "{{ route('user.admin.list') }}",
            },
            columns: [
            {data: 'user'},
            {data: 'status'},
            {data: 'createdBy'},
            {data: 'createdAt'},
            {data: 'actions'},
            ],
        });

        $('#search_table').on('keyup', function () {
            table.search($(this).val()).draw();
        });
    });

    $(document).on("submit", "form", function (event) {
        event.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),

            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (data, status) {
                reloadTable();
            },
            error: function (data) {
                var response = JSON.parse(data.responseText);
                var errorString = '<ul>';
                    $.each(response.errors, function (key, value) {
                        errorString += '<li>' + value + '</li>';
                    });
                    errorString += '</ul>';
                    $('.error-area').html('')
                    $('.error-area').append(errorString);

                }
            });

        });

        function reloadTable(){
            table.ajax.reload();
            KTDrawer.hideAll();
        }

        function showInfoModal(id) {
            $.get("{{route('users-get')}}?id=" + id, function (data, status) {
                var t = "<ul class='setAllInfo'>";
                    var p = "</ul>";
                    // console.log(data);
                    var one = "<li ><strong>Name: </strong>" + data.exerciseCategory.name + "</li>";
                    one += "<li><strong>Phone:</strong> " + data.exerciseCategory.phone + "</li>";
                    one += "<li><strong>User Type:</strong> " + data.exerciseCategory.user_type + "</li>";
                    one += "<li><strong>Height:</strong> " + data.exerciseCategory.height + "</li>";
                    one += "<li><strong>Age:</strong> " + data.exerciseCategory.age + "</li>";
                    one += "<li><strong>Gender:</strong> " + data.exerciseCategory.gender + "</li>";
                    one += "<li><strong>Email:</strong> " + data.exerciseCategory.email + "</li>";

                    for (var i = data.permissions.length - 1; i >= 0; i--) {

                        one += "<li>Permission: " + data.permissions[i].name + "</li>";

                    }
                    $('#userInfoModalSubHeading').html('User Info');
                    $('#userInfoModalHeading').html('Users');
                    $('#setAllInfo').html(t + one + p);
                    // console.log(data);
                });
                $("#kt_modal_users_search").modal('show');
            }
        </script>
        @endsection
