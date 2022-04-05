<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <a href="index3.html" class="brand-link">
          <img src="{{ asset('/img/HappupLogo.png') }}" alt="happupLogo" class="brand-image" width="40" height="40"style="opacity: .8">
        </a>
      </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link @yield('dashboard')">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/news-admin') }}" class="nav-link @yield('news-admin')">
            <i class="nav-icon far fa-newspaper"></i>
              <p>
             News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/songlist-admin') }}" class="nav-link @yield('songlist-admin')">
            <i class="nav-icon fas fa-music"></i>
              <p>
             Song List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/topartist-admin') }}" class="nav-link @yield('topartist-admin')">
            <i class="nav-icon fas fa-street-view"></i>
              <p>
              Top Artist
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/outlet-admin') }}" class="nav-link @yield('outlet-admin')">
            <i class="nav-icon fa fa-building-o"></i>
              <p>
              Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/profil-admin') }}" class="nav-link @yield('profil-admin')">
            <i class="nav-icon fa fa-history"></i>
              <p>
              Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kontak-admin') }}" class="nav-link @yield('kontak-admin')">
            <i class="nav-icon fa fa-phone"></i>
              <p>
              Kontak (Pesan)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/keluhan-admin') }}" class="nav-link @yield('keluhan-admin')">
            <i class="nav-icon fas fa-exclamation"></i>
              <p>
              Keluhan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/request-admin') }}" class="nav-link @yield('request-admin')">
            <i class="nav-icon fas fa-music"></i>
              <p>
              Request Lagu
              </p>
            </a>
          </li>
           <li class="nav-item">
                    <a href="{{ url('/career-admin') }}" class="nav-link @yield('career-admin')">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Karir
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/jobvacancy-admin') }}" class="nav-link @yield('jobvacancy-admin')">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Jobvacancy
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/waralaba-admin') }}" class="nav-link @yield('waralaba-admin')">
                        <i class="nav-icon fas fa-archway"></i>
                        <p>
                            Waralaba
                        </p>
                    </a>
                </li>
          <li class="nav-item">
            <a href="{{ url('/users-admin') }}" class="nav-link @yield('users-admin')">
            <i class="nav-icon fas fa-users"></i>
              <p>
              User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
