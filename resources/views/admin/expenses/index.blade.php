@extends('layouts.admin')

@section('title', 'Expenses')

@section('content')
<div class="container col-sm-6">
  <h1>Expenses</h1>

  <br>


  {!! Form::open(['method'=>'GET', 'action'=> ['ExpensesController@create']]) !!}
  <div class="form-group">
    {!! Form::submit('Add Expense', ['class'=>'btn btn-primary ml-2']) !!}
  </div>
  {!! Form::close() !!}




  <br>



  <table class="table table-sm">
    <thead>
      <tr>
        <th>Date</th>
        <th>Name</th>
        <th>Amount</th>


      </tr>
    </thead>
    <tbody>

      @if($expenses)

      @foreach($expenses as $expense)
      <tr>


        <td><a href="{{route('expenses.edit', $expense->id)}}">{{date('m-d-Y', strtotime($expense->created_at))}}</a></td>
        <td>{{$expense->expensename->name}}</td>
        <td>{{$expense->amount}}</td>


      </tr>

      @endforeach
      @endif

    </tbody>
  </table>
</div>

<div class="col-12 d-flex justify-content-center">
  {{$expenses->links()}}
</div>

@endsection