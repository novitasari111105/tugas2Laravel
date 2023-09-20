<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('AdminLTE-3.2.0/index3.html')}}" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0/dist/img/alizabook.png')}}" alt="Alizabook Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Vita Book</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Novita sari</a>
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
            <a href="#" class="nav-link">
              <p>
                Form Input
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav-item">
              <li class="nav-item">
                <a href="{{ asset('anggota')}}" class="nav-link">
                  <i class=" fas fa-solid fa-users nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
        </ul>
              <li class="nav-item">
                <a href="{{ asset('buku')}}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('petugas.index')}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                  <p>Petugas</p>
                </a>
              </li>
            </ul>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
