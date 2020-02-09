@extends('layouts.admin')

@section('content')


<h1>Clients</h1>

<!-- Button takes you to  create client -->

{!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@create']]) !!}
<div class="form-group">
  {!! Form::submit('Add Client', ['class'=>'btn btn-primary col-sm-6']) !!}
</div>
{!! Form::close() !!}


</div>

<br>

<h3>Client List</h3>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Street</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>Retainer</th>
      <th>Recurring</th>
      <th>Print</th>
      <th>Active</th>
      <th>In State</th>
      <th>Consultant</th>


    </tr>
  </thead>
  <tbody>

    @if($clients)

    @foreach($clients as $client)
    <tr>
      <!-- <td>{{$client->id}}</td> -->
      <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>
      <td>{{$client->name}}</td>
      <td>{{$client->street}}</td>
      <td>{{$client->city}}</td>
      <td>{{$client->state}}</td>
      <td>{{$client->zip}}</td>
      <td>{{$client->retainer}}</td>
      <td>{{$client->recurring == 1 ? 'Recurring' : 'No'}}</td>
      <td>{{$client->print == 1 ? 'Print' : 'No'}}</td>
      <td>{{$client->active == 1 ? 'Active' : 'Not Active'}}</td>
      <td>{{$client->in_state == 1 ? 'In State' : 'Out of State'}}</td>
      <td>{{$client->user->name}}</td>

    </tr>

    @endforeach
    @endif

  </tbody>
</table>








<!-- <ul>
  @foreach($clients as $client)
  <li>{{$client->name}}</li>
  @endforeach

</ul> -->

@endsection