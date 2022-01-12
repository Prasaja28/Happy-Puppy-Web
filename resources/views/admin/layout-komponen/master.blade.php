<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- CSS Eksternal -->
  @include('admin/layout-komponen/css-eksternal')
  <!-- css internal -->
  @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/img/HappupLogo.png') }}" alt="happupLogo" height="25" width="75">
  </div>
  
  <!-- top navbar -->
  @include('admin/layout-komponen/top-bar')

  <!-- Side Navbar -->
  @include('admin/layout-komponen/side-bar')

  <!-- konten layout -->
  @include('admin/layout-komponen/layout-konten')
  
  <!-- footer layout -->
  @include('admin/layout-komponen/footer-layout')
  
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- js ekternal -->
@include('admin/layout-komponen/js-eksternal')

<!-- js internal -->
@yield('script')

</body>
</html>
