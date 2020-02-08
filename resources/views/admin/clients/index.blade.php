@extends('layouts.admin')

@section('content')


<h1>Clients</h1>

<p>All client info</p>



<ul>
  @foreach($clients as $client)
  <li>{{$client->name}}</li>
  @endforeach

</ul>

@endsection