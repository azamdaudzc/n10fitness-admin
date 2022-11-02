<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    <div class="card-body py-5">

        <form method="POST" id="crud-form" action="{{ route('exerciselibrary.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            @if($library)
            <input type="hidden" name="id" value="{{ $library->id }}">
            @endif
            <div class="fv-row mb-7">


                <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                    <div class="image-input-wrapper w-125px h-125px"  @if($library->avatar!=null)  style="background-image: url('{{asset("storage/".$library->avatar)}}');"@else style="background-image: url('{{asset("assets/media/svg/files/blank-image-dark.svg")}}')"@endif></div>
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <input type="file"  id="imgInp" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                    </label>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                </div>
                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>

            </div>

            <div class="mb-10">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" placeholder="Name" name="name" type="text" id="name"
                value="{{ @$library->name }}">
            </div>

            <div class="mb-10">
                <label for="video_link" class="form-label">Video Link</label>
                <input class="form-control" placeholder="Video Link" name="video_link" type="text" id="video_link"
                value="{{ $library->video_link }}">
            </div>

            <div class="mb-10">
                <label for="category" class="form-label">Category</label>
                <select class="form-select select-2-setup" data-control="select2" data-placeholder="Select A Category" name="category_id" id="category" >
                    <option></option>
                    @foreach ($categories as $mp)
                    <option value="{{$mp->id}}" @if($library->category_id==$mp->id) selected @endif>{{$mp->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="equipment" class="form-label">Equipment</label>
                <select class="form-select select-2-setup" data-control="select2" data-placeholder="Select An Equipment" name="equipment_id" id="equipment">
                    <option></option>
                    @foreach ($equipments as $mp)
                    <option value="{{$mp->id}}"  @if($library->equipment_id==$mp->id) selected @endif>{{$mp->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="movement_pattern" class="form-label">Movement Pattern</label>
                <select class="form-select select-2-setup" data-control="select2" data-placeholder="Select A Movement Pattern" name="movement_pattern_id" id="movement_pattern">
                    <option></option>
                    @foreach ($movement_patterns as $mp)
                    <option value="{{$mp->id}}" @if($library->movement_pattern_id==$mp->id) selected @endif>{{$mp->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="description" class="form-label">Description</label>
                <input class="form-control" placeholder="Description" name="description" type="text" id="description"
                value="{{ $library->description }}">
            </div>

            <div class="mb-10">
                <label for="top_three_cues" class="form-label">Top Three Cues</label>
                <input class="form-control" placeholder="Top Three Cues" name="top_three_cues" type="text" id="top_three_cues"
                value="{{ $library->top_three_cues }}">
            </div>

            <div class="error-area"></div>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary me-10" id="crud-form-submit-button">
                    <span class="indicator-label">
                        Submit
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>

        </form>
    </div>
</div>
