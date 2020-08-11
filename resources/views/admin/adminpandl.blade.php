@extends('layouts.admin')

@section('content')
<?php


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

        <tr class=" table text-success">
          <td><strong>Initial Cash </strong></td>

          <td><strong>{{$cashflows->where('created_at', $begdate)->sum('amount')}} </strong></td>

        </tr>
        <tr class=" table text-success">
          <td><strong>Revenue </strong></td>

          <td><strong>{{$transactions->whereBetween('created_at',[$begdate,$enddate])->where('type', 0)->sum('amount1')*-1}} </strong></td>

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

        <tr class="table text-success">
          <td> <strong>
              Total Expenses
            </strong>
          </td>
          <td><strong>
              {{$expenses->whereBetween('created_at',[$begdate,$enddate])->sum('amount')}}</strong>
          </td>
        </tr>
        <tr class="table text-success">
          <td><strong>Ending Cash </strong></td>
          <td>
            <strong>
              {{($transactions->whereBetween('created_at',[$begdate,$enddate])->where('type', 0)->sum('amount1')*-1)-($expenses->whereBetween('created_at',[$begdate,$enddate])->sum('amount'))+($cashflows->where('created_at', $begdate)->sum('amount'))}}

            </strong>
          </td>
        </tr>


      </tbody>

    </table>




  </div>
</div>
@endsection