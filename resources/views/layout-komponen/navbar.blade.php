<header>
  <nav class="navbar navbar-expand-md">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/img/HappupLogo.png')}}" style="width: 100px;height:40px" alt="Logo"></a>
      <div class="navbar-mobile" id="nav-mobile">
        <div class="navbar-list d-flex">
          <div class="dropdown">
            <a class="nav-link" href="#" style="color:white"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars fa-2x"></i>
            </a>
            <div class="dropdown-menu" style="right: -20px; left: auto;background-color:#555251;font-family: 'Poppins';" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/lokasi') }}">LOKASI</a>
              <a class="dropdown-item" href="{{ url('/news') }}">BERITA</a>
              <a class="dropdown-item" href="{{ url('/profile') }}">PROFILE</a>
              <a class="dropdown-item" href="{{ url('/waralaba') }}">WARALABA</a>
              <a class="dropdown-item" href="{{ url('/karir') }}">KARIR</a>
              <a class="dropdown-item" href="{{ url('/FAQ') }}">KONTAK KAMI</a>
            </div>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-end" style="color:white">
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-lokasi') " aria-current="page" href="{{ url('/lokasi') }}">LOKASI</a>
          </li>
          <li class="nav-item mx-1" >
            <a class="nav-link @yield('navbar-news')" aria-current="page" href="{{ url('/news') }}">BERITA</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-profile')" aria-current="page" href="{{ url('/profile') }}">PROFILE</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars fa-lg" style="color:white;"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#555251;right: -70px;left: auto;">
              <a class="dropdown-item" href="{{ url('/waralaba') }}">WARALABA</a>
              <a class="dropdown-item" href="{{ url('/karir') }}">KARIR</a>
              <a class="dropdown-item" href="{{ url('/kontak') }}">KONTAK KAMI</a>
            </div>
          </li>
          
        </ul>
    </div>
  </nav>
</header>
<script>
        var width = screen.width;
        if(width < 600){
            document.getElementById('nav-mobile').style.display='block';
        }else{
            document.getElementById('nav-mobile').style.display='none';
        }
</script>