<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

    <!-- Header -->
    <?php include $basePath . '/views/layouts/classroom/header.php'; ?>

    <div class="classroom-wrapper classroom-profile-page">
    <!-- Sidebar -->
        <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="classroom-content" id="main-content">
            <div class="container-fluid">
                
                <!-- Dashboard Content Injected Here -->
                 <div class="edu-user-dashboard-header">
                    <div class="thumbnail">
                        <img src="<?php echo $baseUrl; ?>/assets/images/team/team-01.jpg" alt="User Image">
                    </div>
                    <div class="content">
                        <h4 class="title">Hola, Juan Perez</h4>
                        <span class="subtitle">Bienvenido a tu panel de control</span>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box">
                            <div class="icon icon-enrolled">
                                <i class="icon-25"></i>
                            </div>
                            <div class="content">
                                <h3 class="count">5</h3>
                                <p>Cursos Inscritos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box">
                            <div class="icon icon-active">
                                <i class="icon-23"></i>
                            </div>
                            <div class="content">
                                <h3 class="count">2</h3>
                                <p>Cursos Activos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box">
                            <div class="icon icon-completed">
                                <i class="icon-24"></i>
                            </div>
                            <div class="content">
                                <h3 class="count">0</h3>
                                <p>Completados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Courses -->
                <div class="edu-course-area course-area-1 gap-tb-text mt--40">
                    <h4 class="title section-title-custom">Últimos Cursos</h4>
                    <div class="row g-5">
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-xl-4">
                            <div class="edu-course course-style-1 hover-button-bg-white">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-07.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>7 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Principiante</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">Curso Completo de Camtasia</a>
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
                                            <li><i class="icon-24"></i>15 Lecciones</li>
                                            <li><i class="icon-25"></i>31 Estudiantes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->

                         <!-- Start Single Course  -->
                         <div class="col-md-6 col-xl-4">
                            <div class="edu-course course-style-1 hover-button-bg-white">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                        </a>
                                        <div class="time-top">
                                            <span class="duration"><i class="icon-61"></i>3 Semanas</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="course-level">Avanzado</span>
                                        <h6 class="title">
                                            <a href="<?php echo $baseUrl; ?>/aula-virtual/curso/ver">Marketing Digital Avanzado</a>
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
                                            <li><i class="icon-24"></i>10 Lecciones</li>
                                            <li><i class="icon-25"></i>120 Estudiantes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                    </div>
                </div>

            </div>
        </main>
    </div>

    <?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
