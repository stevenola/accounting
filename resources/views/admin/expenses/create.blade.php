@extends('layouts.admin')

@section('content')

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

  <?php

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

  <div class="container col-sm-3">

    <h1>Create Expense</h1>
    <br>

    {!! Form::open(['method'=>'POST', 'action'=> 'ExpensesController@store']) !!}
    {{csrf_field()}}

    <div class="form-group">
      <input type="date" value="<?php echo $today; ?>" name="created_at">
    </div>

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::select('name',$expensenames, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::label('amount', 'Amount:') !!}
      {!! Form::text('amount', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
      {!! Form::submit('Create Expense',['class'=>'btn btn-primary']) !!}
    </div>



    {!! Form::close() !!}

  </div>
</div>



@endsection