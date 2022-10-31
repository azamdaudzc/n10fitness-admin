@extends('layouts.main-layout')

@section('template_title')
    Users
@endsection

@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="fa-solid fa-magnifying-glass position-absolute ms-6"></i>
                            <input type="text" data-kt-user-table-filter="search"
                                   class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->

                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">
                                <i class="fa-solid fa-plus fs-2"></i>Create New
                            </button>

                            <!--end::Add user-->

                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                            <th>User</th>
                            <th>Active</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-semibold">
                        <!--begin::Table row-->
                        @foreach($users as $user)
                            <tr>

                                <!--begin::User=-->

                                <!--begin::Last login=-->

                                <!--end::Last login=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            @if($user->avatar!=null)
                                                <img alt="Pic" src="{{asset('storage/').'/'.$user->avatar}}"
                                                     style=" object-fit: cover;"/>
                                            @else
                                                <img alt="Pic" src="assets/media/avatars/blank.png"
                                                     style=" object-fit: cover;"/>
                                            @endif


                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="text-gray-800 text-hover-primary mb-1 ms-5">
                                            {{$user->first_name}} {{$user->last_name}}
                                            <div class="fw-semibold text-muted">{{$user->email}}</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                </td>
                                <!--begin::Joined-->

                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->user_type }}</td>
                                @if($user->is_active==1)
                                    <td>
                                        <div class="badge badge-light-primary fw-bold">Active</div>

                                    </td>
                                @else
                                    <td>
                                        <div class="badge badge-light-warning fw-bold">Disabled</div>

                                    </td>

                                @endif
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">

                                            @isset($user->userCreator->avatar)
                                                <img alt="Pic"
                                                     src="{{asset('storage/').'/'.@$user->userCreator->avatar}}"
                                                     style=" object-fit: cover;"/>
                                            @endisset
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="text-gray-800 mb-1 ms-5">
                                            {{@$user->userCreator->first_name}}
                                            {{@$user->userCreator->last_name}}

                                            <div class="fw-semibold text-muted">{{@$user->userCreator->user_type}}</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                </td>

                                <td>{{date('d-M-Y',strtotime($user->created_at))}}</td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm "
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions<i
                                            class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" onclick="showInfoModal('{{$user->id}}')">
                                            <a class="menu-link px-3">View</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('users.edit',$user->id) }}"
                                               class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <form class="menu-item px-3" action="{{ route('users.destroy',$user->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="menu-link px-3"
                                                    data-kt-users-table-filter="delete_row" style="background-color: white;
                    border: none;"> Delete
                                            </button>
                                        </form>

                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <!--end::Table row-->
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>

@endsection

@section('page_scripts')
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endsection
@section('scripts')

    <script type="text/javascript">
        $(function () {

            var table = $('.users_tables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "get-users",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},

                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                },
                    {
                        orderable: !1,
                        targets: 6
                    },
                ],
            });

        });
    </script>

    <script>


        //     function submitCreateForm () {
        //         $.ajax({
        //     type:'{{$type}}',
        //     enctype: 'multipart/form-data',
        //   processData: false,  // tell jQuery not to process the data
        //   contentType: false,   // tell jQuery not to set contentType
        //   dataType:'json',
        //      data: $('#createNewForm').serialize(),
        //      url:"{{ $formRoute }}",
        //      headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
        //      success:function(data){
        //        // window.location.replace("{{route('users.index')}}");

        //      },
        //      error:function(data){
        //       var response = JSON.parse(data.responseText);
        //     var errorString = '<ul>';
        //     $.each( response.errors, function( key, value) {
        //         errorString += '<li>' + value + '</li>';
        //     });
        //     errorString += '</ul>';
        //     $('.error-area').html('')
        //     $('.error-area').append(errorString);
        //     // alert(errorString);
        //      }
        //   });
        //     }

        $(document).on("submit", "form", function (event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),

                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data, status) {
                    location.reload();
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
