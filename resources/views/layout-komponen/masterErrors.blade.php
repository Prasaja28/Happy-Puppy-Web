<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layout-komponen.css-eksternal')
    <title>@yield('title')</title>
    @yield('css-internal')

    <script src="https://kit.fontawesome.com/34f8c2075a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
</head>

<body>
    {{-- @include('layout-komponen.navbar') --}}
    @include('layout-komponen.layout-konten')
    @include('layout-komponen.footer')
    @include('layout-komponen.js-eksternal')
    @yield('js-internal')
</body>

</html>
