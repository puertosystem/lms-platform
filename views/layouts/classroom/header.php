<header class="classroom-header">
    <div class="d-flex align-items-center">
        <button class="btn btn-link text-white me-3 d-none d-lg-block" id="toggle-sidebar">
            <i class="icon-54"></i>
        </button>
        <button class="btn btn-link text-white me-3 d-lg-none mobile-toggle">
            <i class="icon-54"></i>
        </button>
        <h1 class="course-title"><?php echo $pageTitle ?? 'Panel de Control'; ?></h1>
    </div>

    <div class="d-flex align-items-center">
        <!-- Desplegable de Racha Semanal -->
        <div class="dropdown me-4">
            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none dropdown-toggle no-arrow" id="streakDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-rocket-2-fill text-white header-icon-large"></i>
                <span class="text-white header-metric-value">1</span>
            </a>
            
            <div class="dropdown-menu p-4 border-0 streak-dropdown-menu" aria-labelledby="streakDropdown">
                <!-- Contenido -->
                <div class="d-flex gap-3 mb-4">
                    <div class="streak-icon-wrapper">
                        <i class="ri-rocket-2-fill text-success streak-icon-large"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 streak-title">Racha semanal</h6>
                        <p class="text-muted mb-0 streak-text">
                            ¡Llevas <span class="fw-bold streak-highlight">1 semana</span> en racha! Regresa la próxima semana para mantenerla.
                        </p>
                    </div>
                </div>

                <!-- Pasos -->
                <div class="position-relative px-2">
                    <!-- Línea de Conexión -->
                    <div class="position-absolute w-100 streak-progress-line"></div>
                    
                    <div class="d-flex justify-content-between position-relative" style="z-index: 1;">
                        <!-- Paso 1 (Activo) -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle bg-success shadow-sm mx-auto mb-2 streak-step-active-circle">
                                <i class="ri-check-line text-white fw-bold"></i>
                            </div>
                        </div>
                        
                        <!-- Paso 2 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2 streak-step-inactive-circle">
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2 streak-step-inactive-circle">
                            </div>
                        </div>

                        <!-- Paso 4 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2 streak-step-inactive-circle">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Etiquetas -->
                    <div class="d-flex align-items-center justify-content-between mt-1 px-1">
                        <span class="fw-bold me-auto streak-label-text">Semana:</span>
                        <div class="d-flex justify-content-between" style="width: 78%;">
                            <span class="fw-bold streak-day-box active">1</span>
                            <span class="text-muted streak-day-box">2</span>
                            <span class="text-muted streak-day-box">3</span>
                            <span class="text-muted streak-day-box">4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificaciones -->
        <div class="dropdown me-4">
            <a href="#" class="d-flex align-items-center text-decoration-none no-arrow position-relative" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-notification-3-line text-white header-icon-large"></i>
                            <span class="count">3</span>
                        </a>
            
            <div class="dropdown-menu dropdown-menu-end p-0 border-0 notification-dropdown-menu" aria-labelledby="notificationDropdown">
                <div class="p-3 border-bottom border-light">
                    <h6 class="m-0 fw-bold notification-title">Notificaciones</h6>
                </div>
                <div class="notification-list">
                    <a href="#" class="dropdown-item py-3 border-bottom border-light">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                    <i class="ri-message-3-line text-primary"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-1 notification-text">Nuevo comentario en tu tarea</p>
                                <span class="text-muted notification-time">Hace 5 min</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item py-3 border-bottom border-light">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                    <i class="ri-award-line text-success"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-1 notification-text">¡Ganaste una insignia!</p>
                                <span class="text-muted notification-time">Hace 1 hora</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 text-center">
                    <a href="#" class="text-decoration-none text-primary small fw-bold">Ver todas</a>
                </div>
            </div>
        </div>

        <!-- Desplegable de Perfil de Usuario -->
        <div class="edu-header-profile dropdown">
            <a href="#" class="d-flex align-items-center gap-3 text-white text-decoration-none dropdown-toggle" id="userProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                <img src="<?php echo $baseUrl; ?>/assets/images/team/team-01.jpg" alt="User" class="profile-avatar">
                <div class="d-flex align-items-center">
                    <span class="header-metric-value me-1">27</span>
                    <span class="text-muted header-metric-label">pts</span>
                </div>
                <i class="icon-angle-down fs-4"></i>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end p-3 profile-dropdown-menu" aria-labelledby="userProfileDropdown">
                <!-- Encabezado -->
                <li class="mb-2">
                    <span class="d-block fw-bold fs-6 profile-name">Hola, Juan Perez</span>
                    <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil" class="d-block text-muted text-decoration-none mt-1 profile-link">Ver mi perfil</a>
                </li>
                
                <li><hr class="dropdown-divider my-2 profile-divider"></li>
                
                <!-- Elementos del Menú -->
                <li><a class="dropdown-item py-2 rounded profile-item-link" href="#">Obtén 1 mes gratis</a></li>
                <li><a class="dropdown-item py-2 rounded profile-item-link" href="#">Mi suscripción</a></li>
                <li><a class="dropdown-item py-2 rounded profile-item-link" href="#">Contáctanos</a></li>
                
                <!-- Cerrar Sesión -->
                <li><a class="dropdown-item py-2 rounded mt-2 fw-bold profile-logout-link" href="<?php echo $baseUrl; ?>/">Cerrar sesión</a></li>
            </ul>
        </div>
        

    </div>
</header>