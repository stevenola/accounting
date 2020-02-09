@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Add Client</h1>
  <div class="container">

    {!! Form::open(['method'=>'POST', 'action'=> 'ClientsController@store']) !!}
    {{csrf_field()}}

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('street', 'Street:') !!}
      {!! Form::text('street', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('city', 'City:') !!}
      {!! Form::text('city', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('state', 'State:') !!}
      {!! Form::text('state', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('zip', 'Zip:') !!}
      {!! Form::text('zip', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('retainer', 'Retainer:') !!}
      {!! Form::text('retainer', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('recurring', 'Recurring:') !!}
      {!! Form::select('recurring', array(1 => 'Recurring', 0 => 'No'), 1, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('print', 'Print:') !!}
      {!! Form::select('print', array(1 => 'Print', 0 => 'No'), 1, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('active', 'Active:') !!}
      {!! Form::select('active', array(1 => 'Active', 0 => 'No'), 1, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('in_state', 'In State:') !!}
      {!! Form::select('in_state', array(1 => 'In State', 0 => 'No'), 1, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('consultant', 'Consultant:') !!}
      {!! Form::select('consultant', $users, null, ['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
      {!! Form::submit('Create Client', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}



  </div>

</div>

@endsection