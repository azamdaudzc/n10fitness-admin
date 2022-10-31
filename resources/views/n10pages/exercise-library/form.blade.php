

<div class="py-5">
    <div class="rounded border p-10">

        <!--begin::Image input-->
        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
            <!--begin::Preview existing avatar-->
            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('storage/').'/'.$exerciseLibrary->avatar}});  background-size: 125px 125px;" ></div>
            <!--end::Preview existing avatar-->
            <!--begin::Label-->
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <i class="bi bi-pencil-fill fs-7"></i>
                <!--begin::Inputs-->
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="avatar_remove" />
                <!--end::Inputs-->
            </label>
            <!--end::Label-->
            <!--begin::Cancel-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <!--end::Cancel-->
            <!--begin::Remove-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <!--end::Remove-->
        </div>

        <!--end::Image input-->
        <div class="mb-10">
            {{ Form::label('name','', array('class' => 'form-label')) }}
            {{ Form::text('name', $exerciseLibrary->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('video_link','', array('class' => 'form-label')) }}
            {{ Form::text('video_link', $exerciseLibrary->video_link, ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : ''), 'placeholder' => 'Video Link']) }}
            {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="mb-10">
            {{ Form::label('category','', array('class' => 'form-label')) }}
            {{-- {{ Form::text('category_id', $exerciseLibrary->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }} --}}
            <select class="form-control" name="category_id" id="" >
                <option value="" disabled @if($exerciseLibrary->category_id==null) selected @endif>Select Category</option>
                @foreach ($categories as $mp)
                <option value="{{$mp->id}}" @if($exerciseLibrary->category_id==$mp->id) selected @endif>{{$mp->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('equipment','', array('class' => 'form-label')) }}
            {{-- {{ Form::text('equipment_id', $exerciseLibrary->equipment_id, ['class' => 'form-control' . ($errors->has('equipment_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipment Id']) }} --}}
            <select class="form-control" name="equipment_id" id="">
                <option value="" disabled @if($exerciseLibrary->equipment_id==null) selected @endif>Select Equipment</option>
                @foreach ($equipments as $mp)
                <option value="{{$mp->id}}"  @if($exerciseLibrary->equipment_id==$mp->id) selected @endif>{{$mp->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('equipment_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('movement_pattern','', array('class' => 'form-label')) }}
            {{-- {{ Form::text('movement_pattern_id', $exerciseLibrary->movement_pattern_id, ['class' => 'form-control' . ($errors->has('movement_pattern_id') ? ' is-invalid' : ''), 'placeholder' => 'Movement Pattern Id']) }} --}}
            <select class="form-control" name="movement_pattern_id" id="">
                <option value="" disabled @if($exerciseLibrary->movement_pattern_id==null) selected @endif>Select Equipment</option>
                @foreach ($movement_patterns as $mp)
                <option value="{{$mp->id}}" @if($exerciseLibrary->movement_pattern_id==$mp->id) selected @endif>{{$mp->name}}</option>
                @endforeach
            </select>

            {!! $errors->first('movement_pattern_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="mb-10">
            {{ Form::label('description','', array('class' => 'form-label')) }}
            {{ Form::textarea('description', $exerciseLibrary->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('top_three_cues','', array('class' => 'form-label')) }}
            {{ Form::text('top_three_cues', $exerciseLibrary->top_three_cues, ['class' => 'form-control' . ($errors->has('top_three_cues') ? ' is-invalid' : ''), 'placeholder' => 'Top Three Cues']) }}
            {!! $errors->first('top_three_cues', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="error-area"></div>
        <div class="box-footer mt20">
            <button type="submit"  class="btn btn-primary">Submit</button>
        </div>
    </div>

</div>
@section('sub_page_scripts')
<script>


    $(document).on("submit", "form", function(event)
    {

        if($(this).attr("action")=="{{ $formRoute }}"){
            event.preventDefault();
            $.ajax({
                url: "{{ $formRoute }}",
                type: $(this).attr("method"),
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data, status)
                {
                    console.log(data);
                    if(data.approved_by==0 && data.rejected_by==0){
                        location.replace("{{route('exercise-libraries-requested')}}");
                    }
                    else if(data.approved_by!=0 ){
                        location.replace("{{route('exercise-libraries-approved')}}");
                    }
                    else if(data.rejected_by!=0){
                        location.replace("{{route('exercise-libraries-rejected')}}");
                    }

                },
                error: function (data)
                {
                    var response = JSON.parse(data.responseText);
                    var errorString = '<ul>';
                        $.each( response.errors, function( key, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul>';
                        $('.error-area').html('')
                        $('.error-area').append(errorString);

                    }

                });
            }

        });

    </script>
    @endsection
