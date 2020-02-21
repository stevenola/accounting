@extends('layouts.admin')

@section('content')

<div class="well">
  <h1>Recurring Invoice</h1>

  <div class="container">

    {!! Form::open( ['method'=>'GET', 'action'=> 'ClientsController@storerecur']) !!}
    {{csrf_field()}}

    @if($clients)
    @foreach ($clients as $client)




    <div class="form-group">
      <input type="text" name="id[]" value="{{$client->id}}" class="form-control">
    </div>

    <div class="form-group">
      <input type="text" name="retainer[]" value="{{$client->retainer}}" class="form-control">
    </div>


    @endforeach


    <div class="form-group">
      <input type="submit" class="btn">
    </div>




    @endif
    {!! Form::close() !!}



  </div>

</div>

@endsection