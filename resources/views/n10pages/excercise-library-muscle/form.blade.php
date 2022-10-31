

    <div class="py-5">
                <div class="rounded border p-10">
                     <div class="mb-10">
            {{ Form::label('name', 'Name', array('class' => 'form-label')) }}
            {{ Form::text('name', $excerciseLibraryMuscle->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
           {{ Form::label('name', 'Exercise Library Id', array('class' => 'form-label')) }}
            {{ Form::text('exercise_library_id', $excerciseLibraryMuscle->exercise_library_id, ['class' => 'form-control' . ($errors->has('exercise_library_id') ? ' is-invalid' : ''), 'placeholder' => 'Exercise Library Id']) }}
            {!! $errors->first('exercise_library_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-10">
            {{ Form::label('name', 'Excercise Muscle Id', array('class' => 'form-label')) }}
            {{ Form::text('excercise_muscle_id', $excerciseLibraryMuscle->excercise_muscle_id, ['class' => 'form-control' . ($errors->has('excercise_muscle_id') ? ' is-invalid' : ''), 'placeholder' => 'Excercise Muscle Id']) }}
            {!! $errors->first('excercise_muscle_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
               <div class="error-area"></div>
                  <div class="box-footer mt20">
                    <button type="button" onclick="submitCreateForm()" class="btn btn-primary">Submit</button>
                </div>
                </div>

            </div>

            <script>

     function submitCreateForm () {

      $.ajax({
        type:'{{$type}}',

         data: $('#createNewForm').serialize(),
         url:"{{ $formRoute }}",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
         success:function(data){
            window.location.replace("{{route('exercise-library-muscles.index')}}");
         },
         error:function(data){
          var response = JSON.parse(data.responseText);
        var errorString = '<ul>';
        $.each( response.errors, function( key, value) {
            errorString += '<li>' + value + '</li>';
        });
        errorString += '</ul>';
        $('.error-area').html('')
        $('.error-area').append(errorString);
        // alert(errorString);
         }
      });
    }

</script>
