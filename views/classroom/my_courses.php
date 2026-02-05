<!--=====================================-->
<!--=       Breadcrumb Area Start      =-->
<!--=====================================-->
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Mis Cursos</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Inicio</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
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
                    $activePage = 'my-courses';
                    include $basePath . '/views/layouts/classroom/sidebar.php'; 
                ?>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-content">
                    
                    <!-- Stats Cards -->
                    <div class="row g-4 mb--40">
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 20px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 8px; display: flex; align-items: center; gap: 15px;">
                                <div class="icon" style="font-size: 30px; color: #1AB69D; background: rgba(26, 182, 157, 0.1); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                    <i class="icon-25"></i>
                                </div>
                                <div class="content">
                                    <p style="margin-bottom: 0; font-size: 14px; color: #525252;">Curso matriculado</p>
                                    <h3 class="count" style="margin-bottom: 0; font-size: 24px;">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 20px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 8px; display: flex; align-items: center; gap: 15px;">
                                <div class="icon" style="font-size: 30px; color: #8E56FF; background: rgba(142, 86, 255, 0.1); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                    <i class="icon-43"></i>
                                </div>
                                <div class="content">
                                    <p style="margin-bottom: 0; font-size: 14px; color: #525252;">Curso en progreso</p>
                                    <h3 class="count" style="margin-bottom: 0; font-size: 24px;">1</h3>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 20px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 8px; display: flex; align-items: center; gap: 15px;">
                                <div class="icon" style="font-size: 30px; color: #EE4A62; background: rgba(238, 74, 98, 0.1); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                    <i class="icon-23"></i>
                                </div>
                                <div class="content">
                                    <p style="margin-bottom: 0; font-size: 14px; color: #525252;">Curso finalizado</p>
                                    <h3 class="count" style="margin-bottom: 0; font-size: 24px;">0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 20px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 8px; display: flex; align-items: center; gap: 15px;">
                                <div class="icon" style="font-size: 30px; color: #31B978; background: rgba(49, 185, 120, 0.1); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                    <i class="icon-22"></i>
                                </div>
                                <div class="content">
                                    <p style="margin-bottom: 0; font-size: 14px; color: #525252;">Curso aprobado</p>
                                    <h3 class="count" style="margin-bottom: 0; font-size: 24px;">0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="edu-course-box" style="padding: 20px; background: #fff; box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); border-radius: 8px; display: flex; align-items: center; gap: 15px;">
                                <div class="icon" style="font-size: 30px; color: #FF5B5C; background: rgba(255, 91, 92, 0.1); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                    <i class="icon-21"></i>
                                </div>
                                <div class="content">
                                    <p style="margin-bottom: 0; font-size: 14px; color: #525252;">Curso suspendido</p>
                                    <h3 class="count" style="margin-bottom: 0; font-size: 24px;">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Tabs & Table -->
                    <div class="edu-course-area course-area-1 gap-tb-text">
                        
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" id="myCourseTab" role="tablist" style="border-bottom: 1px solid #e5e5e5; margin-bottom: 30px;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-selected="true" style="border: none; background: transparent; color: #525252; font-weight: 500; padding: 10px 20px; border-bottom: 2px solid transparent;">Todo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="inprogress-tab" data-bs-toggle="tab" data-bs-target="#inprogress" type="button" role="tab" aria-selected="false" style="border: none; background: transparent; color: #525252; font-weight: 500; padding: 10px 20px; border-bottom: 2px solid transparent;">En Curso</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finished-tab" data-bs-toggle="tab" data-bs-target="#finished" type="button" role="tab" aria-selected="false" style="border: none; background: transparent; color: #525252; font-weight: 500; padding: 10px 20px; border-bottom: 2px solid transparent;">Finalizado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="passed-tab" data-bs-toggle="tab" data-bs-target="#passed" type="button" role="tab" aria-selected="false" style="border: none; background: transparent; color: #525252; font-weight: 500; padding: 10px 20px; border-bottom: 2px solid transparent;">Aprobado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="failed-tab" data-bs-toggle="tab" data-bs-target="#failed" type="button" role="tab" aria-selected="false" style="border: none; background: transparent; color: #525252; font-weight: 500; padding: 10px 20px; border-bottom: 2px solid transparent;">Suspendido</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="myCourseTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped" style="vertical-align: middle;">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 80px;"></th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Resultado</th>
                                                <th scope="col">Fecha de vencimiento</th>
                                                <th scope="col">Hora de finalización</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="thumbnail" style="width: 60px; height: 60px; background: #f5f5f5; border-radius: 5px; overflow: hidden;">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/course/course-07.jpg" alt="Course" style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                </td>
                                                <td><h6 class="title" style="margin: 0; font-size: 16px;">Curso de ejemplo</h6></td>
                                                <td>0%</td>
                                                <td>16 de abril de 2026<br><span style="font-size: 12px; color: #999;">07:45</span></td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Add other tab panes if needed, empty for now or same structure -->
                            <div class="tab-pane fade" id="inprogress" role="tabpanel">
                                <p>No hay cursos en progreso.</p>
                            </div>
                             <div class="tab-pane fade" id="finished" role="tabpanel">
                                <p>No hay cursos finalizados.</p>
                            </div>
                             <div class="tab-pane fade" id="passed" role="tabpanel">
                                <p>No hay cursos aprobados.</p>
                            </div>
                             <div class="tab-pane fade" id="failed" role="tabpanel">
                                <p>No hay cursos suspendidos.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Tabs -->
<style>
    .nav-tabs .nav-link.active {
        color: #1AB69D !important;
        border-bottom: 2px solid #1AB69D !important;
    }
    .nav-tabs .nav-link:hover {
        color: #1AB69D !important;
    }
</style>
