<header>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/img/example-logo.jpg')}}" style="width: 100px;height:40px" alt="Logo"></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-end">
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('') }}">News</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('') }}">Lokasi</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('') }}">Daftar Lagu</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link @yield('navbar-home')" aria-current="page" href="{{ url('') }}">Profile</a>
          </li>
          <li class="nav-item mx-1 dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Waralaba</a>
              <a class="dropdown-item" href="#">Karir</a>
              <a class="dropdown-item" href="#">FAQ</a>
              <a class="dropdown-item" href="#">Kontak</a>
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
