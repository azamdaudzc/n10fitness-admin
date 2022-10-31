@extends('layouts.main-layout')

@section('template_title')
    Update Athletic Type
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Athletic Type</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createNewForm" action="{{ route('athletic-types.update', $athleticType->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('n10pages.athletic-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
