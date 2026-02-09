<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

    <!-- Header -->
    <?php include $basePath . '/views/layouts/classroom/header.php'; ?>

    <div class="classroom-wrapper">
        <!-- Sidebar -->
        <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="classroom-content" id="main-content">
            <div class="container-fluid">
                
                <!-- Dashboard Content Injected Here -->
                 <div class="edu-user-dashboard-header" style="display: flex; align-items: center; gap: 20px; padding: 30px; background: #fff; border-radius: 10px; margin-bottom: 40px; border: 1px solid #eee;">
                    <div class="thumbnail">
                        <img src="<?php echo $baseUrl; ?>/assets/images/team/team-01.jpg                                                                                                                                                                                                                                                                                                                                    " alt="User Image" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                    </div>
                    <div class="content">
                        <h4 class="title" style="margin-bottom: 5px; color: #333;">Hola, Juan Perez</h4>
                        <span class="subtitle" style="color: #666;">Bienvenido a tu panel de control</span>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #eee;">
                            <div class="icon" style="font-size: 40px; color: #1AB69D; margin-bottom: 15px;">
                                <i class="icon-25"></i>
                            </div>
                            <div class="content">
                                <h3 class="count" style="margin-bottom: 5px; color: #333;">5</h3>
                                <p style="margin-bottom: 0; color: #666;">Cursos Inscritos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #eee;">
                            <div class="icon" style="font-size: 40px; color: #EE4A62; margin-bottom: 15px;">
                                <i class="icon-23"></i>
                            </div>
                            <div class="content">
                                <h3 class="count" style="margin-bottom: 5px; color: #333;">2</h3>
                                <p style="margin-bottom: 0; color: #666;">Cursos Activos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #eee;">
                            <div class="icon" style="font-size: 40px; color: #8E56FF; margin-bottom: 15px;">
                                <i class="icon-24"></i>
                            </div>
                            <div class="content">
                                <h3 class="count" style="margin-bottom: 5px; color: #333;">0</h3>
                                <p style="margin-bottom: 0; color: #666;">Completados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Courses -->
                <div class="edu-course-area course-area-1 gap-tb-text mt--40">
                    <h4 class="title" style="margin-bottom: 20px; color: #333;">Últimos Cursos</h4>
                    <div class="row g-5">
                        <!-- Start Single Course  -->
                        <div class="col-md-6 col-xl-4">
                            <div class="edu-course course-style-1 hover-button-bg-white" style="border: 1px solid #eee; border-radius: 8px;">
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
                            <div class="edu-course course-style-1 hover-button-bg-white" style="border: 1px solid #eee; border-radius: 8px;">
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
