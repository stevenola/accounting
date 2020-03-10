@extends('layouts.admin')

@section('content')

<h1 class="ml-2">Transactions</h1>
<br>
<?php

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <div class="row">
        {!! Form::open(['method'=>'GET', 'action'=> ['TransactionsController@createdeposit']]) !!}
        <div class="form-group">
          {!! Form::submit('Make Deposit', ['class'=>'btn btn-primary mr-2 ml-2']) !!}
        </div>
        {!! Form::close() !!}


        {!! Form::open(['method'=>'GET', 'action'=> ['TransactionsController@create']]) !!}
        <div class="form-group">
          {!! Form::submit('Create Invoice', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        {!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@createrecur']]) !!}
        <div class="form-group">
          {!! Form::submit('Recurring', ['class'=>'btn btn-primary mr-2']) !!}
        </div>
        {!! Form::close() !!}



        {!! Form::open(['method'=>'GET', 'action'=> ['TransactionsController@printrecur']]) !!}
        <div class="form-group">
          {!! Form::submit('Print Recurring', ['class'=>'btn btn-primary mr-2']) !!}
        </div>

        <div class="form-group">
          <input type="date" value="<?php echo $today; ?>" name="date" class="mt-1">

        </div>

        {!! Form::close() !!}
      </div>

    </div>

  </div>
</div>

<br>


<table class="table table-sm">
  <thead>
    <tr>
      <th>Trans No</th>
      <th>Client</th>
      <th>Date</th>
      <th>Type</th>
      <th>Desc 1</th>
      <th>Amount 1</th>
      <th>Desc 2</th>
      <th>Amount 2</th>
      <th>Notes</th>
      <th>Check No</th>




    </tr>
  </thead>
  <tbody>

    @if($transactions)

    @foreach($transactions as $transaction)
    <tr>
      <td><a href="{{route('transactions.edit', $transaction->id)}}">{{$transaction->id}}</a></td>
      <td>{{$transaction->client->name}}</td>

      <td>{{date('m-d-Y', strtotime($transaction->created_at))}}</td>

      <td>{{$transaction->type == 1 ? 'Invoice' : 'Deposit'}}</td>
      <td>{{$transaction->description->name}}</td>
      <td>{{$transaction->amount1}}</td>
      <td>{{$transaction->description2}}</td>
      <td>{{$transaction->amount2}}</td>
      <td>{{$transaction->notes}}</td>
      <td>{{$transaction->check_no}}</td>
      <td><a href="{{route('transactions.show', $transaction->id)}}">Print</a></td>


    </tr>

    @endforeach
    @endif

  </tbody>
</table>

<div class="col-12 d-flex justify-content-center">
  {{$transactions->links()}}
</div>




@endsection