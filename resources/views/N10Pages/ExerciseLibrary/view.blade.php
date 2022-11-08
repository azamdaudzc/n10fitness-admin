<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="../../demo24/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Name</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{$data->name}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Top Three Cues</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$data->top_three_cues}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Description</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$data->description}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Video Link</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <a href="{{$data->video_link}}" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$data->video_link}}</a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Category
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1"></i></label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{$data->exerciseCategory->name}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
      <!--begin::Input group-->
      <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Equipment
        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1"></i></label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bold fs-6 text-gray-800">{{$data->exerciseEquipment->name}}</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
       <!--begin::Input group-->
       <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Movement Pattern
        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1"></i></label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bold fs-6 text-gray-800">{{$data->exerciseMovementPattern->name}}</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    </div>
    <!--end::Card body-->
</div>
