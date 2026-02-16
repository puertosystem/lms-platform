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
                    <a class="nav-link active" href="#" onclick="return false;">Mis Puntos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo $baseUrl; ?>/aula-virtual/como-conseguir-puntos">Distribución de Puntos</a>
                </li>
            </ul>

            <!-- Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    
                    <!-- Header Section -->
                    <div class="section-title section-left mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div>
                            <h4 class="title mb-0">Historial de Puntos</h4>
                            <p class="text-muted small mt-2">Revisa el historial detallado de tus puntos ganados.</p>
                        </div>
                        
                        <div class="points-badge d-flex align-items-center bg-light p-3 rounded-3 border">
                            <div class="icon me-3">
                                <i class="ri-coin-fill" style="font-size: 2.5rem; color: #f8b80e;"></i>
                            </div>
                            <div class="content text-end">
                                <span class="d-block text-muted small text-uppercase fw-bold">Saldo Actual</span>
                                <h3 class="mb-0 text-primary">410</h3>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Points Table -->
                    <div class="table-responsive">
                        <table class="table edu-table-style-1 table-hover">
                            <thead>
                                <tr>
                                    <th>EVENTO</th>
                                    <th>ORIGEN</th>
                                    <th>FECHA</th>
                                    <th class="text-end">PUNTOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Mock Data -->
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Curso PHP – OpenBootcamp</td>
                                    <td class="text-muted">1 año hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Crea tu escuela OnLine</td>
                                    <td class="text-muted">1 año hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Community Manager</td>
                                    <td class="text-muted">1 año hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">ChatGPT desde Cero</td>
                                    <td class="text-muted">1 año hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Wondershare Filmora Video Editor</td>
                                    <td class="text-muted">2 años hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Finalización de la lección</td>
                                    <td class="text-muted">Presentación del curso y conceptos básicos de la web</td>
                                    <td class="text-muted">2 años hace</td>
                                    <td class="text-end fw-bold text-success">+10</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Compra del curso</td>
                                    <td class="text-muted">Introducción a HTML teórico</td>
                                    <td class="text-muted">2 años hace</td>
                                    <td class="text-end fw-bold text-success">+50</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-light">
                                <tr>
                                    <td colspan="3" class="fw-bold text-uppercase py-3">TOTAL PUNTOS</td>
                                    <td class="text-end fw-bold fs-5 py-3">410</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>