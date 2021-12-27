<header>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/img/example-logo.jpg')}}" style="width: 100px;height:40px" alt="Logo"></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="navbar-mobile text-white" id="nav-mobile">
        <div class="navbar-list d-flex">
          <div class="language d-flex" style="padding-top:10px;padding-right:20px">
            <a href="" style="margin-right:5px">INA</a>
            <div>|</div>
            <a href="" style="margin-left:5px;">ENG</a>
          </div>
          <div class="dropdown">
            <a class="nav-link"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </a>
            <div class="dropdown-menu" style="right: -20px; left: auto;background-color:#2d1923;" aria-labelledby="navbarDropdown">
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
        <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-end">
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('/lokasi') }}">LOKASI</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('/news') }}">BERITA</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('/profile') }}">PROFILE</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" style="color:white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#2d1923;">
              <a class="dropdown-item" href="{{ url('/waralaba') }}">WARALABA</a>
              <a class="dropdown-item" href="{{ url('/karir') }}">KARIR</a>
              <a class="dropdown-item" href="{{ url('/kontak') }}">KONTAK KAMI</a>
            </div>
          </li>
          <li class="nav-item mx-1">
            <div class="language d-flex">
              <a class="nav-link" href="">INA</a>
              <div class="nav-link">|</div>
              <a class="nav-link" href="">ENG</a>
            </div>
          </li>
        </ul>
    </div>
  </nav>
</header>
<script>
        var width = screen.width;
        if(width < 500){
            document.getElementById('nav-mobile').style.display='block';
        }else{
            document.getElementById('nav-mobile').style.display='none';
        }
</script>