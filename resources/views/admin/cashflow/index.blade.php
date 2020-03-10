@extends('layouts.admin')

@section('content')
<div class="container col-sm-6">
  <h1>Cash Flow</h1>

  <br>


  {!! Form::open(['method'=>'GET', 'action'=> ['CashflowsController@create']]) !!}
  <div class="form-group">
    {!! Form::submit('Add Cash Amount', ['class'=>'btn btn-primary ml-2']) !!}
  </div>
  {!! Form::close() !!}




  <br>



  <table class="table table-sm">
    <thead>
      <tr>
        <th>Date</th>
        <th>Amount</th>


      </tr>
    </thead>
    <tbody>

      @if($cashflows)

      @foreach($cashflows as $cashflow)
      <tr>


        <td><a href="{{route('cashflows.edit', $cashflow->id)}}">{{date('m-d-Y', strtotime($cashflow->created_at))}}</a></td>
        <td>{{$cashflow->amount}}</td>


      </tr>

      @endforeach
      @endif

    </tbody>
  </table>
</div>

<div class="col-12 d-flex justify-content-center">
  {{$cashflows->links()}}
</div>

@endsection