<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

    <!-- Header -->
    <?php include $basePath . '/views/layouts/classroom/header.php'; ?>

    <div class="classroom-wrapper classroom-settings-page">
        <!-- Sidebar -->
        <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="classroom-content" id="main-content">
            <div class="container-fluid">
                
                <div class="row g-5">
                    <!-- Left Column: Profile Image & Socials -->
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
                                    <button class="btn btn-dark">Cambiar contraseña</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Settings Form -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="card border-0 shadow-sm settings-card">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Tus Datos</h4>
                                <form>
                                    <!-- Name & Lastname -->
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

                                    <!-- User & Email -->
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

                                    <!-- Website -->
                                    <div class="mb-3">
                                        <label class="form-label small text-muted fw-bold">Sitio web personal</label>
                                        <input type="url" class="form-control">
                                    </div>

                                    <!-- Bio -->
                                    <div class="mb-3">
                                        <label class="form-label small text-muted fw-bold">Biografía</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>

                                    <!-- LinkedIn -->
                                    <div class="mb-3">
                                        <label class="form-label small text-muted fw-bold">LinkedIn</label>
                                        <input type="url" class="form-control">
                                    </div>

                                    <!-- Gender, Birthday & Mobile -->
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
                                        <div class="col-md-4">
                                            <label class="form-label small text-muted fw-bold">Cumpleaños</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label small text-muted fw-bold">Teléfono Móvil</label>
                                            <div class="d-flex gap-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2 country-select-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="https://flagcdn.com/w20/pe.png" alt="PE" style="width: 20px;"> +51
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

                                    <hr class="my-5">

                                    <h5 class="fw-bold mb-4">Educación e intereses</h5>
                                    
                                    <!-- Interests -->
                                    <div class="mb-4">
                                        <label class="form-label small text-muted fw-bold mb-3">Temas de interés</label>
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

                                    <!-- Education Level -->
                                    <div class="mb-4">
                                        <select class="form-select">
                                            <option selected>Nivel educativo</option>
                                            <option value="highschool">Secundaria</option>
                                            <option value="university">Universidad</option>
                                            <option value="master">Maestría</option>
                                        </select>
                                    </div>

                                    <!-- Toggles -->
                                    <div class="mb-3 d-flex justify-content-between align-items-center">
                                        <label class="form-check-label" for="hasExperience">Con la experiencia</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="hasExperience">
                                        </div>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-between align-items-center">
                                        <label class="form-check-label" for="isWorking">¿Estás trabajando?</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="isWorking">
                                        </div>
                                    </div>

                                    <hr class="my-5">

                                    <h5 class="fw-bold mb-4">Opciones de privacidad</h5>

                                    <div class="row g-3 mb-5">
                                        <div class="col-md-6">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="privacyPublic" checked>
                                                <label class="form-check-label" for="privacyPublic">Configurar mi perfil como público</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="privacyName" checked>
                                                <label class="form-check-label" for="privacyName">Mostrar mi nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="privacySocials" checked>
                                                <label class="form-check-label" for="privacySocials">Mostrar mis redes sociales</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" id="privacyCountry" checked>
                                                <label class="form-check-label" for="privacyCountry">Mostrar mi país de origen</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="d-flex gap-3 mb-4">
                                        <button type="submit" class="btn btn-save-changes px-4 py-2 fw-bold">Guardar cambios</button>
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil" class="btn btn-outline-secondary px-4 py-2 fw-bold bg-white text-dark border">Volver al perfil</a>
                                    </div>
                                    
                                    <div class="text-center border-top pt-4">
                                        <p class="small text-muted">De acuerdo a cambios en nuestras políticas de privacidad, ahora podrás <a href="#" class="text-info">Eliminar cuenta</a></p>
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
