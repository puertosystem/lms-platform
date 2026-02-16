  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $baseUrl; ?>/admin" class="brand-link">
      <img src="<?php echo $baseUrl; ?>/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LMS Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex dropdown">
        <a href="#" class="d-flex w-100 align-items-center text-decoration-none dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <div class="image">
            <img src="<?php echo $baseUrl; ?>/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <span class="d-block">Administrador</span>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark shadow">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
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
          
          <!-- Escritorio -->
          <li class="nav-item">
            <a href="<?php echo $baseUrl; ?>/admin" class="nav-link <?php echo ($activePage ?? '') == 'dashboard' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Escritorio</p>
            </a>
          </li>

          <!-- Gestión de Usuarios -->
          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'users') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'users') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Gestión de Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/usuarios/crear" class="nav-link <?php echo ($activePage ?? '') == 'users-create' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/usuarios" class="nav-link <?php echo ($activePage ?? '') == 'users-list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Gestión de Cursos -->
          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'courses') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'courses') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Gestión de Cursos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/cursos/crear" class="nav-link <?php echo ($activePage ?? '') == 'courses-create' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Curso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/cursos/estructura" class="nav-link <?php echo ($activePage ?? '') == 'courses-structure' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estructura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/cursos/material" class="nav-link <?php echo ($activePage ?? '') == 'courses-material' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/cursos" class="nav-link <?php echo ($activePage ?? '') == 'courses-list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Cursos</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
