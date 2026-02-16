<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

<!-- Header -->
<?php include $basePath . '/views/layouts/classroom/header.php'; ?>

<div class="classroom-wrapper">
    <!-- Sidebar -->
    <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="classroom-content" id="main-content">
        <div class="container-fluid p-4">
            
            <h2 class="mb-4 fw-bold">Tus Puntos</h2>

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo $baseUrl; ?>/aula-virtual/mis-puntos">Mis Puntos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="return false;">Distribución de Puntos</a>
                </li>
            </ul>

            <!-- Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    
                    <!-- Header Section -->
                    <div class="section-title section-left mb-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h4 class="title mb-0">Distribución de puntos</h4>
                        <p class="text-muted small mt-2">Conoce cómo puedes acumular más puntos en la plataforma.</p>
                    </div>

                    <!-- Distribution Table -->
                    <div class="table-responsive">
                        <table class="table edu-table-style-1 table-hover">
                            <thead>
                                <tr>
                                    <th width="30%">NOMBRE</th>
                                    <th width="60%">DESCRIPCIÓN</th>
                                    <th width="10%" class="text-end">PUNTOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Registro</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán por registrarse.</td>
                                    <td class="text-end fw-bold text-dark">50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán por comprar un curso</td>
                                    <td class="text-end fw-bold text-dark">50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Aprobando asignación</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando un instructor apruebe la asignación</td>
                                    <td class="text-end fw-bold text-dark">25</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finalización del curso</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando completen el curso y obtengan un certificado</td>
                                    <td class="text-end fw-bold text-dark">25</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Aprobando examen</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando aprueben el cuestionario</td>
                                    <td class="text-end fw-bold text-dark">15</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Aprobando examen con 100%</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando aprueben el cuestionario con una calificación del 100%.</td>
                                    <td class="text-end fw-bold text-dark">15</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finalización de la lección</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando completen cada lección.</td>
                                    <td class="text-end fw-bold text-dark">10</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Uniéndose al grupo</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando se unan a un grupo.</td>
                                    <td class="text-end fw-bold text-dark">5</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Haciendo amigos</td>
                                    <td class="text-muted">Los puntos que los usuarios obtendrán cuando acepten la amistad de otros estudiantes.</td>
                                    <td class="text-end fw-bold text-dark">5</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Usuario registrado (Afiliado)</td>
                                    <td class="text-muted">Comparte tu enlace de afiliado y obtén puntos por los usuarios que usen tu enlace.</td>
                                    <td class="text-end fw-bold text-dark">5</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Curso comprado (Afiliado)</td>
                                    <td class="text-muted">Comparte tu enlace de afiliado y obtén puntos por los usuarios que usen tu enlace.</td>
                                    <td class="text-end fw-bold text-dark">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>