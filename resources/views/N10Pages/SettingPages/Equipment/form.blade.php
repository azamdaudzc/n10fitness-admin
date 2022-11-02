<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    <div class="card-body py-5">

        <form method="POST" id="crud-form" action="{{ route('setting.equipment.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            @if($data)
            <input type="hidden" name="id" value="{{ $data->id }}">
            @endif

            <div class="mb-10">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" placeholder="Name" name="name" type="text" id="name"
                value="{{ @$data->name }}">
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
