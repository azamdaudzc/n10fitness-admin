<!-- 
<div class="card card-docs flex-row-fluid mb-2">
  
    <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">

        <div class="pb-10"> -->
            <div class="py-5">
                <div class="rounded border p-10">
                      <div class="mb-10">
        
             {{ Form::label('name', 'Name', array('class' => 'form-label')) }}
            {{ Form::text('name', $athleticType->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                  <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>

            </div>



<!--         </div>
    </div>
</div> -->