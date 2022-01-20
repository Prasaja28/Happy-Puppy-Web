<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layout-komponen.css-eksternal')
    <title>@yield('title')</title>
    @yield('css-internal')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">></script>
  </head>
  <body>
    @include('layout-komponen.navbar')
    @include('layout-komponen.layout-konten')
    @include('layout-komponen.footer')
    @include('layout-komponen.js-eksternal')
    @yield('js-internal')
  </body>
</html>