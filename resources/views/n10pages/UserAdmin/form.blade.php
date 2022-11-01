<form method="POST" id="crud-form" action="{{ route('user.admin.store') }}" role="form" enctype="multipart/form-data">
    @csrf
    @if($user)
        <input type="hidden" name="id" value="{{ $user->id }}">
    @endif
    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
        <div class="image-input-wrapper w-125px h-125px"
             style="background-image: url(http://localhost:8000/storage/{{ @$user->avatar }});  background-size: 125px 125px;"></div>
        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
               data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
               data-bs-original-title="Change avatar" data-kt-initialized="1">
            <i class="bi bi-pencil-fill fs-7"></i>
            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
            <input type="hidden" name="avatar_remove">
        </label>
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
              data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
              data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
              data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
              data-bs-original-title="Remove avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
    </div>

    <div class="mb-10">
        <label for="first_name" class="form-label">First Name</label>
        <input class="form-control" placeholder="First Name" name="first_name" type="text" id="first_name"
               value="{{ @$user->first_name }}">
    </div>

    <div class="mb-10">
        <label for="last_name" class="form-label">Last Name</label>
        <input class="form-control" placeholder="Last Name" name="last_name" type="text" id="last_name"
               value="{{ $user->last_name }}">
    </div>

    <div class="mb-10">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" placeholder="Email" name="email" type="text" id="email" value="{{ $user->email }}">
    </div>

    <div class="mb-10">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" placeholder="password" name="password" type="text" value="" id="password">
    </div>

    <div class="mb-10">
        <label for="phone" class="form-label">Phone</label>
        <input class="form-control" placeholder="Phone" name="phone" type="text" id="phone" value="{{ $user->phone }}">
    </div>

    <input type="hidden" name="is_active" value="1">

    <div class="error-area"></div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
