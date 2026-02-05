<!--=====================================-->
<!--=       Breadcrumb Area Start      =-->
<!--=====================================-->
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Mi Cuenta</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Inicio</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Mi Dashboard</li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <span></span>
        </li>
        <li class="shape-2 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-13.png" alt="shape"></li>
        <li class="shape-3 scene"><img data-depth="-2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-15.png" alt="shape"></li>
        <li class="shape-4">
            <span></span>
        </li>
        <li class="shape-5 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-07.png" alt="shape"></li>
    </ul>
</div>

<!--=====================================-->
<!--=        Dashboard Area Start       =-->
<!--=====================================-->
<section class="edu-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4">
                <?php 
                    $activePage = 'dashboard';
                    include $basePath . '/views/layouts/classroom/sidebar.php'; 
                ?>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-content">
                    
                    <!-- Welcome / Profile Header -->
                    <div class="edu-user-dashboard-header" style="display: flex; align-items: center; gap: 20px; padding: 30px; background: #F5F9FA; border-radius: 10px; margin-bottom: 40px;">
                        <div class="thumbnail">
                            <img src="<?php echo $baseUrl; ?>/assets/images/team/team-02.png" alt="User Image" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="content">
                            <h4 class="title" style="margin-bottom: 5px;">Hola, Juan Perez</h4>
                            <span class="subtitle">Bienvenido a tu panel de control</span>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.07); border-radius: 10px; text-align: center; transition: all 0.3s;">
                                <div class="icon" style="font-size: 40px; color: #1AB69D; margin-bottom: 15px;">
                                    <i class="icon-25"></i>
                                </div>
                                <div class="content">
                                    <h3 class="count" style="margin-bottom: 5px;">5</h3>
                                    <p style="margin-bottom: 0;">Cursos Inscritos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.07); border-radius: 10px; text-align: center; transition: all 0.3s;">
                                <div class="icon" style="font-size: 40px; color: #EE4A62; margin-bottom: 15px;">
                                    <i class="icon-23"></i>
                                </div>
                                <div class="content">
                                    <h3 class="count" style="margin-bottom: 5px;">2</h3>
                                    <p style="margin-bottom: 0;">Cursos Activos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 30px; background: #fff; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.07); border-radius: 10px; text-align: center; transition: all 0.3s;">
                                <div class="icon" style="font-size: 40px; color: #8E56FF; margin-bottom: 15px;">
                                    <i class="icon-24"></i>
                                </div>
                                <div class="content">
                                    <h3 class="count" style="margin-bottom: 5px;">0</h3>
                                    <p style="margin-bottom: 0;">Completados</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Courses -->
                    <div class="edu-course-area course-area-1 gap-tb-text mt--40">
                        <h4 class="title" style="margin-bottom: 20px;">Últimos Cursos</h4>
                        <div class="row g-5">
                            <!-- Start Single Course  -->
                            <div class="col-md-6 col-xl-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-course course-style-1 hover-button-bg-white">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="<?php echo $baseUrl; ?>/detalle-curso">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/course/course-07.jpg" alt="Course Meta">
                                            </a>
                                            <div class="time-top">
                                                <span class="duration"><i class="icon-61"></i>7 Semanas</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="course-level">Principiante</span>
                                            <h6 class="title">
                                                <a href="<?php echo $baseUrl; ?>/detalle-curso">Curso Completo de Camtasia</a>
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
                             <div class="col-md-6 col-xl-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-course course-style-1 hover-button-bg-white">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="<?php echo $baseUrl; ?>/detalle-curso">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/course/course-04.jpg" alt="Course Meta">
                                            </a>
                                            <div class="time-top">
                                                <span class="duration"><i class="icon-61"></i>3 Semanas</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="course-level">Avanzado</span>
                                            <h6 class="title">
                                                <a href="<?php echo $baseUrl; ?>/detalle-curso">Marketing Digital Avanzado</a>
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
            </div>
        </div>
    </div>
</section>
