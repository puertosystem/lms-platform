<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

<!-- Header -->
<?php include $basePath . '/views/layouts/classroom/header.php'; ?>

<div class="classroom-wrapper">
    <!-- Sidebar -->
    <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="classroom-content">
        <div class="container-fluid p-4">
            <h2 class="mb-4 fw-bold">Mis certificados</h2>

            <!-- Tabs -->
            <ul class="nav nav-tabs" id="certificateTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="true">Cursos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="paths-tab" data-bs-toggle="tab" data-bs-target="#paths" type="button" role="tab" aria-controls="paths" aria-selected="false">Rutas</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="certificateTabsContent">
                <!-- Cursos Tab -->
                <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                    
                    <!-- Muestra de Certificados (Mock Data) -->
                    <div class="row g-5">
                        <!-- Certificado 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white" style="border: 1px solid #eee; border-radius: 8px;">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>8 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Completado</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">Curso Profesional de Marketing Digital</a>
                                        </h6>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(5.0)</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="ri-calendar-line"></i> 15 Ene, 2024</li>
                                        </ul>
                                        <button class="btn btn-primary w-100 btn-sm mt-3">
                                            <i class="ri-download-line me-2"></i>Descargar Certificado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certificado 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white" style="border: 1px solid #eee; border-radius: 8px;">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-05.jpg" alt="Course Meta" onerror="this.src='<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg'">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>12 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Completado</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">Desarrollo Web Full Stack con PHP y MySQL</a>
                                        </h6>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(4.9)</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="ri-calendar-line"></i> 20 Dic, 2023</li>
                                        </ul>
                                        <button class="btn btn-primary w-100 btn-sm mt-3">
                                            <i class="ri-download-line me-2"></i>Descargar Certificado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certificado 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white" style="border: 1px solid #eee; border-radius: 8px;">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-06.jpg" alt="Course Meta" onerror="this.src='<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg'">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>6 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Completado</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">Curso de Diseño de Interfaces UX/UI</a>
                                        </h6>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(4.8)</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="ri-calendar-line"></i> 10 Nov, 2023</li>
                                        </ul>
                                        <button class="btn btn-primary w-100 btn-sm mt-3">
                                            <i class="ri-download-line me-2"></i>Descargar Certificado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Estado Vacío (Oculto por defecto, pero listo si se necesita) -->
                    <!-- 
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <i class="icon-award"></i>
                        </div>
                        <h3>Tu colección de certificados está esperando</h3>
                        <p class="text-muted mb-4">Sigue aprendiendo y completa cursos para acumular logros y certificados. ¡Tu esfuerzo merece ser reconocido!</p>
                        <a href="<?php echo $baseUrl; ?>/cursos" class="btn btn-primary">Comenzar a aprender</a>
                    </div>
                    -->
                </div>

                <!-- Rutas Tab (Ejemplo de estado vacío como en la imagen) -->
                <div class="tab-pane fade" id="paths" role="tabpanel" aria-labelledby="paths-tab">
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <i class="ri-award-line"></i>
                        </div>
                        <h3 class="h4">Aún no has completado ninguna ruta</h3>
                        <p class="text-muted mb-4">Las rutas de aprendizaje te guían a través de una serie de cursos para dominar una habilidad completa.</p>
                        <a href="<?php echo $baseUrl; ?>/cursos" class="btn btn-primary">Explorar Rutas</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
