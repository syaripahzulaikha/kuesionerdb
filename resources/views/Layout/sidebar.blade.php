<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('/template/frontend/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DASHBOARD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route ('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route ('data-kuesioner') }}" class="nav-link">
                  <i class="fas fa-box nav-icon"></i>
                  <p>Data Kuesioner</p>
                </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route ('aspek-pekerjaan') }}" class="nav-link">
                    <i class="fas fa-walking"></i>
                  <p>Aspek Pekerjaan  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route ('aspek-relasi') }}" class="nav-link">
                    <i class="fas fa-book-reader"></i>
                  <p>Aspek Relasi Dengan Pimpinan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route ('aspek-suasanakerja') }}" class="nav-link">
                    <i class="fas fa-bacon"></i>
                  <p>Aspek Suasana Kerja</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route ('aspek-sarana') }}" class="nav-link">
                    <i class="fas fa-building"></i>
                  <p>Aspek Sarana Dan Prasarana</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route ('aspek-pengembangan') }}"class="nav-link">
                    <i class="fas fa-blog"></i>
                  <p>Aspek pengembangan dan Promosi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href= "{{ route ('aspek-pendapatan') }}" class="nav-link">
                    <i class="fas fa-praying-hands"></i>
                  <p>Aspek Pendapatan dan Kesejahteraan</p>
                </a>
              </li>

            </ul>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                  <p>Data User</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <a href="{{ route ('logout') }}" class="nav-link alert-danger" oneclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt nav-icon"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="#" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
