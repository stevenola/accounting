@extends('layouts.admin')

@section('content')
<?php
// $grandtotal = ($transactions->whereBetween('created_at', [$begdate, $enddate])->where('type', 0)->sum('amount1') * -1) - ($expenses->whereBetween('created_at', [$begdate, $enddate])->sum('amount'));

$begdate = $begdate . ' ' . '00:00:00';
$enddate = $enddate . ' ' . '00:00:00';


?>
<div class="container d-flex">

  <div class="col-md-3"></div>
  <div class="col-md-6">
    <table class="table table-sm ">


      <tr>
        <th>Category</th>
        <th>Amount</th>
      </tr>
      <tbody>

        <tr class=" table-active">
          <td>Revenue</td>

          <td>{{$transactions->whereBetween('created_at',[$begdate,$enddate])->where('type', 0)->sum('amount1')*-1}}</td>

        </tr>


        @if($expensenames)

        @foreach($expensenames as $expensename)
        <tr>

          <td>{{$expensename->name}}</td>

          <td>
            {{$expenses->whereBetween('created_at',[$begdate,$enddate])->where('name', $expensename->id)->sum('amount')}}
          </td>
        </tr>

        @endforeach
        @endif

        <tr class="table-active">
          <td>Total Expenses</td>
          <td>
            {{$expenses->whereBetween('created_at',[$begdate,$enddate])->sum('amount')}}
          </td>
        </tr>
        <tr class="table-active">
          <td>Cash Profit</td>
          <td>

            {{($transactions->whereBetween('created_at',[$begdate,$enddate])->where('type', 0)->sum('amount1')*-1)-($expenses->whereBetween('created_at',[$begdate,$enddate])->sum('amount'))}}


          </td>
        </tr>


      </tbody>

    </table>




  </div>
</div>
@endsection