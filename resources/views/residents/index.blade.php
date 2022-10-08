@extends('partials.master')
@section('title', 'Barangay Information System')
@section('page_title', 'Residents')
@section('content')


  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th with="80px">No</th>
      <th>Name</th>
      <th>MiddleName</th>
      <th>LastName</th>
      <th>soon...</th>
      <th with="140px" class="text-center">
        <a href="{{route('residents.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($residents as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->middlename }}</td>
        <td>{{ $value->lastname }}</td>
        <td>...</td>
        <td style=" text-align: center;">
          <a class="btn btn-info btn-sm" href="{{route('residents.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('residents.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
