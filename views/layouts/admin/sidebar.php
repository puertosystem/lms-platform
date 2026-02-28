  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $baseUrl; ?>/admin/dashboard" class="brand-link">
      <img src="<?php echo $baseUrl; ?>/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
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
            <a href="<?php echo $baseUrl; ?>/admin/dashboard" class="nav-link <?php echo ($activePage ?? '') == 'dashboard' ? 'active' : ''; ?>">
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

          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'instructors') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'instructors') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Gestión de Instructores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/instructores/crear" class="nav-link <?php echo ($activePage ?? '') == 'instructors-create' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Instructor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/instructores" class="nav-link <?php echo ($activePage ?? '') == 'instructors-list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Instructores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'finance') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'finance') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Finanzas y Marketing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ventas" class="nav-link <?php echo ($activePage ?? '') == 'finance-sales' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas y Pedidos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/cupones" class="nav-link <?php echo ($activePage ?? '') == 'finance-coupons' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cupones de Descuento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/planes" class="nav-link <?php echo ($activePage ?? '') == 'finance-plans' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Planes de Suscripción</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'content') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'content') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Contenidos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/blog" class="nav-link <?php echo ($activePage ?? '') == 'content-blog' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog y Noticias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/comentarios" class="nav-link <?php echo ($activePage ?? '') == 'content-comments' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comentarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/certificados" class="nav-link <?php echo ($activePage ?? '') == 'content-certificates' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/faq" class="nav-link <?php echo ($activePage ?? '') == 'content-faq' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Preguntas Frecuentes</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Reportes -->
          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'reports') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'reports') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/reportes" class="nav-link <?php echo ($activePage ?? '') == 'reports-general' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/reportes/ventas" class="nav-link <?php echo ($activePage ?? '') == 'reports-sales' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte de Ventas</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Integraciones -->
          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'integrations') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'integrations') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-plug"></i>
              <p>
                Integraciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/integraciones" class="nav-link <?php echo ($activePage ?? '') == 'integrations-list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Todas las Integraciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/integraciones/api" class="nav-link <?php echo ($activePage ?? '') == 'integrations-api' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>API Keys</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Ajustes del Sistema -->
          <li class="nav-item <?php echo strpos(($activePage ?? ''), 'settings') !== false ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo strpos(($activePage ?? ''), 'settings') !== false ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Ajustes del Sistema
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ajustes/general" class="nav-link <?php echo ($activePage ?? '') == 'settings-general' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ajustes/idioma" class="nav-link <?php echo ($activePage ?? '') == 'settings-language' ? 'active' : ''; ?>">
                  <i class="fas fa-language nav-icon"></i>
                  <p>Idioma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ajustes/roles" class="nav-link <?php echo ($activePage ?? '') == 'settings-roles' ? 'active' : ''; ?>">
                  <i class="fas fa-user-tag nav-icon"></i>
                  <p>Roles y Permisos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ajustes/cron" class="nav-link <?php echo ($activePage ?? '') == 'settings-cron' ? 'active' : ''; ?>">
                  <i class="fas fa-clock nav-icon"></i>
                  <p>Trabajo Cron</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>/admin/ajustes/actualizacion" class="nav-link <?php echo ($activePage ?? '') == 'settings-update' ? 'active' : ''; ?>">
                  <i class="fas fa-sync nav-icon"></i>
                  <p>Actualización LMS</p>
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
