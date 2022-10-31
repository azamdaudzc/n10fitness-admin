@extends('layouts.main-layout')

@section('template_title')
    {{ $exerciseMovementPattern->name ?? 'Show Exercise Movement Pattern' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Exercise Movement Pattern</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exercise-movement-patterns.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $exerciseMovementPattern->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
