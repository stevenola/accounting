<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- <title>{{ config('app.name', 'ARC Accounting') }}</title> -->



  <script src="https://kit.fontawesome.com/7d04f56961.js" crossorigin="anonymous"></script>

  <!-- <style>
    footer {
      position: absolute;
      bottom: 0;


    }
  </style> -->


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>






  @yield('content')

  @yield('footer')






  <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>