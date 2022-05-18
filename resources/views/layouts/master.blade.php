<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mine.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    @include('layouts.nav')
    
    @yield('content')
    
    <script src="{{URL::asset('js/popper.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    @yield('script')
  </body>
</html>