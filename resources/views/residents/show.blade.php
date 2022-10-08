@extends('partials.master')
@section('title', 'Barangay Information System')
@section('page_title', 'Resident Info')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('residents.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group">
        <label for="Name">Name</label>
        {{ $resident->name}}
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group">
        <label for="Name">MiddleName</label>
        {{ $resident->middlename}}
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group">
        <label for="Name">Last Name</label>
        {{ $resident->lastname}}
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group">
        <label for="Name">Soon...</label>
        .....
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group">
        <label for="Name">Soon...</label>
        .....
    </div>
    </div>
  </div>


@endsection