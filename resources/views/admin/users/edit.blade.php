@extends('layouts.admin')

@section('content')

<div class="container">
  <h1>Edit Users</h1>





  {!! Form::model($user,['method'=>'PATCH', 'action'=> ['UsersController@update', $user->id], 'files'=>true]) !!}


  <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control'])!!}
  </div>


  <div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class'=>'form-control'])!!}
  </div>

  <!-- by adding Select,inserting code including roleand adding code to controller you get drop down list from database -->
  <div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::select('role', array(1 => 'Administrator', 0 => 'Consultant'), null, ['class'=>'form-control'])!!}

  </div>


  <div class="form-group">
    {!! Form::label('active', 'Status:') !!}
    {!! Form::select('active', array(1 => 'Active', 0 => 'Not Active'), null,['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}
  </div>
  {!! Form::close() !!}

  {!! Form::open(['method'=>'DELETE', 'action'=> ['UsersController@destroy', $user->id]]) !!}
      <div class="form-group">
        {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
      </div>
      {!! Form::close() !!}


</div>





@endsection