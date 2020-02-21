@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Recurring Invoice</h1>

  <div class="container">

    {!! Form::open( ['method'=>'GET', 'action'=> 'ClientsController@storerecur']) !!}
    {{csrf_field()}}

    @if($clients)

    <div class="form-group">
      <input type="submit" class="btn btn-success">
    </div>

    @foreach ($clients as $client)

    @if($client->active == 1)


    <div class="form-group">
      <input type="text" name="id[]" value="{{$client->id}}" class="form-control">
    </div>

    <div class="form-group">
      <input type="text" name="retainer[]" value="{{$client->retainer}}" class="form-control">
    </div>

    @endif

    @endforeach







    @endif
    {!! Form::close() !!}



  </div>

</div>

@endsection