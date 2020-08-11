@extends('layouts.admin')

@section('title', 'Transactions')

@section('content')
<div class="container">
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



          {!! Form::open(['method'=>'GET', 'class'=>'form-inline', 'action'=> ['TransactionsController@printrecur']]) !!}
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


  <table class="table table-sm table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Client</th>
        <th>Trans</th>
        <th>Type</th>
        <th>Desc1</th>
        <th>Amt1</th>
        <th>Desc2</th>
        <th>Amt2</th>
        <th>Notes</th>
        <th>Check No</th>




      </tr>
    </thead>
    <tbody>

      @if($transactions)

      @foreach($transactions as $transaction)
      <tr>
        <td>{{date('m-d-Y', strtotime($transaction->created_at))}}</td>

        <td>{{$transaction->client->name}}</td>
        <td><a href="{{route('transactions.edit', $transaction->id)}}">{{$transaction->id}}</a></td>


        <td>{{$transaction->type == 1 ? 'Invoice' : 'Deposit'}}</td>
        <td>{{$transaction->description->name}}</td>
        <td>{{number_format($transaction->amount1, 2)}}</td>
        <td>{{$transaction->description2}}</td>
        <td>{{number_format($transaction->amount2, 2)}}</td>
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

</div>

<!-- Add IN STATE code -->
<?php

use Carbon\Carbon;
?>

<div>
  {!! Form::open(['method'=>'GET', 'class'=>'form-inline', 'action'=> ['TransactionsController@index']]) !!}
  <div class="form-group">
    {!! Form::submit('In State Revenue', ['class'=>'btn btn-primary btn-sm']) !!}
  </div>

  <div class="form-group pl-3">
    <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="begdate" class="mt-1">

  </div>

  <div class="form-group pl-3">
    <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="enddate" class="mt-1">

  </div>



  {!! Form::close() !!}
</div>


@endsection