@extends('layouts.admin')

@section('content')

<h1>Client Transactions</h1>


</div>

<br>



<table class="table">
  <thead>
    <tr>
      <th>Trans No</th>
      <th>Client</th>
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

    @if($transaction->client_id == request()->id)
    <tr>

      <td>{{$transaction->id}}</td>
      <td><a href="{{route('transactions.edit', $transaction->id)}}">{{$transaction->client->name}}</a></td>

      <td>{{$transaction->type == 1 ? 'Invoice' : 'Deposit'}}</td>
      <td>{{$transaction->description->name}}</td>
      <td>{{$transaction->amount1}}</td>
      <td>{{$transaction->description2}}</td>
      <td>{{$transaction->amount2}}</td>
      <td>{{$transaction->notes}}</td>
      <td>{{$transaction->check_no}}</td>
      <td><a href="{{route('transactions.show', $transaction->id)}}">Print</a></td>



    </tr>

    @endif
    @endforeach
    @endif

  </tbody>
</table>
@endsection