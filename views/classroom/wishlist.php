<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

<!-- Header -->
<?php include $basePath . '/views/layouts/classroom/header.php'; ?>

<div class="classroom-wrapper">
    <!-- Sidebar -->
    <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="classroom-content">
        <div class="container-fluid">
            
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-4 fw-bold">Lista de deseos</h2>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="wishlistTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="true">Cursos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="paths-tab" data-bs-toggle="tab" data-bs-target="#paths" type="button" role="tab" aria-controls="paths" aria-selected="false">Rutas</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="wishlistTabsContent">
                <!-- Cursos Tab -->
                <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                    
                    <!-- Muestra de Cursos en Lista de Deseos (Mock Data) -->
                    <div class="row g-5 mt-2">
                        <!-- Curso 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>4 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Intermedio</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/tienda/carrito">Curso Profesional de Marketing Digital</a>
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
                                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                            <span class="fw-bold text-primary h5 mb-0">S/ 199.00</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="icon-24"></i>20 Lecciones</li>
                                            <li><i class="icon-25"></i>50 Estudiantes</li>
                                        </ul>
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito" class="edu-btn btn-medium w-100 mt-3">
                                            Añadir al carrito <i class="icon-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Curso 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>8 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Avanzado</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/tienda/carrito">Desarrollo Web Full Stack</a>
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
                                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                            <span class="fw-bold text-primary h5 mb-0">S/ 249.00</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="icon-24"></i>35 Lecciones</li>
                                            <li><i class="icon-25"></i>85 Estudiantes</li>
                                        </ul>
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito" class="edu-btn btn-medium w-100 mt-3">
                                            Añadir al carrito <i class="icon-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Curso 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="edu-course course-style-1 hover-button-bg-white">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>3 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Principiante</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/tienda/carrito">Diseño de Interfaces UX/UI</a>
                                        </h6>
                                        <div class="course-rating">
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span class="rating-count">(4.7)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                            <span class="fw-bold text-primary h5 mb-0">S/ 159.00</span>
                                        </div>
                                        <ul class="course-meta">
                                            <li><i class="icon-24"></i>18 Lecciones</li>
                                            <li><i class="icon-25"></i>40 Estudiantes</li>
                                        </ul>
                                        <a href="<?php echo $baseUrl; ?>/tienda/carrito" class="edu-btn btn-medium w-100 mt-3">
                                            Añadir al carrito <i class="icon-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rutas Tab -->
                <div class="tab-pane fade" id="paths" role="tabpanel" aria-labelledby="paths-tab">
                    <div class="empty-state text-center py-5">
                        <div class="empty-state-icon mb-3">
                            <i class="ri-heart-line display-4 text-muted"></i>
                        </div>
                        <h3 class="h4">No tienes rutas en tu lista de deseos</h3>
                        <p class="text-muted mb-4">Guarda las rutas que te interesan para acceder a ellas fácilmente más tarde.</p>
                        <a href="<?php echo $baseUrl; ?>/cursos" class="edu-btn btn-medium">Explorar Rutas <i class="icon-4"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
