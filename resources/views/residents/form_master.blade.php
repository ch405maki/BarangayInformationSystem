<div class="row">
    <div class="col-sm-2">
      {!! form::label('name','name') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
        {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'name...']) }}
        {{ $errors->first('name', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('bosy','middlename') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('middlename') ? 'has-error' : "" }}">
        {{ Form::text('middlename',NULL, ['class'=>'form-control', 'id'=>'middlename', 'placeholder'=>'middlename...']) }}
        {{ $errors->first('middlename', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('bosy','lastname') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('lastname') ? 'has-error' : "" }}">
        {{ Form::text('lastname',NULL, ['class'=>'form-control', 'id'=>'lastname', 'placeholder'=>'lastname...']) }}
        {{ $errors->first('lastname', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
  
  <div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  </div>
  