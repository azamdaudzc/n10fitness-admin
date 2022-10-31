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
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                            fill="currentColor" />
                            <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
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
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16"
                        height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                        fill="currentColor" />
                        <rect x="4.36396" y="11.364" width="16" height="2"
                        rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Create New
            </button>

            <!--end::Add user-->

            <!--end::Add user-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Group actions-->
        <div class="d-flex justify-content-end align-items-center d-none"
        data-kt-user-table-toolbar="selected">
        <div class="fw-bold me-5">
            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
        </div>
        <button type="button" class="btn btn-danger"
        data-kt-user-table-select="delete_selected">Delete Selected</button>
    </div>
    <!--end::Group actions-->
    <!--begin::Modal - Adjust Balance-->
    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Export Users</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                    data-kt-users-modal-action="close" >
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137"
                        width="16" height="2" rx="1"
                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16"
                        height="2" rx="1"
                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="kt_modal_export_users_form" class="form" action="#">
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mb-2">Select
                    Roles:</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="role" data-control="select2"
                    data-placeholder="Select a role" data-hide-search="true"
                    class="form-select form-select-solid fw-bold">
                    <option></option>
                    <option value="Administrator">Administrator</option>
                    <option value="Analyst">Analyst</option>
                    <option value="Developer">Developer</option>
                    <option value="Support">Support</option>
                    <option value="Trial">Trial</option>
                </select>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold form-label mb-2">Select
                Export Format:</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="format" data-control="select2"
                data-placeholder="Select a format" data-hide-search="true"
                class="form-select form-select-solid fw-bold">
                <option></option>
                <option value="excel">Excel</option>
                <option value="pdf">PDF</option>
                <option value="cvs">CVS</option>
                <option value="zip">ZIP</option>
            </select>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="reset" class="btn btn-light me-3"
            data-kt-users-modal-action="cancel">Discard</button>
            <button type="submit" class="btn btn-primary"
            data-kt-users-modal-action="submit">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait...
                <span
                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->
