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
