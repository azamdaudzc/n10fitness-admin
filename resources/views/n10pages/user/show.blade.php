@extends('layouts.main-layout')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $user->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $user->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Avatar:</strong>
                            {{ $user->avatar }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $user->phone }}
                        </div>
                        <div class="form-group">
                            <strong>User Type:</strong>
                            {{ $user->user_type }}
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            {{ $user->is_active }}
                        </div>
                        <div class="form-group">
                            <strong>Athletic Type:</strong>
                            {{ $user->athletic_type }}
                        </div>
                        <div class="form-group">
                            <strong>Height:</strong>
                            {{ $user->height }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $user->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $user->gender }}
                        </div>
                        <div class="form-group">
                            <strong>User Checkin:</strong>
                            {{ $user->user_checkin }}
                        </div>
                        <div class="form-group">
                            <strong>Change Password:</strong>
                            {{ $user->change_password }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
