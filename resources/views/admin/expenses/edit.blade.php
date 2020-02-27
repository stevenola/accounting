@extends('layouts.admin')

@section('content')

<div class="container col-sm-3">
  <h1>Edit Expenses</h1>

  {!! Form::model($expense,['method'=>'PATCH', 'action'=> ['ExpensesController@update', $expense->id], 'files'=>true]) !!}


  <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::select('name', $expensenames, null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Update Expense', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}



  {!! Form::open(['method'=>'DELETE', 'action'=> ['ExpensesController@destroy', $expense->id]]) !!}

  <div class="form-group">
    {!! Form::submit('Delete Expense', ['class'=>'btn btn-danger']) !!}
  </div>

  {!! Form::close() !!}


</div>



@endsection