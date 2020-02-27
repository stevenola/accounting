<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- <title>{{ config('app.name', 'ARC Accounting') }}</title> -->



  <script src="https://kit.fontawesome.com/7d04f56961.js" crossorigin="anonymous"></script>




  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>

<body>
  <div>
    <!-- TOP NAV BAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          Home
        </a>

        <a class="navbar-brand" href="{{ url('clients') }}">
          Clients
        </a>
        <a class="navbar-brand" href="{{ url('transactions') }}">
          Transactions
        </a>
        </a>
        <a class="navbar-brand" href="{{ url('expenses') }}">
          Expenses
        </a>
        <a class="navbar-brand" href="{{ url('users') }}">
          Users
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fa fa-user fa-fw" href="#" data-toggle="dropdown">
              User
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">User Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>

        </ul>
      </div>
    </nav>

    <!-- SIDE NAV BAR -->





    @yield('content')

    @yield('footer')






    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>