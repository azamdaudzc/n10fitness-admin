@extends('layouts.main-layout')

@section('template_title')
    {{ $exerciseLibrary->name ?? 'Show Exercise Library' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Exercise Library</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exercise-libraries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $exerciseLibrary->name }}
                        </div>
                        <div class="form-group">
                            <strong>Video Link:</strong>
                            {{ $exerciseLibrary->video_link }}
                        </div>
                        <div class="form-group">
                            <strong>Avatar:</strong>
                            {{ $exerciseLibrary->avatar }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $exerciseLibrary->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Equipment Id:</strong>
                            {{ $exerciseLibrary->equipment_id }}
                        </div>
                        <div class="form-group">
                            <strong>Movement Pattern Id:</strong>
                            {{ $exerciseLibrary->movement_pattern_id }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $exerciseLibrary->created_by }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $exerciseLibrary->description }}
                        </div>
                        <div class="form-group">
                            <strong>Top Three Cues:</strong>
                            {{ $exerciseLibrary->top_three_cues }}
                        </div>
                        <div class="form-group">
                            <strong>Approved By:</strong>
                            {{ $exerciseLibrary->approved_by }}
                        </div>
                        <div class="form-group">
                            <strong>Rejected By:</strong>
                            {{ $exerciseLibrary->rejected_by }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
