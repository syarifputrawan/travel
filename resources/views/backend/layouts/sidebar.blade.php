<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

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
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/about" class="nav-link">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>about</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/perkenalan" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>perkenalan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/treveling" class="nav-link">
            <i class="nav-icon fas fa-plane"></i>
            <p>treveling</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sedikit" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>sedikit</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/view_kontak" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>view_kontak</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/footer" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>footer</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/team" class="nav-link">
            <i class="nav-icon fas fa-star"></i>
            <p>team</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
