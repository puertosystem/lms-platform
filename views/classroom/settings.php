<?php include $basePath . '/views/layouts/classroom/head.php'; ?>


    <!-- Encabezado -->
    <?php include $basePath . '/views/layouts/classroom/header.php'; ?>

    <div class="classroom-wrapper classroom-settings-page">
        <!-- Barra Lateral -->
        <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

        <!-- Contenido Principal -->
        <main class="classroom-content" id="main-content">
            <div class="container-fluid">
                
                <div class="row g-5">
                    <!-- Columna Izquierda: Imagen de Perfil y Redes Sociales -->
                    <div class="col-lg-4 col-xl-3">
                        <div class="card border-0 shadow-sm mb-4 settings-card">
                            <div class="card-body text-center p-4">
                                <div class="position-relative d-inline-block mb-3 profile-avatar-container">
                                    <img src="<?php echo $baseUrl; ?>/assets/images/team/team-01.jpg" alt="User Image" class="rounded-circle img-fluid profile-avatar">
                                    <button class="btn btn-sm btn-primary profile-edit-btn">
                                        <i class="ri-camera-fill"></i>
                                    </button>
                                </div>
                                <p class="text-muted small mb-4">Arrastra aquí tu imagen de perfil o <a href="#" class="text-success text-decoration-none">sube una foto</a></p>
                                
                                <h6 class="text-start fw-bold mb-3">Cuentas Sociales</h6>
                                <div class="d-grid gap-2 mb-4">
                                    <button class="btn btn-light text-start border btn-social btn-twitter">
                                        <i class="ri-twitter-x-fill"></i> Conectarse con Twitter
                                    </button>
                                    <button class="btn btn-light text-start border btn-social btn-facebook">
                                        <i class="ri-facebook-fill text-primary"></i> Conectarse con Facebook
                                    </button>
                                </div>
                                
                                <div class="d-grid">
                                    <button class="edu-btn btn-small">Cambiar contraseña</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna Derecha: Formulario de Ajustes -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="card border-0 shadow-sm settings-card">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Ajustes del Perfil</h4>
                                
                                <form>
                                    <!-- Tabs Navigation -->
                                    <ul class="nav nav-tabs mb-4" id="settingsTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active fw-bold" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">
                                                <i class="ri-user-line me-1"></i> Información Personal
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fw-bold" id="professional-tab" data-bs-toggle="tab" data-bs-target="#professional" type="button" role="tab" aria-controls="professional" aria-selected="false">
                                                <i class="ri-briefcase-line me-1"></i> Perfil Profesional
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fw-bold" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">
                                                <i class="ri-lock-password-line me-1"></i> Cuenta y Privacidad
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="settingsTabContent">
                                        
                                        <!-- Tab: Información Personal -->
                                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                            <!-- Nombre y Apellidos -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">Nombres</label>
                                                    <input type="text" class="form-control" value="Norberto">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">Apellidos</label>
                                                    <input type="text" class="form-control" value="Ramirez">
                                                </div>
                                            </div>

                                            <!-- Género, Cumpleaños y Móvil -->
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label small text-muted fw-bold">Género</label>
                                                    <select class="form-select">
                                                        <option selected>Seleccionar</option>
                                                        <option value="male">Masculino</option>
                                                        <option value="female">Femenino</option>
                                                        <option value="other">Otro</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="form-label small text-muted fw-bold">Cumpleaños</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label small text-muted fw-bold">País</label>
                                                    <select class="form-select">
                                                        <option selected>Seleccionar País</option>
                                                        <option value="PE">Perú</option>
                                                        <option value="MX">México</option>
                                                        <option value="US">Estados Unidos</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="ES">España</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="form-label small text-muted fw-bold">Teléfono Móvil</label>
                                                    <div class="d-flex gap-2">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center justify-content-between gap-2 country-select-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <img src="https://flagcdn.com/w20/pe.png" alt="PE" class="flag-icon"> +51
                                                                </div>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">+51 Peru</a></li>
                                                                <li><a class="dropdown-item" href="#">+1 USA</a></li>
                                                                <li><a class="dropdown-item" href="#">+52 Mexico</a></li>
                                                            </ul>
                                                        </div>
                                                        <input type="text" class="form-control flex-grow-1" value="914853912">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab: Perfil Profesional -->
                                        <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                            <!-- Biografía -->
                                            <div class="mb-3">
                                                <label class="form-label small text-muted fw-bold">Biografía</label>
                                                <textarea class="form-control" rows="4" placeholder="Cuéntanos un poco sobre ti..."></textarea>
                                            </div>

                                            <!-- Sitio Web y LinkedIn -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">Sitio web personal</label>
                                                    <input type="url" class="form-control" placeholder="https://...">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">LinkedIn</label>
                                                    <input type="url" class="form-control" placeholder="URL de tu perfil">
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <!-- Nivel Educativo -->
                                            <div class="mb-4">
                                                <label class="form-label small text-muted fw-bold">Nivel Educativo</label>
                                                <select class="form-select">
                                                    <option selected>Seleccionar nivel</option>
                                                    <option value="highschool">Secundaria</option>
                                                    <option value="university">Universidad</option>
                                                    <option value="master">Maestría</option>
                                                    <option value="phd">Doctorado</option>
                                                </select>
                                            </div>

                                            <!-- Interruptores -->
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-between align-items-center border p-3 rounded">
                                                        <label class="form-check-label mb-0" for="hasExperience">¿Tienes experiencia laboral?</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="hasExperience">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-between align-items-center border p-3 rounded">
                                                        <label class="form-check-label mb-0" for="isWorking">¿Estás trabajando actualmente?</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="isWorking">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h5 class="fw-bold mb-3 mt-4">Temas de interés</h5>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestAudio">
                                                        <label class="form-check-label" for="interestAudio">Audiovisual</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestFrontend" checked>
                                                        <label class="form-check-label" for="interestFrontend">Desarrollador Frontend</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestBackend">
                                                        <label class="form-check-label" for="interestBackend">Desarrollador Backend</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestDesign">
                                                        <label class="form-check-label" for="interestDesign">Diseñador Gráfico</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestUX">
                                                        <label class="form-check-label" for="interestUX">Diseño UX</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestEnglish">
                                                        <label class="form-check-label" for="interestEnglish">Inglés</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestBusiness">
                                                        <label class="form-check-label" for="interestBusiness">Negocios</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="interestMarketing">
                                                        <label class="form-check-label" for="interestMarketing">Marketing</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab: Cuenta y Privacidad -->
                                        <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                                            <!-- Usuario y Email -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">Usuario</label>
                                                    <input type="text" class="form-control" value="info83062">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label small text-muted fw-bold">Email</label>
                                                    <input type="email" class="form-control" value="info@norbertoramirez.com" disabled>
                                                </div>
                                            </div>

                                            <h5 class="fw-bold mb-3 mt-4">Opciones de privacidad</h5>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" id="privacyPublic" checked>
                                                        <label class="form-check-label" for="privacyPublic">Perfil público visible</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" id="privacyName" checked>
                                                        <label class="form-check-label" for="privacyName">Mostrar mi nombre real</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" id="privacySocials" checked>
                                                        <label class="form-check-label" for="privacySocials">Mostrar mis redes sociales</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" id="privacyCountry" checked>
                                                        <label class="form-check-label" for="privacyCountry">Mostrar mi país</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botones Footer -->
                                    <div class="d-flex gap-3 mt-5 pt-3 border-top">
                                        <button type="submit" class="edu-btn btn-medium">Guardar Cambios <i class="icon-4"></i></button>
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil" class="edu-btn btn-medium btn-border">Cancelar</a>
                                    </div>
                                    
                                    <div class="text-center mt-4">
                                        <p class="small text-muted mb-0">¿Deseas darte de baja? <a href="#" class="text-danger text-decoration-none">Eliminar cuenta</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
