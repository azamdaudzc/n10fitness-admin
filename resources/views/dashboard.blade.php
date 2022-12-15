@extends('layouts.main-layout')
@section('content')



							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::Engage widget 1-->
											<div class="card h-md-100">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column flex-center">
													<!--begin::Heading-->
													<div class="mb-2">
														<!--begin::Title-->
														<h1 class="fw-semibold text-gray-800 text-center lh-lg">N10 Fitness
														<br />
														<span class="fw-bolder">Welcome A New Client</span></h1>
														<!--end::Title-->
														<!--begin::Illustration-->
														<div class="py-10 text-center">
															<img src="{{asset('assets/media/svg/illustrations/easy/4.svg')}}" class="w-200px" alt="" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Heading-->

												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 1-->
										</div>
										<!--end::Col-->

                                        <div class="col-xl-4">
                                            <!--begin::List widget 11-->
                                            <div class="card card-flush h-xl-100">
                                                <!--begin::Header-->
                                                <div class="card-header pt-7 mb-3">
                                                    <!--begin::Title-->
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold text-gray-800">Total Stats</span>
                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
                                                    </h3>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Coaches</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of coaches</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="text-gray-400 fw-bold fs-7 text-end">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('users')->where('user_type','coach')->count('id')}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                   <!--begin::Item-->
                                                   <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Clients</a>
                                                            <!--end::Title-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of clients</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('users')->where('user_type','user')->count('id')}}</span>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Admins</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of admins</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="text-gray-400 fw-bold fs-7 text-end">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('users')->where('user_type','coach')->count('id')}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List widget 11-->
                                        </div>

                                        <div class="col-xl-4">
                                            <!--begin::List widget 11-->
                                            <div class="card card-flush h-xl-100">
                                                <!--begin::Header-->
                                                <div class="card-header pt-7 mb-3">
                                                    <!--begin::Title-->
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold text-gray-800">Total Stats</span>
                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
                                                    </h3>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Item-->

                                                    <!--end::Separator-->
                                                   <!--begin::Item-->
                                                   <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Programs</a>
                                                            <!--end::Title-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of programs</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('program_builders')->count('id')}}</span>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Warmups</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of warmups</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="text-gray-400 fw-bold fs-7 text-end">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('warmup_builders')->count('id')}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                   <!--begin::Item-->
                                                   <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Libraries</a>
                                                            <!--end::Title-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of exercise libraries</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('exercise_libraries')->count('id')}}</span>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->

                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List widget 11-->
                                        </div>


                                        <div class="col-xl-4">
                                            <!--begin::List widget 11-->
                                            <div class="card card-flush h-xl-100">
                                                <!--begin::Header-->
                                                <div class="card-header pt-7 mb-3">
                                                    <!--begin::Title-->
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold text-gray-800">Total Stats</span>
                                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
                                                    </h3>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Movement Patterns</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of exercise patterns</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="text-gray-400 fw-bold fs-7 text-end">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('exercise_movement_patterns')->count('id')}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                   <!--begin::Item-->
                                                   <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Muscles</a>
                                                            <!--end::Title-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of library muscles</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('exercise_muscles')->count('id')}}</span>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Athletic Types</a>
                                                                <!--end::Title-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of admins</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Wrapper-->
                                                        <div class="text-gray-400 fw-bold fs-7 text-end">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('athletic_types')->count('id')}}</span>
                                                            <!--end::Number-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Separator-->
                                                   <!--begin::Item-->
                                                   <div class="d-flex flex-stack">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label">
                                                                <i class="fonticon-ship fs-1 p-0 text-gray-600"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Equipments</a>
                                                            <!--end::Title-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Total number of exercise libraries</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Wrapper-->
                                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-6 d-block">{{DB::table('exercise_equipment')->count('id')}}</span>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Item-->

                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List widget 11-->
                                        </div>


                                        <div class="col-xl-4">
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{DB::table('users')->where('user_type','user')->whereMonth('created_at', \Carbon\Carbon::now()->month)->count('id')}}</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">New
                                                        Customers This Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                                <!--begin::Title-->
                                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                                                    Heroes</span>
                                                <!--end::Title-->
                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    @foreach(DB::table('users')->where('user_type','user')->whereMonth('created_at', \Carbon\Carbon::now()->month)->get() as $user)
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{$user->first_name[0]}}</span>
                                                    </div>
                                                    {{-- <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                        <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                                    </div> --}}
                                                 @endforeach

                                                </div>
                                                <!--end::Users group-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        </div>


									</div>
									<!--end::Row-->


								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->




		@endsection
        @section('page_scripts')
        <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="https://cn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
        <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/bidding.js') }}"></script>
        @endsection
