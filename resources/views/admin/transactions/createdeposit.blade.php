@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Make Deposit</h1>
  <div class="container">

    {!! Form::open(['method'=>'POST', 'action'=> 'TransactionsController@store']) !!}
    {{csrf_field()}}


    <div class="form-group">
      {!! Form::label('client_id', 'Clients:') !!}
      <?php asort($clients); ?>
      {!! Form::select('client_id', $clients, null, ['class'=>'form-control'])!!}


      <div class="form-group">
        {!! Form::label('check_no', 'Check No:') !!}
        {!! Form::text('check_no', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('amount1', 'Amt 1:') !!}
        {!! Form::text('amount1', null, ['class'=>'form-control'])!!}
      </div>


      <div class="form-group">
        {!! Form::label('notes', 'Notes:') !!}
        {!! Form::text('notes', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('type', 'type:') !!}
        {!! Form::select('type',array(0 => 'Deposit',1 => 'Invoice'), 0, ['class'=>'form-control'])!!}
      </div>


      <div class="form-group">
        {!! Form::submit('Record Deposit', ['class'=>'btn btn-primary col-sm-6']) !!}
      </div>

      {!! Form::close() !!}



    </div>

  </div>

  @endsection