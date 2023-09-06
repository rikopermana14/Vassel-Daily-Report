  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link navbar-light">
    <img src="{{asset('logo/logo-logindo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text" style="color: black;font-weight: bold; ">LOGINDO</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('logo/user.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <h5 class="d-block" style="color: white">{{ Auth::user()->name }}</h5>
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
        <li class="nav-item ">
          <a href="/admin-page" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/vdr" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Vessel Daily Report
            </p>
          </a>
        </li>
        @if (auth()->user()->hasRole('admin','operation'))
        <li class="nav-item">
          <a href="/vessel" class="nav-link">
            <i class="nav-icon fas fa-ship"></i>
            <p>
              Vessel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/product" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
            <p>
              Inventory
            </p>
          </a>
        </li>
        @endif
        @if (auth()->user()->hasRole('admin'))
        <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->