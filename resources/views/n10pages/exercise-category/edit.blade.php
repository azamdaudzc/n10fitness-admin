@extends('layouts.main-layout')

@section('template_title')
    Update Exercise Category
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Exercise Category</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createNewForm" action="{{ route('exercise-categories.update', $exerciseCategory->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('n10pages.exercise-category.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
