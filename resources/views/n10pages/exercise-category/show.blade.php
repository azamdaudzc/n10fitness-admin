@extends('layouts.main-layout')

@section('template_title')
    {{ $exerciseCategory->name ?? 'Show Exercise Category' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Exercise Category</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exercise-categories.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $exerciseCategory->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
