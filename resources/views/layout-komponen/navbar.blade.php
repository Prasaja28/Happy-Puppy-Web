<header>
<style>
  .dropdown-menu {
    font-family: 'Poppins';
  }

  nav a:hover {
    color: #87ADF8 !important;
  }

  nav a {
    color: white !important;
  }

  .navbar-mobile div.dropdown-menu a {
    text-align: center;
    color: white !important;
  }

  .navbar-mobile div.dropdown-menu a:hover,
  .navbar-collapse div.dropdown-menu a:hover {
    background-color: transparent;
  }

  @media(min-width: 768px) {
    .navbar-mobile {
      display: none;
    }

    .navbar-collapse div.dropdown-menu a {
      text-align: right;
    }
  }
</style>

  <nav class="navbar navbar-expand-lg" style="background-color: #0F0F0F;">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('/img/HappupLogo.png')}}" style="width: auto;height:59px">
      </a>
      
      {{-- COLLAPSE ON MOBILE --}}
      <div class="navbar-mobile" id="nav-mobile">
        <div class="navbar-list d-flex">
          <div class="dropdown">
            <a class="nav-link" href="#" style="color:white"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </a>

            <div class="dropdown-menu" style="right: -20px; left: auto; background-color:#555251; font-family: 'Poppins';" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/lokasi') }}">{{ __('navbar.loc') }}</a>
              <a class="dropdown-item" href="{{ url('/news') }}">{{ __('navbar.news') }}</a>
              <a class="dropdown-item" href="{{ url('/profil') }}">{{ __('navbar.profile') }}</a>
              <a class="dropdown-item" href="{{ url('/waralaba') }}">{{ __('navbar.fran') }}</a>
              <a class="dropdown-item" href="{{ url('/karir') }}">{{ __('navbar.career') }}</a>
              <a class="dropdown-item" href="{{ url('/kontak') }}">{{ __('navbar.contact') }}</a>
            </div>
          </div>
        </div>
      </div>

      {{-- NON COLLAPSE DEKSTOP --}}
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
          <li class="nav-item pr-4">
            <a class="nav-link @yield('navbar-lokasi')" href="{{ url('/lokasi') }}">{{ __('navbar.loc') }}</a>
          </li>
          <li class="nav-item pr-4" >
            <a class="nav-link @yield('navbar-news')" href="{{ url('/news') }}">{{ __('navbar.news') }}</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link @yield('navbar-profile')" href="{{ url('/profil') }}">{{ __('navbar.profile') }}</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#555251;right: -70px;left: auto;">
              <a class="dropdown-item" href="{{ url('/waralaba') }}">{{ __('navbar.fran') }}</a>
              <a class="dropdown-item" href="{{ url('/karir') }}">{{ __('navbar.career') }}</a>
              <a class="dropdown-item" href="{{ url('/kontak') }}">{{ __('navbar.contact') }}</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script>
  var width = screen.width;
  console.log(width);
  
  if(width <= 990){
      document.getElementById('nav-mobile').style.display= 'block';
  }
</script>