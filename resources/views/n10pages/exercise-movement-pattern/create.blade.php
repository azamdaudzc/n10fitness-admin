@extends('layouts.main-layout')

@section('template_title')
    Create Exercise Movement Pattern
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Exercise Movement Pattern</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createNewForm" action="{{ route('exercise-movement-patterns.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('n10pages.exercise-movement-pattern.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
