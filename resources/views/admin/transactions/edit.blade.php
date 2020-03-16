@extends('layouts.admin')

@section('content')

@if(count($errors)> 0)
<div class="alert alert-danger">

  <ul>

    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>

</div>


@endif
<div class="container col-sm-4">


  <h1>Edit Transaction {{$transaction->id}}</h1>

  {!! Form::model($transaction,['method'=>'PATCH', 'action'=> ['TransactionsController@update', $transaction->id], 'files'=>true]) !!}

  <div class="form-group">
    {!! Form::label('created_at', 'Date Created:') !!}
    {!! Form::date('created_at', $transaction->created_at, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">

    {!! Form::label('client_id', 'Clients:') !!}
    {!! Form::select('client_id', $clients, null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', array(1 => 'Invoice', 0 => 'Deposit'), null,['class'=>'form-control'])!!}
  </div>

  <!--  Add desc -->
  <div class="form-group">

    {!! Form::label('description1', 'Desc 1:') !!}
    {!! Form::select('description1', $descriptions, null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('amount1', 'Amt 1:') !!}
    {!! Form::text('amount1', null, ['class'=>'form-control'])!!}
  </div>


  <div class="form-group">
    {!! Form::label('description2', 'Desc 2:') !!}
    {!! Form::text('description2', null, ['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('amount2', 'Amt 2:') !!}
    {!! Form::text('city', null, ['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('check_no', 'Check No:') !!}
    {!! Form::text('check_no', null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Update Transaction', ['class'=>'btn btn-primary col-sm-6']) !!}
  </div>

  {!! Form::close() !!}



  {!! Form::open(['method'=>'DELETE', 'action'=> ['TransactionsController@destroy', $transaction->id]]) !!}

  <div class="form-group">
    {!! Form::submit('Delete Transaction', ['class'=>'btn btn-danger col-sm-6', 'onclick'=>"return confirm('Are you sure?')"]) !!}
  </div>

  {!! Form::close() !!}


</div>

@endsection