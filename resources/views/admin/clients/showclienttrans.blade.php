@extends('layouts.admin')

@section('content')
<div class="container">
  <h3 class="ml-2 mt-3">{{$transactions->where('client_id', request()->id)->first()->client->name}}</h3>



  <br>
  <div class="row">
    <h5 class="ml-4">Balance: ${{$transactions->where('client_id', request()->id)->sum('amount1')}}</h5>



  </div>
  <br>

  <table class="table table-sm  table-striped">
    <thead>
      <tr>
        <th>Trans No</th>
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
      @if($transaction->client_id == request()->id)

      <tr>


        <td><a href="{{route('transactions.edit', $transaction->id)}}">{{$transaction->id}}</a></td>
        <td>{{date('m-d-Y', strtotime($transaction->created_at))}}</td>
        <td>{{$transaction->type == 1 ? 'Invoice' : 'Deposit'}}</td>
        <td>{{$transaction->description->name}}</td>
        <td>{{number_format($transaction->amount1,2)}}</td>
        <td>{{$transaction->description2}}</td>
        <td>{{number_format($transaction->amount2,2)}}</td>
        <td>{{$transaction->notes}}</td>
        <td>{{$transaction->check_no}}</td>
        <td><a href="{{route('transactions.show', $transaction->id)}}">Print</a></td>



      </tr>

      @endif
      @endforeach
      @endif

    </tbody>
  </table>

</div>
@endsection