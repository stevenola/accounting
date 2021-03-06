@extends('layouts.admin')

@section('title', 'Clients')

@section('content')

<div class="container">

  <h1 class="ml-2">Clients</h1>
  <br>
<div class="row">
 
  {!! Form::open(['method'=>'GET', 'action'=> ['ClientsController@create']]) !!}
  <div class="form-group">
    {!! Form::submit('Add Client', ['class'=>'btn btn-primary ml-2']) !!}
  </div>
  {!! Form::close() !!}

  <div class="pl-2">
    <form class="form-inline" type="get" action="{{url('/admin/clients/search')}}">
      <input type="search" name="query" id="search" class="form-control" aria-describedby="" placeholder="Search Client Name">
      <button class="btn btn-success" type="submit">Search</button>
    
    </form>
    
    </div>
  </div>

  <br>
  <div class="row">
    <h3>Active</h3>
    <table class="table table-sm table-striped">
      <thead>
        <tr>

          <th>Name</th>
          <th>Balance</th>
          <th>Retainer</th>
          <th>Recurring</th>
          <th>Print</th>

          <th>Consultant</th>
          <th>In State</th>


        </tr>
      </thead>
      <tbody>

        @if($activeclients)

        @foreach($activeclients as $client)
        <tr>

          <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>

          <td><a href="{{url('showclienttrans/'.$client->id. '/')}}">{{number_format($transactions->where('client_id', $client->id)->sum('amount1'),2)}}</a></td>
          <td>{{$client->retainer}}</td>
          <td>{{$client->recurring == 1 ? 'Recurring' : 'No'}}</td>
          <td>{{$client->print == 1 ? 'Print' : 'No'}}</td>

          <td>{{$client->user->name}}</td>
          <td>{{$client->in_state == 1 ? 'In State' : 'Out of State'}}</td>



        </tr>

        @endforeach
        @endif

      </tbody>
    </table>

    <div class="col-12 d-flex justify-content-center">
      {{$activeclients->links()}}
    </div>
  </div>

  <hr>
  <div class="row">
    <h3>Inactive</h3>
    <table class="table table-sm table-striped">
      <thead>
        <tr>

          <th>Name</th>
          <th>Balance</th>
          <th>Retainer</th>
          <th>Consultant</th>
          <th>In State</th>


        </tr>
      </thead>
      <tbody>

        @if($inactiveclients)

        @foreach($inactiveclients as $client)
        <tr>

          <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>

          <td><a href="{{url('showclienttrans/'.$client->id. '/')}}">{{number_format($transactions->where('client_id', $client->id)->sum('amount1'), 2)}}</a></td>
          <td>{{$client->retainer}}</td>
          <td>{{$client->user->name}}</td>
          <td>{{$client->in_state == 1 ? 'In State' : 'Out of State'}}</td>



        </tr>

        @endforeach
        @endif

      </tbody>
    </table>
  </div>


</div>
@endsection