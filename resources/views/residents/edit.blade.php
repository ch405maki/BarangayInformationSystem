@extends('partials.master')
@section('title', 'Barangay Information System')
@section('page_title', 'Edit Resident')
@section('content')

<div class="col-lg-12">
  <div class="pull-right">
      <br/>
      <a class="btn btn-primary" href="{{ route('residents.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
  </div>
</div>
</div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($resident,['route'=>['residents.update',$resident->id],'method'=>'PATCH']) }}
      @include('residents.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection