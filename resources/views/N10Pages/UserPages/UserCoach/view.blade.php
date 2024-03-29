@extends('layouts.main-layout')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body" id="user_info_area">
                            <!--begin::Summary-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                </div>
                <div class="card mb-5 mb-xl-8">
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 @isset($assign) @else active @endif" data-bs-toggle="tab"
                                href="#kt_user_view_overview_tab">Overview</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#kt_user_view_overview_security">Profile</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 @isset($assign) active @endif"  data-bs-toggle="tab"
                                href="#kt_user_view_overview_events_and_logs_tab">Clients</a>
                        </li>
                        <!--end:::Tab item-->

                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade @isset($assign) @else show active @endif" id="kt_user_view_overview_tab" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card card-flush mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header mt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title flex-column">
                                        <h2 class="mb-1">User's Schedule</h2>
                                        <div class="fs-6 fw-semibold text-muted">2 upcoming meetings</div>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-light-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                            <!--SVG file not found: media/icons/duotune/art/art008.svg-->
                                            Add Schedule
                                        </button>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9 pt-4">
                                    <!--begin::Dates-->
                                    <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bolder">21</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active"
                                                data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bolder">22</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bolder">23</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                <span class="fs-6 fw-bolder">24</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                <span class="fs-6 fw-bolder">25</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                <span class="fs-6 fw-bolder">26</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                <span class="fs-6 fw-bolder">27</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bolder">28</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bolder">29</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bolder">30</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_10">
                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                <span class="fs-6 fw-bolder">31</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                    </ul>
                                    <!--end::Dates-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_0" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Peter Marcus</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog
                                                        Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team
                                                        Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project
                                                        Review & Testing</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard
                                                        UI/UX Design Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Kendell Trevor</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_2" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard
                                                        UI/UX Design Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Karina Clarke</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_3" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog
                                                        Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch
                                                        Proposal</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch
                                                        Proposal</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_4" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Karina Clarke</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Team Backlog
                                                        Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_5" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Terry Robins</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_6" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch
                                                        Proposal</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team
                                                        Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Kendell Trevor</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Project
                                                        Review & Testing</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Karina Clarke</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Karina Clarke</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Kendell Trevor</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_7" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard
                                                        UI/UX Design Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Sales Pitch
                                                        Proposal</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Yannis Gloverson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Dashboard
                                                        UI/UX Design Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Kendell Trevor</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_8" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team
                                                        Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Weekly Team
                                                        Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_9" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing
                                                        Campaign Discussion</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Terry Robins</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing
                                                        Campaign Discussion</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_10" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Marketing
                                                        Campaign Discussion</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-dark text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card card-flush mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header mt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title flex-column">
                                        <h2 class="mb-1">User's Tasks</h2>
                                        <div class="fs-6 fw-semibold text-muted">Total 25 tasks in backlog</div>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-light-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                                        fill="currentColor" />
                                                    <rect x="11" y="19" width="10" height="2"
                                                        rx="1" transform="rotate(-90 11 19)"
                                                        fill="currentColor" />
                                                    <rect x="7" y="13" width="10" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Add Task
                                        </button>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Label-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Create
                                                FureStibe branding logo</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">Due in 1 day
                                                <a href="#">Karina Clark</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Task menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold">Update Status</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Process</option>
                                                        <option value="4">Rejected</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-users-update-task-status="reset">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">Apply</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Label-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Schedule a
                                                meeting with FireBear CTO John</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">Due in 3 days
                                                <a href="#">Rober Doe</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Task menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold">Update Status</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Process</option>
                                                        <option value="4">Rejected</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-users-update-task-status="reset">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">Apply</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Label-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">9 Degree
                                                Project Estimation</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">Due in 1 week
                                                <a href="#">Neil Owen</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Task menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold">Update Status</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Process</option>
                                                        <option value="4">Rejected</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-users-update-task-status="reset">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">Apply</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Label-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Dashboard
                                                UI & UX for Leafr CRM</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">Due in 1 week
                                                <a href="#">Olivia Wild</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Task menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold">Update Status</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Process</option>
                                                        <option value="4">Rejected</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-users-update-task-status="reset">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">Apply</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center position-relative">
                                        <!--begin::Label-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Mivy App
                                                R&D, Meeting with clients</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">Due in 2 weeks
                                                <a href="#">Sean Bean</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Task menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold">Update Status</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-semibold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Process</option>
                                                        <option value="4">Rejected</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-users-update-task-status="reset">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">Apply</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Tasks-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5" id="profile_form">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive table-wth-minh">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5"
                                            id="kt_table_users_login_session">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td>Email</td>
                                                    <td>smith@kpmg.com</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_email">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td>******</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_password">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td>Administrator</td>
                                                    <td class="text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_role">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->


                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade @isset($assign) show active @endif"
                                id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Appointed Clients</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_add_client">
                                                <!--SVG file not found: media/icons/duotune/art/art008.svg-->
                                                Add Client
                                            </button>
                                            <!--end::Filter-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0 pb-5">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive table-wth-minh">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="users_table">
                                                <thead>
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th>User</th>
                                                        <th>Athletic Type</th>
                                                        <th>Age</th>
                                                        <th>Height</th>
                                                        <th>Gender</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->


                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
    <!--begin::Modals-->
    <!--begin::Modal - Update user details-->
    <div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="#" id="kt_modal_update_user_form">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_update_user_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Update User Details</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header"
                            data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                            <!--begin::User toggle-->
                            <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                href="#kt_modal_update_user_user_info" role="button" aria-expanded="false"
                                aria-controls="kt_modal_update_user_user_info">User Information
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::User toggle-->
                            <!--begin::User form-->
                            <div id="kt_modal_update_user_user_info" class="collapse show">
                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>Update Avatar</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('assets/media/svg/avatars/blank.svg');
                                            }

                                            [data-theme="dark"] .image-input-placeholder {
                                                background-image: url('assets/media/svg/avatars/blank-dark.svg');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder"
                                            data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(assets/media/avatars/300-6.jpg">
                                            </div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="name" value="Emma Smith" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>Email</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Email address must be active"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" placeholder=""
                                        name="email" value="smith@kpmg.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="description" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Language</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="language" aria-label="Select a Language" data-control="select2"
                                        data-placeholder="Select a Language..." class="form-select form-select-solid"
                                        data-dropdown-parent="#kt_modal_update_details">
                                        <option></option>
                                        <option value="id">Bahasa Indonesia - Indonesian</option>
                                        <option value="msa">Bahasa Melayu - Malay</option>
                                        <option value="ca">Català - Catalan</option>
                                        <option value="cs">Čeština - Czech</option>
                                        <option value="da">Dansk - Danish</option>
                                        <option value="de">Deutsch - German</option>
                                        <option value="en">English</option>
                                        <option value="en-gb">English UK - British English</option>
                                        <option value="es">Español - Spanish</option>
                                        <option value="fil">Filipino</option>
                                        <option value="fr">Français - French</option>
                                        <option value="ga">Gaeilge - Irish (beta)</option>
                                        <option value="gl">Galego - Galician (beta)</option>
                                        <option value="hr">Hrvatski - Croatian</option>
                                        <option value="it">Italiano - Italian</option>
                                        <option value="hu">Magyar - Hungarian</option>
                                        <option value="nl">Nederlands - Dutch</option>
                                        <option value="no">Norsk - Norwegian</option>
                                        <option value="pl">Polski - Polish</option>
                                        <option value="pt">Português - Portuguese</option>
                                        <option value="ro">Română - Romanian</option>
                                        <option value="sk">Slovenčina - Slovak</option>
                                        <option value="fi">Suomi - Finnish</option>
                                        <option value="sv">Svenska - Swedish</option>
                                        <option value="vi">Tiếng Việt - Vietnamese</option>
                                        <option value="tr">Türkçe - Turkish</option>
                                        <option value="el">Ελληνικά - Greek</option>
                                        <option value="bg">Български език - Bulgarian</option>
                                        <option value="ru">Русский - Russian</option>
                                        <option value="sr">Српски - Serbian</option>
                                        <option value="uk">Українська мова - Ukrainian</option>
                                        <option value="he">עִבְרִית - Hebrew</option>
                                        <option value="ur">اردو - Urdu (beta)</option>
                                        <option value="ar">العربية - Arabic</option>
                                        <option value="fa">فارسی - Persian</option>
                                        <option value="mr">मराठी - Marathi</option>
                                        <option value="hi">हिन्दी - Hindi</option>
                                        <option value="bn">বাংলা - Bangla</option>
                                        <option value="gu">ગુજરાતી - Gujarati</option>
                                        <option value="ta">தமிழ் - Tamil</option>
                                        <option value="kn">ಕನ್ನಡ - Kannada</option>
                                        <option value="th">ภาษาไทย - Thai</option>
                                        <option value="ko">한국어 - Korean</option>
                                        <option value="ja">日本語 - Japanese</option>
                                        <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                        <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::User form-->
                            <!--begin::Address toggle-->
                            <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                href="#kt_modal_update_user_address" role="button" aria-expanded="false"
                                aria-controls="kt_modal_update_user_address">Address Details
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Address toggle-->
                            <!--begin::Address form-->
                            <div id="kt_modal_update_user_address" class="collapse show">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Address Line 1</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="address1"
                                        value="101, Collins Street" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="address2" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Town</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="city"
                                        value="Melbourne" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">State / Province</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="state"
                                            value="Victoria" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Post Code</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="postcode"
                                            value="3000" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>Country</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Country of origination"></i>
                                    </label>
                                    <!--end::Label-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Address form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" class="btn btn-light me-3"
                            data-kt-users-modal-action="cancel">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - Update user details-->
    <!--begin::Modal - Add schedule-->
    <div class="modal fade" id="kt_modal_add_client" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Client</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="closeModal()">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form id="kt_modal_add_client_form" method="POST" class="form"
                        action="{{ route('user.coach.attachclient') }}">
                        @csrf
                        <input type="hidden" name="coach_id" id="" value="{{ $user->id }}">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->

                            <label class="required fs-6 fw-semibold form-label mb-2">Client Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select select-2-setup" data-control="select2"
                                data-placeholder="Select A Client" name="client_id" id="movement_pattern">
                                <option></option>
                                @foreach ($all_users as $u)
                                    <option value="{{ $u->id }}">{{ $u->first_name }} {{ $u->last_name }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel"
                                onclick="closeModal()">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Add schedule-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add a Task</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form id="kt_modal_add_task_form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="task_name"
                                value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Task Due Date</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate"
                                id="kt_modal_add_task_datepicker" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid rounded-3"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Add task-->
    <!--begin::Modal - Update email-->
    <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Email Address</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form id="kt_modal_update_email_form" class="form" action="#">
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                        rx="10" fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">Please note that a valid email address is
                                        required to complete the email verification.</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Email Address</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="profile_email"
                                value="smith@kpmg.com" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Update email-->
    <!--begin::Modal - Update password-->
    <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Password</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form id="kt_modal_update_password_form" class="form" action="#">
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="current_password" autocomplete="off" />
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold fs-6 mb-2">New Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="new_password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                    </div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                    </div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                    </div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
                                symbols.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="confirm_password" autocomplete="off" />
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Update password-->
    <!--begin::Modal - Update role-->
    <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update User Role</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form id="kt_modal_update_role_form" class="form" action="#">
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                        rx="10" fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">Please note that reducing a user role rank,
                                        that user will lose all priviledges that was assigned to the previous role.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-5">
                                <span class="required">Select a user role</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input row-->
                            <div class="d-flex">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                        id="kt_modal_update_role_option_0" checked='checked' />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                                        <div class="fw-bold text-gray-800">Administrator</div>
                                        <div class="text-gray-600">Best for business owners and company
                                            administrators</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="1"
                                        id="kt_modal_update_role_option_1" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_1">
                                        <div class="fw-bold text-gray-800">Developer</div>
                                        <div class="text-gray-600">Best for developers or people primarily using
                                            the API</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                        id="kt_modal_update_role_option_2" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_2">
                                        <div class="fw-bold text-gray-800">Analyst</div>
                                        <div class="text-gray-600">Best for people who need full access to
                                            analytics data, but don't need to update business settings</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                        id="kt_modal_update_role_option_3" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_3">
                                        <div class="fw-bold text-gray-800">Support</div>
                                        <div class="text-gray-600">Best for employees who regularly refund
                                            payments and respond to disputes</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="user_role" type="radio" value="4"
                                        id="kt_modal_update_role_option_4" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_4">
                                        <div class="fw-bold text-gray-800">Trial</div>
                                        <div class="text-gray-600">Best for people who need to preview content
                                            data, but don't need to make any updates</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Update role-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Authenticator App</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <!--begin::Content-->
                    <div class="fw-bold d-flex flex-column justify-content-center mb-5">
                        <!--begin::Label-->
                        <div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
                            <a href="#">Authenticator app</a>, add a new account, then scan this barcode to
                            set up your account.
                        </div>
                        <div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download
                            the
                            <a href="#">Authenticator app</a>, add a new account, then enter this code to
                            set up your account.
                        </div>
                        <!--end::Label-->
                        <!--begin::QR code-->
                        <div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
                            <img src="assets/media/misc/qr.png" alt="Scan this QR code" />
                        </div>
                        <!--end::QR code-->
                        <!--begin::Text code-->
                        <div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
                            <div class="fs-1">gi2kdnb54is709j</div>
                        </div>
                        <!--end::Text code-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Action-->
                    <div class="d-flex flex-center">
                        <div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code
                            manually</div>
                        <div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan
                            barcode instead</div>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Enable One Time Password</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
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
                    <form class="form" id="kt_modal_add_one_time_password_form">
                        <!--begin::Label-->
                        <div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.
                        </div>
                        <!--end::Label-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Mobile number</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="A valid mobile number is required to receive the one-time password to validate your account login."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="otp_mobile_number"
                                placeholder="+6123 456 789" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator saperator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Email</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" class="form-control form-control-solid" name="otp_email"
                                value="smith@kpmg.com" readonly="readonly" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Confirm password</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" class="form-control form-control-solid" name="otp_confirm_password"
                                value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-users-modal-action="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Add task-->
    <!--end::Modals-->
    </div>
    <!--end::Content container-->
    </div>
@endsection

@section('page_scripts')
    <script>
        $(function() {
            loadForm();
            loadInfo();
            $('.select-2-setup').select2();
        });

        let table = $('#users_table').DataTable({
            pageLength: 50,
            lenghtChange: false,
            ajax: {
                url: "{{ route('user.coach.assigedclients', $user->id) }}",
            },
            columns: [{
                    data: 'user'
                },
                {
                    data: 'athletic_type'
                },
                {
                    data: 'age'
                },
                {
                    data: 'height'
                },
                {
                    data: 'gender'
                },
                {
                    data: 'actions'
                },
            ],
        });

        function loadForm() {
            let id = "{{ $user->id }}";
            let form_body = $('#profile_form');

            $.post('{{ route('user.coach.details') }}', {
                _token: '{{ csrf_token() }}',
                id
            }, function(d) {
                form_body.html(d);
            });
        }

        function loadInfo() {
            let id = "{{ $user->id }}";
            let form_body = $('#user_info_area');

            $.post('{{ route('user.coach.info') }}', {
                _token: '{{ csrf_token() }}',
                id
            }, function(d) {
                form_body.html(d);
            });
        }

        $('body').on('click', '.delete_record', function() {
            let id = $(this).attr('data-id');

            Swal.fire({
                html: `Are you sure you want to delete this client`,
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
                    $.post('{{ route('user.coach.deleteclient') }}', {
                        _token: '{{ csrf_token() }}',
                        id
                    }, function(d) {
                        if (d.success == true) {
                            toastr.success(d.msg);
                            table.ajax.reload(null, false);
                        }
                    });
                }
            });
        });

        function closeModal() {
            $('#kt_modal_add_client').modal('hide');
        }


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
                        loadForm();
                        loadInfo();
                        table.ajax.reload(null, false);
                        closeModal();

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
    </script>
@endsection
