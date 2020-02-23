@extends('layouts.admin')

@section('content')


<h1>Clients</h1>


{!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@create']]) !!}
<div class="form-group">
  {!! Form::submit('Add Client', ['class'=>'btn btn-primary col-sm-2']) !!}
</div>
{!! Form::close() !!}

<!-- {!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@transsum']]) !!}
<div class="form-group">
  {!! Form::submit('Transaction Summary', ['class'=>'btn btn-primary col-sm-2']) !!}
</div>
{!! Form::close() !!} -->


</div>

<br>


<table class="table">
  <thead>
    <tr>

      <th>Name</th>
      <th>Balance</th>
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

      <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>

      <td><a href="{{url('showclienttrans/'.$client->id. '/')}}">{{$transactions->where('client_id', $client->id)->sum('amount1')}}</a></td>
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



@endsection