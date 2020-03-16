@extends('layouts.admin')

@section('title', 'Users')

@section('content')

<div class="container">
  <h1 class="ml-2">Users</h1>

  <br>

  <!-- Button takes you to  create user -->


  {!! Form::open(['method'=>'GET', 'action'=> ['UsersController@create']]) !!}
  <div class="form-group">
    {!! Form::submit('Add User', ['class'=>'btn btn-primary ml-2']) !!}
  </div>
  {!! Form::close() !!}




  <br>



  <table class="table">
    <thead>
      <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>

      </tr>
    </thead>
    <tbody>

      @if($users)

      @foreach($users as $user)
      <tr>

        <!-- <td>{{$user->name}}</td> -->

        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>

        <td>{{$user->email}}</td>

        <td>{{$user->role == 1 ? 'Administrator' : 'Consultant'}}</td>

        <td>{{$user->active == 1 ? 'Active' : 'Not Active'}}</td>
      </tr>

      @endforeach
      @endif

    </tbody>
  </table>

</div>

@endsection