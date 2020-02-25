@extends('layouts.admin')

@section('content')

<div class="container col-sm-3">
  <h1>Edit Clients</h1>

  {!! Form::model($client,['method'=>'PATCH', 'action'=> ['ClientsController@update', $client->id], 'files'=>true]) !!}


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
    {!! Form::select('recurring', array(1 => 'Recurring', 0 => 'No'), null,['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('print', 'Print:') !!}
    {!! Form::select('print', array(1 => 'Print', 0 => 'No'), null,['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::select('active', array(1 => 'Active', 0 => 'Not Active'), null,['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('in_state', 'In State:') !!}
    {!! Form::select('in_state', array(1 => 'In State', 0 => 'Not Active'), null,['class'=>'form-control'])!!}
  </div>

  <div class="form-group">

    {!! Form::label('consultant', 'Consultant:') !!}
    {!! Form::select('consultant', $users, null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Update Client', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}



  {!! Form::open(['method'=>'DELETE', 'action'=> ['ClientsController@destroy', $client->id]]) !!}

  <div class="form-group">
    {!! Form::submit('Delete Client', ['class'=>'btn btn-danger']) !!}
  </div>

  {!! Form::close() !!}


</div>

@endsection