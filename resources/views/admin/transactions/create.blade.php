@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Create Invoice</h1>

  @if(count($errors)> 0)
  <div class="alert alert-danger">

    <ul>

      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>

  </div>


  @endif

  <div class="container">

    {!! Form::open(['method'=>'POST', 'action'=> 'TransactionsController@store']) !!}
    {{csrf_field()}}


    <div class="form-group">
      {!! Form::label('client_id', 'Clients:') !!}
      <?php asort($clients); ?>
      {!! Form::select('client_id', $clients, null, ['placeholder' => 'choose a client'],['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
      {!! Form::label('type', 'type:') !!}
      {!! Form::select('type', array(1 => 'Invoice', 0 => 'Deposit'), 1, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('description1', 'Desc 1:') !!}
      {!! Form::select('description1', $descriptions, null, ['class'=>'form-control'])!!}

      <!-- {!! Form::label('description1', 'Desc 1:') !!}
      {!! Form::select('description1', array(1 => 'Monthly', 0 => 'OTB Subscription'), 1, ['class'=>'form-control'])!!} -->
    </div>

    <div class="form-group">
      {!! Form::label('amount1', 'Amt 1:') !!}
      {!! Form::text('amount1', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('description2', 'Desc 2:') !!}
      {!! Form::text('description2', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('amount2', 'Amt 2:') !!}
      {!! Form::text('amount2', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
      {!! Form::label('notes', 'Notes:') !!}
      {!! Form::text('zip', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
      {!! Form::label('check_no', 'Check No:') !!}
      {!! Form::text('retainer', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
      {!! Form::submit('Create Client', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}



  </div>

</div>

@endsection