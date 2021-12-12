<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css Internal -->
    @include('layout-komponen.css-list')
    <!-- css Eksternal -->
    @yield('css-eksternal')
    <title>@yield('title')</title>
  </head>
  <body>
      <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      @include('layout-komponen.navbar')
        @include('layout-komponen.layout-konten')
        @include('layout-komponen.footer')
        <!-- javascript internal -->
        @include('layout-komponen.js-list')
        <!-- Javascript Eksternal -->
        @yield('js-eksternal')
    </div>
  </body>
</html>