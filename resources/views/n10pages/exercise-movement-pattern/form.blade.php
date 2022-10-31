

<div class="py-5">
    <div class="rounded border p-10">
       <div class="mb-10">
        {{ Form::label('name','', array('class' => 'form-label')) }}
        {{ Form::text('name', $exerciseMovementPattern->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
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
            window.location.replace("{{route('exercise-movement-patterns.index')}}");

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
