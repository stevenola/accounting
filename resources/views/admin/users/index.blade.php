@extends('layouts.admin')

@section('content')

<h1>Users</h1>

<ul>
  <li>build out side nav in Admin Blade</li>
  <li>add chart for users</li>
  <li>Add CRUD</li>
  <li></li>
  <li></li>

  <br>

  <h3>User List</h3>

</ul>

<ul>
  @foreach($users as $user)
  <li>{{$user->name}}</li>
  @endforeach

</ul>

@endsection