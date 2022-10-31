@extends('layouts.main-layout')

@section('template_title')
    {{ $athleticType->name ?? 'Show Athletic Type' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Athletic Type</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('athletic-types.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $athleticType->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
