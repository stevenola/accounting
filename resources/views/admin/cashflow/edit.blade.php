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

<div class="container col-sm-3">
  <h1>Edit Cash Amount</h1>

  {!! Form::model($cashflows,['method'=>'PATCH', 'action'=> ['CashflowsController@update', $cashflows->id], 'files'=>true]) !!}


  <div class="form-group">
    {!! Form::label('created_at', 'Date Created:') !!}
    {!! Form::date('created_at', $cashflows->created_at, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class'=>'form-control'])!!}
  </div>

  <div class="form-group">
    {!! Form::submit('Update Cash', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close() !!}



  {!! Form::open(['method'=>'DELETE', 'action'=> ['CashflowsController@destroy', $cashflows->id]]) !!}

  <div class="form-group">
    {!! Form::submit('Delete Cash Entry', ['class'=>'btn btn-danger']) !!}
  </div>

  {!! Form::close() !!}


</div>



@endsection