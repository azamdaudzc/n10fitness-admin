

<div class="py-5 col-12">
    <form method="POST" id="createNewForm" action="{{ route('user.admin.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
    <div class="rounded border p-10">
        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('storage/').'/'.$user->avatar}});  background-size: 125px 125px;" ></div>
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <i class="bi bi-pencil-fill fs-7"></i>
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="avatar_remove" />
            </label>
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
        </div>

        <div class="mb-10">
            {{ Form::label('first_name','', array('class' => 'form-label')) }}
            {{ Form::text('first_name', $user->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="mb-10">
            {{ Form::label('last_name','', array('class' => 'form-label')) }}
            {{ Form::text('last_name', $user->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="mb-10">
            {{ Form::label('email','', array('class' => 'form-label')) }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('password','', array('class' => 'form-label')) }}
            {{ Form::text('password', '', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('phone','', array('class' => 'form-label')) }}
            {{ Form::text('phone', $user->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <input type="hidden" name="user_type" value="{{$user->user_type}}">
        <input type="hidden" name="is_active" value="1">
        @if($user->user_type=='coach')
        <div class="mb-10">
            <h5>Coach Permissions</h5>
            <input type="checkbox" name="nutrition_deployment" @if($nutrition_deployment_checked==1) checked @endif> <label>&nbsp;Nutrition Deployment</label><br>
            <input type="checkbox" name="program_deployment" @if($program_deployment_checked==1) checked @endif> <label>&nbsp;Program Deployments</label><br>
            <input type="checkbox" name="pdf_deployments" @if($pdf_deployments_checked==1) checked @endif><label>&nbsp;PDF Deployments</label><br>
        </div>
        @endif
        <input type="hidden" name="area" value="a">
        @if($user->user_type=='user')
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

        <div class="error-area"></div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>

