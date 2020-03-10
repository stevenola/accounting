@extends('layouts.admin')

@section('content')


<h1 class="ml-2">Clients</h1>

<br>
{!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@create']]) !!}
<div class="form-group">
  {!! Form::submit('Add Client', ['class'=>'btn btn-primary ml-2']) !!}
</div>
{!! Form::close() !!}


</div>

<br>


<table class="table table-sm">
  <thead>
    <tr>

      <th>Name</th>
      <th>Balance</th>
      <th>Retainer</th>
      <th>Recurring</th>
      <th>Print</th>
      <th>Active</th>
      <th>Consultant</th>
      <th>In State</th>


    </tr>
  </thead>
  <tbody>

    @if($clients)

    @foreach($clients as $client)
    <tr>

      <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>

      <td><a href="{{url('showclienttrans/'.$client->id. '/')}}">{{$transactions->where('client_id', $client->id)->sum('amount1')}}</a></td>
      <td>{{$client->retainer}}</td>
      <td>{{$client->recurring == 1 ? 'Recurring' : 'No'}}</td>
      <td>{{$client->print == 1 ? 'Print' : 'No'}}</td>
      <td>{{$client->active == 1 ? 'Active' : 'Not Active'}}</td>
      <td>{{$client->user->name}}</td>
      <td>{{$client->in_state == 1 ? 'In State' : 'Out of State'}}</td>



    </tr>

    @endforeach
    @endif

  </tbody>
</table>

<div class="col-12 d-flex justify-content-center">
  {{$clients->links()}}
</div>

@endsection