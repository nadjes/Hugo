<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    {{Html::style('css/header.css')}}
    <title>@yield('title')</title>
  </head>
  <body>
    @include('layouts.header')

    @yield('section')

    @include('layouts.footer')

  </body>
</html>
