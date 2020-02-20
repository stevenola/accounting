@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Client Summary</h1>
  <br>
  <h4>Total Balance: ${{$transactions->sum('amount1')}}</h4>

  <br>
  <table class="table">
    <thead>
      <tr>

        <th>Client</th>
        <th>Amount 1</th>





      </tr>
    </thead>
    <tbody>

      @if($clients)

      @foreach($clients as $client)



      <tr>

        <td>{{$client->name}}</td>
        <td>{{$transactions->where('client_id', $client->id)->sum('amount1')}}</td>
      </tr>



      @endforeach

      @endif

    </tbody>
  </table>
</div>

@endsection