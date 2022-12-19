 <!--begin::Sidebar-->
 <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="350px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
     <!--begin::Sidebar primary-->
     <div class="app-sidebar-primary">
         <!--begin::Logo-->
         <div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 pb-2" id="kt_app_sidebar_logo">
             <!--begin::Logo image-->
             <a href="{{url('/')}}">
                 <img alt="Logo" src="{{ asset('assets/media/logos/logo-white.png') }}" class="h-30px" />
             </a>
             <!--end::Logo image-->
         </div>
         <!--end::Logo-->
         <!--begin::Primary menu-->
         <div class="app-sidebar-menu flex-grow-1 hover-scroll-overlay-y my-5" id="kt_aside_menu_wrapper"
             data-kt-scroll="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
             <!--begin::Menu-->
             <div id="kt_aside_menu"
                 class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                 data-kt-menu="true">
                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     id="main_dashboard_menu" class="menu-item show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa fa-house fs-1"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="/" id="main_dashboard_menu_item">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Dashboard</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->






                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa fa-user fs-2"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">User</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('user.admin.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Admins</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('user.client.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Client</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('user.coach.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Coaches</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->


                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa-solid fa-dumbbell fs-2"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">Exercise Library</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->

                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('exercise.library.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Exercise Libraries</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->






                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" style="display: none"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa-solid fa-question-circle fs-2"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">User Checkin</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->

                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('checkin.questions.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Checkin Questions</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->






                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->

                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa-solid fa-fire fs-2"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">Warmups</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->

                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('warmup.builder.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Warmup Builder</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->






                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa-solid fa-id-card fs-2"></i>
                         </span>
                     </span>
                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">Programs</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->

                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('program.builder.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Coach Programs</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->






                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                     class="menu-item  show py-2">
                     <!--begin:Menu link-->
                     <span class="menu-link menu-center">
                         <span class="menu-icon me-0">
                             <i class="fa-solid fa-gear fs-2"></i>
                         </span>
                     </span>

                     <!--end:Menu link-->
                     <!--begin:Menu sub-->
                     <div class="menu-sub menu-sub-dropdown py-4 w-200px w-lg-225px">
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu content-->
                             <div class="menu-content">
                                 <span class="menu-section fs-5 fw-bolder ps-1 py-1">Settings</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('setting.movementpattern.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Movement Patterns</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('setting.equipment.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Equipments</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('setting.category.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Categories</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('setting.muscle.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Muscles</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->

                         <!--begin:Menu item-->
                         <div class="menu-item">
                             <!--begin:Menu link-->
                             <a class="menu-link " href="{{ route('setting.athletictype.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Athletic Types</span>
                             </a>
                             <!--end:Menu link-->
                         </div>
                         <!--end:Menu item-->


                     </div>
                     <!--end:Menu sub-->
                 </div>
                 <!--end:Menu item-->



             </div>
             <!--end::Menu-->
         </div>
         <!--end::Primary menu-->
         <div class="d-flex flex-column flex-center pb-8" id="kt_app_sidebar_footer_notification"
             style="border-radius: 24px">
             <div class="cursor-pointer symbol symbol-20px symbol-circle notification notification-main-icon"
                 data-kt-menu-trigger="{default: 'click', lg: 'click'}" data-kt-attach="parent"
                 data-kt-menu-placement="right-end">
                 <img alt="Logo" src="{{ asset('assets/media/sample/notification.png') }}" />
                 <span class="badge">{{getNotificationCount()}}</span>

             </div>
             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                 data-kt-menu="true">
                <!--begin::Heading-->
                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                style="background-image:url('{{asset('assets/media/misc/menu-header-bg.jpg')}}')">

                <!--begin::Title-->
                <h3 class="text-white fw-semibold mb-3">Notifications</h3>
                <!--end::Title-->
                <!--begin::Status-->
                <span class="badge bg-primary py-2 px-3">{{getNotificationCount()}} pending</span>
                <!--end::Status-->
            </div>
            <!--end::Heading-->
            <!--begin:Nav-->
            <div class="row g-0">
               <div class="card-body pt-0">
                   @foreach(getNotifications() as $notification)
                   <!--begin::Item-->
                   <div class="d-flex flex-stack">
                       <!--begin::Flag-->
                       <img src="assets/media/flags/united-states" class="me-4 w-25px" style="border-radius: 4px" alt="">
                       <!--end::Flag-->
                       <!--begin::Section-->
                       <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                           <!--begin::Content-->
                           <div class="me-5">
                               <!--begin::Title-->
                               <a href="{{notificationWhereToGo($notification->notification_type)}}" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$notification->name}}</a>
                               <!--end::Title-->
                               <!--begin::Desc-->
                               <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$notification->message}}</span>
                               <!--end::Desc-->

                           </div>
                           <!--end::Content-->

                       </div>
                       <!--end::Section-->
                   </div>
                   <!--end::Item-->
                   <!--begin::Separator-->
                   <div class="separator separator-dashed my-3"></div>
                   <!--end::Separator-->
                   @endforeach

               </div>
            </div>
            <!--end:Nav-->
            <!--begin::View more-->
            <div class="py-2 text-center border-top">
                <a href="#"
                    class="btn btn-color-gray-600 btn-active-color-primary">View All
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                    <span class="svg-icon svg-icon-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                            <path
                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
            </div>
            <!--end::View more-->

             </div>
         </div>

         <!--begin::Footer-->
         <div class="d-flex flex-column flex-center pb-8" id="kt_app_sidebar_footer" style="border-radius: 24px">
             <!--begin::User menu-->
             <div class="cursor-pointer symbol symbol-40px symbol-circle"
                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent"
                 data-kt-menu-placement="right-end">
                 @if (Auth::user()->avatar != null)
                     <img alt="Logo" src="{{  Auth::user()->avatar }}"
                         style=" object-fit: cover;" />
                 @else
                     <img alt="Logo" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                 @endif
             </div>
             <!--begin::User account menu-->
             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                 data-kt-menu="true">
                 <!--begin::Menu item-->
                 <div class="menu-item px-3">
                     <div class="menu-content d-flex align-items-center px-3">
                         <!--begin::Avatar-->
                         <div class="symbol symbol-50px me-5">
                             @if (Auth::user()->avatar != null)
                                 <img alt="Logo" src="{{  Auth::user()->avatar }}"
                                     style=" object-fit: cover;" />
                             @else
                                 <img alt="Logo" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                             @endif
                         </div>
                         <!--end::Avatar-->
                         <!--begin::Username-->
                         <div class="d-flex flex-column">
                             <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                 <label for="">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</label>
                             </div>
                             <a href="#"
                                 class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                         </div>
                         <!--end::Username-->
                     </div>
                 </div>
                 <!--end::Menu item-->
                 <!--begin::Menu separator-->
                 <div class="separator my-2"></div>
                 <!--end::Menu separator-->
                 <!--begin::Menu item-->
                 <div class="menu-item px-5">
                     @if (Auth::user()->user_type == 'admin')
                         <a href="{{ route('user.admin.profile') }}" class="menu-link px-5">My Profile</a>
                     @elseif (Auth::user()->user_type == 'client')
                         <a href="{{ route('user.client.profile') }}" class="menu-link px-5">My Profile</a>
                     @elseif (Auth::user()->user_type == 'coach')
                         <a href="{{ route('user.coach.profile') }}" class="menu-link px-5">My Profile</a>
                     @else
                     @endif
                 </div>
                 <!--end::Menu item-->



                 <!--begin::Menu separator-->
                 <div class="separator my-2"></div>
                 <!--end::Menu separator-->



                 <!--begin::Menu item-->
                 <div class="menu-item px-5">
                     <a href="{{ url('/logout') }}" class="menu-link px-5">Sign Out</a>

                 </div>
                 <!--end::Menu item-->
             </div>
             <!--end::User account menu-->
         </div>
         <!--end::Footer-->

     </div>
     <!--end::Sidebar primary-->
     <!--begin::Sidebar secondary-->
     <div class="app-sidebar-secondary ">
         <!--begin::Sidebar secondary menu-->
         <div class="menu menu-sub-indention menu-rounded menu-column menu-active-bg menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 py-4 py-lg-6 px-1 px-lg-5"
             id="kt_app_sidebar_secondary_menu" data-kt-menu="true">
             <div id="kt_app_sidebar_secondary_menu_wrapper" class="hover-scroll-y me-lg-n2 pe-lg-2"
                 data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                 data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_sidebar_secondary_menu"
                 data-kt-scroll-offset="20px">
                 <!--begin:Menu item-->
                 <div class="menu-item">
                     <!--begin:Menu content-->
                     <div class="menu-content">
                         <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                     </div>
                     <!--end:Menu content-->
                 </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                     <!--begin:Menu link-->
                     <a class="menu-link" href="/">
                         <span class="menu-bullet">
                             <span class="bullet bullet-dot"></span>
                         </span>
                         <span class="menu-title">Default</span>
                     </a>
                     <!--end:Menu link-->
                 </div>
                 <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link " href="{{ route('setting.movementpattern.index') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Movement Patterns</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link " href="{{ route('setting.equipment.index') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Equipments</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link " href="{{ route('setting.category.index') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Categories</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link " href="{{ route('setting.muscle.index') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Muscles</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link " href="{{ route('setting.athletictype.index') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Athletic Types</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

             </div>
         </div>
         <!--end::Sidebar secondary menu-->
     </div>
     <!--end::Sidebar secondary-->
     <!--begin::Sidebar secondary toggle-->

     <!--end::Sidebar secondary toggle-->
 </div>
 <!--end::Sidebar-->
