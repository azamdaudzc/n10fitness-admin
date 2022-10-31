@extends('layouts.main-layout')

@section('template_title')
    {{ $exerciseMuscle->name ?? 'Show Exercise Muscle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Exercise Muscle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exercise-muscles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $exerciseMuscle->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
