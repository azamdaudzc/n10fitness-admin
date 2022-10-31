@extends('layouts.main-layout')

@section('template_title')
    {{ $excerciseLibraryMuscle->name ?? 'Show Excercise Library Muscle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Excercise Library Muscle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('excercise-library-muscles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $excerciseLibraryMuscle->name }}
                        </div>
                        <div class="form-group">
                            <strong>Exercise Library Id:</strong>
                            {{ $excerciseLibraryMuscle->exercise_library_id }}
                        </div>
                        <div class="form-group">
                            <strong>Excercise Muscle Id:</strong>
                            {{ $excerciseLibraryMuscle->excercise_muscle_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
