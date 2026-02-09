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
        <div class="dropdown me-3">
            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none dropdown-toggle no-arrow" id="streakDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-rocket-2-fill text-success fs-5"></i>
                <span class="fw-bold text-white">1</span>
            </a>
            
            <div class="dropdown-menu p-4 border-0" aria-labelledby="streakDropdown" style="width: 340px; background: #0f172a; border: 1px solid #1e293b; border-radius: 16px; margin-top: 15px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.5);">
                <!-- Contenido -->
                <div class="d-flex gap-3 mb-4">
                    <div class="streak-icon-wrapper">
                        <i class="ri-rocket-2-fill text-success" style="font-size: 2.5rem;"></i>
                    </div>
                    <div>
                        <h6 class="text-white fw-bold mb-1" style="font-size: 16px;">Racha semanal</h6>
                        <p class="text-muted mb-0" style="font-size: 13px; line-height: 1.4;">
                            ¡Llevas <span class="text-white fw-bold">1 semana</span> en racha! Regresa la próxima semana para mantenerla.
                        </p>
                    </div>
                </div>

                <!-- Pasos -->
                <div class="position-relative px-2">
                    <!-- Línea de Conexión -->
                    <div class="position-absolute w-100" style="height: 2px; background: #334155; top: 18px; left: 0; z-index: 0;"></div>
                    
                    <div class="d-flex justify-content-between position-relative" style="z-index: 1;">
                        <!-- Paso 1 (Activo) -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle bg-success shadow-sm mx-auto mb-2" style="width: 36px; height: 36px; border: 2px solid #0f172a;">
                                <i class="ri-check-line text-white fw-bold"></i>
                            </div>
                        </div>
                        
                        <!-- Paso 2 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2" style="width: 36px; height: 36px; background: #0f172a; border: 2px solid #334155;">
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2" style="width: 36px; height: 36px; background: #0f172a; border: 2px solid #334155;">
                            </div>
                        </div>

                        <!-- Paso 4 -->
                        <div class="text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mx-auto mb-2" style="width: 36px; height: 36px; background: #0f172a; border: 2px solid #334155;">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Etiquetas -->
                    <div class="d-flex align-items-center justify-content-between mt-1 px-1">
                        <span class="text-white fw-bold me-auto" style="font-size: 14px;">Semana:</span>
                        <div class="d-flex justify-content-between" style="width: 78%;">
                            <span class="text-white fw-bold" style="width: 36px; text-align: center; font-size: 14px;">1</span>
                            <span class="text-muted" style="width: 36px; text-align: center; font-size: 14px;">2</span>
                            <span class="text-muted" style="width: 36px; text-align: center; font-size: 14px;">3</span>
                            <span class="text-muted" style="width: 36px; text-align: center; font-size: 14px;">4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desplegable de Perfil de Usuario -->
        <div class="edu-header-profile dropdown">
            <a href="#" class="d-flex align-items-center gap-3 text-white text-decoration-none dropdown-toggle" id="userProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                <img src="<?php echo $baseUrl; ?>/assets/images/team/team-01.jpg" alt="User" style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover;">
                <div class="d-flex align-items-center">
                    <span class="fw-bold me-1">27</span>
                    <span class="text-muted" style="font-size: 0.9em;">pts</span>
                </div>
                <i class="icon-angle-down"></i>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="userProfileDropdown" style="background: #0f172a; border: 1px solid #1e293b; min-width: 240px; border-radius: 12px; margin-top: 15px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.5);">
                <!-- Encabezado -->
                <li class="mb-2">
                    <span class="d-block text-white fw-bold fs-6">Hola, Juan Perez</span>
                    <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil" class="d-block text-muted text-decoration-none mt-1 hover-text-white" style="font-size: 14px; transition: 0.3s;">Ver mi perfil</a>
                </li>
                
                <li><hr class="dropdown-divider my-2" style="border-color: #334155;"></li>
                
                <!-- Elementos del Menú -->
                <li><a class="dropdown-item text-white py-2 rounded" href="#" style="font-size: 14px;">Obtén 1 mes gratis</a></li>
                <li><a class="dropdown-item text-white py-2 rounded" href="#" style="font-size: 14px;">Mi suscripción</a></li>
                <li><a class="dropdown-item text-white py-2 rounded" href="#" style="font-size: 14px;">Contáctanos</a></li>
                
                <!-- Cerrar Sesión -->
                <li><a class="dropdown-item py-2 rounded mt-2 fw-bold" href="<?php echo $baseUrl; ?>/" style="color: #ef4444; font-size: 14px;">Cerrar sesión</a></li>
            </ul>
        </div>
        

    </div>
</header>