@extends('layouts.admin')

@section('content')

<?php

// Current Year
$janbeg = date('2020-01-01');
$janend = date('2020-01-31');
$febbeg = date('2020-02-01');
$febend = date('2020-02-29');
$marbeg = date('2020-03-01');
$marend = date('2020-03-31');
$aprbeg = date('2020-04-01');
$aprend = date('2020-04-30');
$maybeg = date('2020-05-01');
$mayend = date('2020-05-31');
$junbeg = date('2020-06-01');
$junend = date('2020-06-30');
$julbeg = date('2020-07-01');
$julend = date('2020-07-31');
$augbeg = date('2020-08-01');
$augend = date('2020-08-31');
$sepbeg = date('2020-09-01');
$sepend = date('2020-09-30');
$octbeg = date('2020-10-01');
$octend = date('2020-10-31');
$novbeg = date('2020-11-01');
$novend = date('2020-11-30');
$decbeg = date('2020-12-01');
$decend = date('2020-12-31');

// Last Year
$janbegly = date('2019-01-01');
$janendly = date('2019-01-31');
$febbegly = date('2019-02-01');
$febendly = date('2019-02-28');
$marbegly = date('2019-03-01');
$marendly = date('2019-03-31');
$aprbegly = date('2019-04-01');
$aprendly = date('2019-04-30');
$maybegly = date('2019-05-01');
$mayendly = date('2019-05-31');
$junbegly = date('2019-06-01');
$junendly = date('2019-06-30');
$julbegly = date('2019-07-01');
$julendly = date('2019-07-31');
$augbegly = date('2019-08-01');
$augendly = date('2019-08-31');
$sepbegly = date('2019-09-01');
$sependly = date('2019-09-30');
$octbegly = date('2019-10-01');
$octendly = date('2019-10-31');
$novbegly = date('2019-11-01');
$novendly = date('2019-11-30');
$decbegly = date('2019-12-01');
$decendly = date('2019-12-31');

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


<div class="container col-md-6">

  <h1>Revenue</h1>
  <table class="table">
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

@endsection