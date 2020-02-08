@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Create Users</h1>

  <div class="container">

    <!-- {!! Form::open(['method'=>'POST', 'action'=> 'UsersController@store', 'files'=>true]) !!} -->

    {!! Form::open(['method'=>'POST', 'action'=> 'UsersController@store']) !!}
    {{csrf_field()}}

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('role', 'Role:') !!}
      <!-- by adding Select and changing Null field to a value, it creates a defualt value in form -->
      {!! Form::select('role', array(1 => 'Administrator', 0 => 'Consultant'), 0,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::label('active', 'Status:') !!}
      <!-- by adding Select and changing Null field to a value, it creates a defualt value in form -->
      {!! Form::select('active', array(1 => 'Active', 0 => 'Not Active'), 1,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>



    {!! Form::close() !!}

  </div>
</div>





@endsection