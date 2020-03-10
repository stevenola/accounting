@extends('layouts.admin')

@section('content')
<?php

use Carbon\Carbon;
?>

<div class="well">


  @if(count($errors)> 0)
  <div class="alert alert-danger">

    <ul>

      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>

  </div>


  @endif


  <div class="container col-sm-3">

    <h1>Create Cash</h1>
    <br>

    {!! Form::open(['method'=>'POST', 'action'=> 'CashflowsController@store']) !!}
    {{csrf_field()}}

    <div class="form-group">
      <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="created_at">
    </div>

    <div class="form-group">
      {!! Form::label('amount', 'Amount:') !!}
      {!! Form::text('amount', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
      {!! Form::submit('Create Cash',['class'=>'btn btn-primary']) !!}
    </div>



    {!! Form::close() !!}

  </div>
</div>



@endsection