<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add <span style="text-transform: capitalize;">{{$user_type}}</span></h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                data-kt-users-modal-action="close">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1" onclick="closemodal()">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="17.3137"
                    width="16" height="2" rx="1"
                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                    <rect x="7.41422" y="6" width="16"
                    height="2" rx="1"
                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
    </div>
    <!--end::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body scroll-y mx-5 mx-xl-15 ">
        <!--begin::Form-->
        <form method="POST" action="{{ route('users.store') }}"  role="form" id="createNewForm" enctype="multipart/form-data">
            @csrf

            <!--begin::Modal body-->

            <!--begin::Form-->

            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" >
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                 <!--begin::Label-->
                 <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                 <!--end::Label-->
                 <!--begin::Image placeholder-->
                 <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                 <!--end::Image placeholder-->
                 <!--begin::Image input-->
                 <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/blank.png);"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                       <i class="bi bi-pencil-fill fs-7"></i>
                       <!--begin::Inputs-->
                       <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                       <input type="hidden" name="avatar_remove" />
                       <!--end::Inputs-->
                   </label>
                   <!--end::Label-->
                   <!--begin::Cancel-->
                   <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                       <i class="bi bi-x fs-2"></i>
                   </span>
                   <!--end::Cancel-->
                   <!--begin::Remove-->
                   <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                       <i class="bi bi-x fs-2"></i>
                   </span>
                   <!--end::Remove-->
               </div>
               <!--end::Image input-->
               <!--begin::Hint-->
               <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
               <!--end::Hint-->
           </div>
           <!--end::Input group-->
           <!--begin::Input group-->
           <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">Full Name</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name"  />
             <!--end::Input-->
         </div>
         <!--end::Input group-->
         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">Email</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com"  />
             <!--end::Input-->
         </div>
         <!--end::Input group-->
         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">Password</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="text" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="password"  />
             <!--end::Input-->
         </div>
         <!--end::Input group-->
         <!--begin::Input group-->
         <div class="fv-row mb-7">
             <!--begin::Label-->
             <label class="required fw-semibold fs-6 mb-2">Phone</label>
             <!--end::Label-->
             <!--begin::Input-->
             <input type="number" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="03328214888" />
             <!--end::Input-->
         </div>
         <!--end::Input group-->
         <input type="hidden" name="user_type" value="{{$user_type}}">
          @if($user_type=='coach')
        <div class="mb-10">
            <h5>Coach Permissions</h5>
       <input type="checkbox" name="nutrition_deployment"> <label>&nbsp;Nutrition Deployment</label><br>
       <input type="checkbox" name="program_deployment"> <label>&nbsp;Program Deployments</label><br>
        <input type="checkbox" name="pdf_deployments"><label>&nbsp;PDF Deployments</label><br>
        </div>
        @endif
         @if($user_type=='user')
         <div class="mb-10">
            {{ Form::label('athletic_type','', array('class' => 'form-label')) }}
            {{-- {{ Form::text('athletic_type', $user->athletic_type, ['class' => 'form-control' . ($errors->has('athletic_type') ? ' is-invalid' : ''), 'placeholder' => 'Athletic Type']) }} --}}
            <select class="form-control" name="athletic_type" id="">
                <option value="" disabled selected>Select Athletic</option>
                @foreach ($athleticTypes as $mp)
                <option value="{{$mp->id}}">{{$mp->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('athletic_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('height','', array('class' => 'form-label')) }}
            {{ Form::text('height', $user->height, ['class' => 'form-control' . ($errors->has('height') ? ' is-invalid' : ''), 'placeholder' => 'Height']) }}
            {!! $errors->first('height', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('age','', array('class' => 'form-label')) }}
            {{ Form::text('age', $user->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('gender','', array('class' => 'form-label')) }}
            {{-- {{ Form::text('gender', $user->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }} --}}
            <select class="form-control" name="gender" id="">
                <option value="" disabled selected>Select User Type</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
    </div>
    <!--end::Scroll-->
    <!--begin::Actions-->
    <div class="text-center pt-15">
        <div class="error-area"></div>
      <button type="reset" class="btn btn-light me-3" onclick="closemodal()">Discard</button>
      <button type="submit"  class="btn btn-primary" data-kt-users-modal-action="submit">
         <span class="indicator-label">Submit</span>
         <span class="indicator-progress">Please wait...
             <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
         </button>

         <!--end::Form-->
     </div>
     <!--end::Modal body-->

 </form>
 <!--end::Form-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->
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

                <th>Phone</th>
                <th>User Type</th>
                <th>Active</th>
                <th>Created By</th>


                <th class="min-w-125px">Created At</th>
                <th class="text-end min-w-100px">Actions</th>
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
                <td> <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                    @if($user->avatar!=null)
                        <img alt="Pic" src="{{asset('storage/').'/'.$user->avatar}}" style=" object-fit: cover;" />
                        @else
                        <img alt="Pic" src="assets/media/avatars/blank.png" style=" object-fit: cover;" />
                        @endif

                        
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div   class="text-gray-800 text-hover-primary mb-1 ms-5">
                        {{ $user->name }}
                        <div class="fw-semibold text-muted">{{$user->email}}</div>
                    </div>
                    <!--end::Details-->
                </div></td>
                <!--begin::Joined-->

                <td>{{ $user->phone }}</td>
                <td>{{ $user->user_type }}</td>
                @if($user->is_active==1)
                <td>
                    <div class="badge badge-light-primary fw-bold">Active</div>

                </td>
                @else
                <td>
                    <div class="badge badge-light-danger fw-bold">Rejected</div>

                </td>

                @endif
                 <td> <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">

                        @isset($user->userCreator->avatar)
                        <img alt="Pic" src="{{asset('storage/').'/'.@$user->userCreator->avatar}}" style=" object-fit: cover;" />
                        @endisset
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div   class="text-gray-800 mb-1 ms-5">
                        {{@$user->userCreator->name}}
                        <div class="fw-semibold text-muted">{{@$user->userCreator->user_type}}</div>
                    </div>
                    <!--end::Details-->
                </div></td>

                <td>{{date('d-M-Y',strtotime($user->created_at))}}</td>
                <!--begin::Joined-->
                <!--begin::Action=-->
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm " 
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                        fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
            data-kt-menu="true">
            <!--begin::Menu item-->
             <div class="menu-item px-3"  onclick="showInfoModal('{{$user->id}}')" >
                                                   <a class="menu-link px-3">View</a> 
                                                </div>
            <div class="menu-item px-3">
                <a href="{{ route('users.edit',$user->id) }}"
                    class="menu-link px-3">Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->


                <form class="menu-item px-3" action="{{ route('users.destroy',$user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="menu-link px-3"
                    data-kt-users-table-filter="delete_row" style="background-color: white;
                    border: none;" > Delete</button>
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

    $(document).on("submit", "form", function(event)
    {
        event.preventDefault();
        
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (data, status)
            {
                location.reload();
            },
            error: function (data)
            {
                  var response = JSON.parse(data.responseText);
        var errorString = '<ul>';
        $.each( response.errors, function( key, value) {
            errorString += '<li>' + value + '</li>';
        });
        errorString += '</ul>';
        $('.error-area').html('')
        $('.error-area').append(errorString);

            }
        });

    });
    function showInfoModal(id){
        $.get("{{route('users-get')}}?id="+id, function(data, status){
            var t="<ul class='setAllInfo'>";
            var p="</ul>";
            // console.log(data);
            var one="<li ><strong>Name: </strong>"+data.exerciseCategory.name+"</li>";
            one+="<li><strong>Phone:</strong> "+data.exerciseCategory.phone+"</li>";
            one+="<li><strong>User Type:</strong> "+data.exerciseCategory.user_type+"</li>";
            one+="<li><strong>Height:</strong> "+data.exerciseCategory.height+"</li>";
            one+="<li><strong>Age:</strong> "+data.exerciseCategory.age+"</li>";
            one+="<li><strong>Gender:</strong> "+data.exerciseCategory.gender+"</li>";
            one+="<li><strong>Email:</strong> "+data.exerciseCategory.email+"</li>";

            for (var i = data.permissions.length - 1; i >= 0; i--) {
                
            one+="<li>Permission: "+data.permissions[i].name+"</li>";

            }
            $('#userInfoModalSubHeading').html('User Info');
            $('#userInfoModalHeading').html('Users');
            $('#setAllInfo').html(t+one+p);
    // console.log(data);
});
        $("#kt_modal_users_search").modal('show');
    }


</script>
@endsection
