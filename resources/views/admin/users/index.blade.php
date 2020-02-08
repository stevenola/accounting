@extends('layouts.admin')

@section('content')

<h1>Users</h1>

<ul>
  <li>add buttons on the top of each secton's read list for Add...</li>
  <li>Add CRUD</li>
  <li></li>
  <li></li>

  <br>

  <!-- Button takes you to  create user -->


  {!! Form::open(['method'=>'GET', 'action'=> ['UsersController@create']]) !!}
  <div class="form-group">
    {!! Form::submit('Add User', ['class'=>'btn btn-primary col-sm-6']) !!}
  </div>
  {!! Form::close() !!}


  </div>

  <br>

  <h3>User List</h3>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>

      </tr>
    </thead>
    <tbody>

      @if($users)

      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
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



  @endsection