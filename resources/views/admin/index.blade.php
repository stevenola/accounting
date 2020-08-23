@extends('layouts.admin')

<!-- adds Dashboard as name of web sheet tab -->
@section('title', 'Dashboard')


@section('content')

<?php

use Carbon\Carbon;

?>
<div class="container ">

  <h1 class="pt-5">Revenue</h1>
  <div class="row pt-3">

{{-- REVENUE THIS YEAR --}}

    <div class="col-md-2">
     
      <table class="table table-sm  table-striped">
        <thead>
          <tr>
            <th>Month</th>
            <th>TY</th> 
         
          </tr>
        </thead>
        <tbody>

            <?php
            // $year = Carbon::now()->year;
            if (is_null($thisyear)) {
            $year = Carbon::now()->year;
          } else {
            $year = $thisyear;
          }      
            // $lastyear = date('Y', strtotime('last year'));
          $lastyear = $year-1;

            $runningtotal = 0;
          
            ?>     
          
        @foreach ($transactions as $transaction)
        <tr> 

        @if ($transaction->year == $year)

       <td>{{$transaction->month}}</td>
       <td>{{number_format($transaction->total, 2)}}</td>
   
       @endif
       
       </tr>

       @endforeach
            
        </tbody>

      </table>
    </div>

    {{-- REVENUE LAST YEAR --}}
    <div class="col-md-2 text-info">

      <table class="table table-sm  table-striped">
        <thead>
          <tr>
        
            <th>LY</th>
    
          </tr>
        </thead>

        <tbody>
   
        @foreach ($transactions as $transaction)
        <tr> 

       @if ($transaction->year == $lastyear)

       <td>{{number_format($transaction->total, 2)}}</td>
       @endif
      </tr>
       @endforeach
    
        </tbody>

      </table>
    </div>

 {{-- REVENUE % CHANGE --}}





  {{-- REVENUE YTD --}}
    <div class="col-md-2 text-info">
      <table class="table table-sm  table-striped">
        <thead>
          <tr>  
            <th>YTD</th>
          </tr>
        </thead>

        <tbody>
           
        @foreach ($transactions as $transaction)
        <tr> 

       @if ($transaction->year == $year)

       <td>{{number_format($runningtotal += $transaction->total,2)}}</td>
      
       @endif
      </tr>
       @endforeach
            
        </tbody>

      </table>
    </div>

     {{-- REVENUE LYTD --}}

     <?php
        $runningtotal = 0;
     ?>
     <div class="col-md-2 text-info">



      <table class="table table-sm  table-striped">
        <thead>
          <tr>
        
   
            <th>LYTD</th>
           
          </tr>
        </thead>

        <tbody>
          
   
        @foreach ($transactions as $transaction)
        <tr> 

       @if ($transaction->year == $lastyear)

       <td>{{number_format($runningtotal += $transaction->total,2)}}</td>
      
       @endif
      </tr>
       @endforeach
       
      
        </tbody>

      </table>
    </div>

     {{-- CASH --}}
    <div class="col-md-2 text-success">
      {{-- <div class="row">
        <h1 class="pl-3">Cash Balances</h1>


      </div>
      <table class="table table-sm table-striped">
        <thead>
          <tr>
            <th>Month</th>
            <th>TY</th>
            <th>LY</th>
            <th>$ +/-</th>
            <th>% +/-</th>

          </tr>
        </thead>


      </table>
    </div> --}}
  </div>

  <div class="row" >
    {!! Form::open(['method'=>'GET', 'class'=>'form-inline', 'action'=> ['AdminController@adminpandl']]) !!}
    <div class="form-group">
      {!! Form::submit('P and L Report', ['class'=>'btn btn-primary btn-sm']) !!}
    </div>


    <div class="form-group pl-3">
      <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="begdate" class="mt-1">

    </div>

    <div class="form-group pl-3">
      <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="enddate" class="mt-1">

    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'GET', 'class'=>'form-inline', 'action'=> ['AdminController@index']]) !!}
    <div class="form-group pl-3">

      {!! Form::submit('Update Year', ['class'=>'btn btn-primary btn-sm']) !!}
    </div>

    <div class="form-group pl-3">
      <input type="text" value="{{$year}}" name="thisyear">

    </div>

    {!! Form::close() !!}
  </div>
</div>

@endsection