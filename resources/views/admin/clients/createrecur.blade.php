@extends('layouts.admin')

@section('content')

<div class="well">


  <div class="container col-md-3">

    <?php

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    ?>

    {!! Form::open( ['method'=>'GET', 'action'=> 'ClientsController@storerecur']) !!}
    {{csrf_field()}}

    @if($clients)

    <h1>Recurring Invoices</h1>
    <br>

    <div class="form-group">
      <input type="date" value="<?php echo $today; ?>" name="date">
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-success">
    </div>


    @foreach ($clients as $client)

    @if($client->active == 1)
    @if($client->recurring == 1)

    <div class="form-group">
      <input type="text" name="id[]" value="{{$client->id}}" class="form-control">
    </div>

    <div class="form-group">
      <input type="text" name="retainer[]" value="{{$client->retainer}}" class="form-control">
    </div>

    @endif
    @endif
    @endforeach







    @endif
    {!! Form::close() !!}



  </div>

</div>

@endsection