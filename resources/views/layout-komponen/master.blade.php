<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css Eksternal -->
    @include('layout-komponen.css-eksternal')
    <!-- css Internal -->
    
    <title>@yield('title')</title>
  </head>
  @yield('css-internal')
<style>
  .navbar-nav{
    margin-left:auto;
  }
  .navbar-nav .nav-link {
		    color: white ;
  }
  .navbar-nav .nav-link:hover {
		    color: #3792cb;
  }
  .navbar-nav .active {
		    color: #3792cb !important;
  }
  .navbar{
    background-color:#000000;
  }
  .dropdown-item{
    color:white;
  }
  @media (min-width: 576px) { 
    #footer-right{
      text-align:center;
    }
    #footer-left{
      text-align:center
    } 
  }
</style>
  <body>
      @include('layout-komponen.navbar')
      
        @include('layout-komponen.layout-konten')

        @include('layout-komponen.footer')

        <!-- javascript Eksternal -->
        @include('layout-komponen.js-eksternal')
        <!-- Javascript Internal -->
        @yield('js-internal')
  </body>
</html>