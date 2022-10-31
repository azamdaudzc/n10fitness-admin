@extends('layouts.main-layout')

@section('template_title')
    Create Excercise Library Muscle
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Excercise Library Muscle</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createNewForm" action="{{ route('excercise-library-muscles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('n10pages.excercise-library-muscle.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
