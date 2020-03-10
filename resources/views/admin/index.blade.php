@extends('layouts.admin')

@section('content')

<?php

use Carbon\Carbon;

if ($thisyear == " ") {
  $year = Carbon::now()->year;
} else {
  $year = $thisyear;
}

$month = 1;
$day = 1;
$hour = 0;
$minute = 0;
$second = 0;


$janbeg = Carbon::create($year, $month, $day, $hour, $minute, $second);
$janend = Carbon::create($year, $month, $day, $hour, $minute, $second)->endOfMonth();
$febbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(1);
$febend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(1)->endOfMonth();
$marbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(2);
$marend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(2)->endOfMonth();
$aprbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(3);
$aprend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(3)->endOfMonth();
$maybeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(4);
$mayend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(4)->endOfMonth();
$junbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(5);
$junend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(5)->endOfMonth();
$julbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(6);
$julend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(6)->endOfMonth();
$augbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(7);
$augend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(7)->endOfMonth();
$sepbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(8);
$sepend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(8)->endOfMonth();
$octbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(9);
$octend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(9)->endOfMonth();
$novbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(10);
$novend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(10)->endOfMonth();
$decbeg = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(11);
$decend = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(11)->endOfMonth();

// Last Year
// $janbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addYears(-1);
$janbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addYears(-1);
$janendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->endOfMonth()->addYears(-1);
$febbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(1)->addYears(-1);
$febendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(1)->endOfMonth()->addYears(-1);
$marbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(2)->addYears(-1);
$marendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(2)->endOfMonth()->addYears(-1);
$aprbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(3)->addYears(-1);
$aprendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(3)->endOfMonth()->addYears(-1);
$maybegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(4)->addYears(-1);
$mayendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(4)->endOfMonth()->addYears(-1);
$junbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(5)->addYears(-1);
$junendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(5)->endOfMonth()->addYears(-1);
$julbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(6)->addYears(-1);
$julendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(6)->endOfMonth()->addYears(-1);
$augbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(7)->addYears(-1);
$augendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(7)->endOfMonth()->addYears(-1);
$sepbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(8)->addYears(-1);
$sependly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(8)->endOfMonth()->addYears(-1);
$octbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(9)->addYears(-1);
$octendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(9)->endOfMonth()->addYears(-1);
$novbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(10)->addYears(-1);
$novendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(10)->endOfMonth()->addYears(-1);
$decbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(11)->addYears(-1);
$decendly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addMonths(11)->endOfMonth()->addYears(-1);

// Calculate % change

$jantotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $janend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $janendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $janendly])->sum('amount1') * -1) * 100;

$febtotal = (($transactions->where('type', 0)->whereBetween('created_at', [$febbeg, $febend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$febbegly, $febendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$febbegly, $febendly])->sum('amount1') * -1) * 100;

$martotal = (($transactions->where('type', 0)->whereBetween('created_at', [$marbeg, $marend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$marbegly, $marendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$marbegly, $marendly])->sum('amount1') * -1) * 100;

$aprtotal = (($transactions->where('type', 0)->whereBetween('created_at', [$aprbeg, $aprend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$aprbegly, $aprendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$aprbegly, $aprendly])->sum('amount1') * -1) * 100;

$maytotal = (($transactions->where('type', 0)->whereBetween('created_at', [$maybeg, $mayend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$maybegly, $mayendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$maybegly, $mayendly])->sum('amount1') * -1) * 100;

$juntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$junbeg, $junend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$junbegly, $junendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$junbegly, $junendly])->sum('amount1') * -1) * 100;

$jultotal = (($transactions->where('type', 0)->whereBetween('created_at', [$julbeg, $julend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$julbegly, $julendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$julbegly, $julendly])->sum('amount1') * -1) * 100;

$augtotal = (($transactions->where('type', 0)->whereBetween('created_at', [$augbeg, $augend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$augbegly, $augendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$augbegly, $augendly])->sum('amount1') * -1) * 100;

$septotal = (($transactions->where('type', 0)->whereBetween('created_at', [$sepbeg, $sepend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$sepbegly, $sependly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$sepbegly, $sependly])->sum('amount1') * -1) * 100;

$octtotal = (($transactions->where('type', 0)->whereBetween('created_at', [$octbeg, $octend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$octbegly, $octendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$octbegly, $octendly])->sum('amount1') * -1) * 100;

$novtotal = (($transactions->where('type', 0)->whereBetween('created_at', [$novbeg, $novend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$novbegly, $novendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$novbegly, $novendly])->sum('amount1') * -1) * 100;

$dectotal = (($transactions->where('type', 0)->whereBetween('created_at', [$decbeg, $decend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$decbegly, $decendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$decbegly, $decendly])->sum('amount1') * -1) * 100;

// Running total % change


$janruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $janend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $janendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $janendly])->sum('amount1') * -1) * 100;

$februntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $febend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $febendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $febendly])->sum('amount1') * -1) * 100;

$marruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $marend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $marendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $marendly])->sum('amount1') * -1) * 100;

$aprruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $aprend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $aprendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $aprendly])->sum('amount1') * -1) * 100;

$mayruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $mayend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $mayendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $mayendly])->sum('amount1') * -1) * 100;

$junruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $junend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $junendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $junendly])->sum('amount1') * -1) * 100;

$julruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $julend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $julendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $julendly])->sum('amount1') * -1) * 100;

$augruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $augend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $augendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $augendly])->sum('amount1') * -1) * 100;

$sepruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $sepend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $sependly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $sependly])->sum('amount1') * -1) * 100;

$octruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $octend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $octendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $octendly])->sum('amount1') * -1) * 100;

$novruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $novend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $novendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $novendly])->sum('amount1') * -1) * 100;

$decruntotal = (($transactions->where('type', 0)->whereBetween('created_at', [$janbeg, $decend])->sum('amount1') * -1) - ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $decendly])->sum('amount1') * -1)) / ($transactions->where('type', 0)->whereBetween('created_at', [$janbegly, $decendly])->sum('amount1') * -1) * 100;


?>



<div class="container ">

  <div class="row">
    {!! Form::open(['method'=>'GET', 'action'=> ['AdminController@index']]) !!}
    <div class="form-group pl-3">

      {!! Form::submit('Update Year', ['class'=>'btn btn-primary btn-sm mt-5']) !!}
    </div>

    <div class="form-group pl-3">
      <input type="text" value="{{$year}}" name="thisyear">

    </div>

    {!! Form::close() !!}
  </div>
  <div class="row pt-3">

    <div class="col-md-6 text-info">
      <h1>Revenue</h1>
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Month</th>
            <th>TY</th>
            <th>LY</th>
            <th>% +/-</th>
            <th>YTD</th>
            <th>LYTD</th>
            <th>% +/-</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Jan</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $janend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $janendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($jantotal,1)}}%</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $janend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $janendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($janruntotal,1)}}%</td>
          </tr>
          <tr>
            <td>Feb</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$febbeg, $febend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$febbegly, $febendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($febtotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$febbeg, $febend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $febend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $febendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($februntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>Mar</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$marbeg, $marend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$marbegly, $marendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($martotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$marbeg, $marend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $marend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $marendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($marruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>

            <td>Apr</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$aprbeg, $aprend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$aprbegly, $aprendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($aprtotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$aprbeg, $aprend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $aprend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $aprendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($aprruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>May</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$maybeg, $mayend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$maybegly, $mayendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($maytotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$maybeg, $mayend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $mayend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $mayendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($mayruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>Jun</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$junbeg, $junend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $janendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($juntotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$junbeg, $junend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $junend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $junendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($junruntotal,1)}}%</td>

            @else

            @endif
          <tr>
            <td>Jul</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$julbeg, $julend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$julbegly, $julendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($jultotal,1)}}%</td>


            @if(($transactions->where('type', 0)->whereBetween('created_at',[$julbeg, $julend])->sum('amount1')*-1) > 0)
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $julend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $julendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($julruntotal,1)}}%</td>
            @else

            @endif
          </tr>
          <tr>
            <td>Aug</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$augbeg, $augend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$augbegly, $augendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($augtotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$augbeg, $augend])->sum('amount1')*-1) > 0)


            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $augend])->sum('amount1')*-1}}</td>

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $augendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($augruntotal,1)}}%</td>

            @else

            @endif
          <tr>
            <td>Sep</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$sepbeg, $sepend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$sepbegly, $sependly])->sum('amount1')*-1}}</td>
            <td>{{number_format($septotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$sepbeg, $sepend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $sepend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $sependly])->sum('amount1')*-1}}</td>
            <td>{{number_format($sepruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>Oct</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$octbeg, $octend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$octbegly, $octendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($octtotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$octbeg, $octend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $octend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $octendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($octruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>Nov</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$novbeg, $novend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$novbegly, $novendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($novtotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$novbeg, $novend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $novend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $novendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($novruntotal,1)}}%</td>

            @else

            @endif
          </tr>
          <tr>
            <td>Dec</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$decbeg, $decend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$decbegly, $decendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($dectotal,1)}}%</td>

            @if(($transactions->where('type', 0)->whereBetween('created_at',[$decbeg, $decend])->sum('amount1')*-1) > 0)

            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbeg, $decend])->sum('amount1')*-1}}</td>
            <td>{{$transactions->where('type', 0)->whereBetween('created_at',[$janbegly, $decendly])->sum('amount1')*-1}}</td>
            <td>{{number_format($decruntotal,1)}}%</td>


            @endif

          </tr>

        </tbody>

      </table>
    </div>

    <div class="col-md-6 text-success">
      <div class="row">
        <h1>Cash Balances</h1>

        <h5 class="pl-3 pt-3">Initial Cash:</h5>
      </div>
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Month</th>
            <th>TY</th>
            <th>LY</th>
            <th>% +/-</th>
            <th>YTD</th>
            <th>LYTD</th>
            <th>% +/-</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    {!! Form::open(['method'=>'GET', 'action'=> ['AdminController@adminpandl']]) !!}
    <div class="form-group pl-3">
      {!! Form::submit('P and L Report', ['class'=>'btn btn-primary btn-sm mt-5']) !!}
    </div>


    <div class="form-group pl-3">
      <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="begdate" class="mt-1">

    </div>

    <div class="form-group pl-3">
      <input type="date" value="{{Carbon::today()->format('Y-m-d')}}" name="enddate" class="mt-1">

    </div>

    {!! Form::close() !!}
  </div>
</div>


@endsection