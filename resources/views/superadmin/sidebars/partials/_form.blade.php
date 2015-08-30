
<div class="row">
  <div class="col s12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, array('class' => '', 'placeholder' => 'Sidebar Name')) !!}
  </div>
  <div class="col s12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, array('class' => 'materialize-textarea', 'placeholder' => 'Sidebar description ...')) !!}
  </div>
  <div class="col s12">
    {!! Form::select('active', array( '1' => 'Active', '0' => 'Inactive'), null, array('class' => 'form-control input-sm')) !!}
  </div>
</div>

<p>{!! Form::submit($submit_text, ['class'=>'btn btn-success green right']) !!}</p>
