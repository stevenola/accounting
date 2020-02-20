@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Recurring Invoice</h1>

  <div class="container">

    {!! Form::open(['method'=>'POST', 'action'=> 'TransactionsController@createrecur']) !!}
    {{csrf_field()}}

    @if($transactions)
    @foreach ($clients as $client)

    <div class="form">
      <div class="form-group">
        <input type="text" name="id[]" value="{{$transactions->client->name}}" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="type[]" value="{{$transaction->type == 1 ? 'Invoice' : 'Deposit'}}" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="description1[]" value="{{$transactions->description->name}}" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="retainer[]" value="{{$transaction->client->retainer}}" class="form-control">
      </div>

      <div class="form-group">
        <input type="submit" class="btn">
      </div>

    </div>

    @endforeach
    @endif
    {!! Form::close() !!}



  </div>

</div>

@endsection