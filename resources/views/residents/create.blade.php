@extends('partials.master')
@section('title', 'Barangay Information System')
@section('page_title', 'Add Resident')
@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-right">
          <br/>
          <a class="btn btn-primary" href="{{ route('residents.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
      </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'residents.store', 'method'=>'POST']) }}
        @include('residents.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection
