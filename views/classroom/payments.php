<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

<!-- Header -->
<?php include $basePath . '/views/layouts/classroom/header.php'; ?>

<div class="classroom-wrapper">
    <!-- Sidebar -->
    <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="classroom-content">
        <div class="container-fluid p-4">
            <h2 class="mb-4 fw-bold">Pagos y Facturación</h2>

            <!-- Tabs -->
            <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true">Historial de Transacciones</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="methods-tab" data-bs-toggle="tab" data-bs-target="#methods" type="button" role="tab" aria-controls="methods" aria-selected="false">Métodos de Pago</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content pt-4" id="paymentTabsContent">
                
                <!-- Historial Tab -->
                <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="py-3 ps-4 border-0">Concepto</th>
                                            <th class="py-3 border-0">Fecha</th>
                                            <th class="py-3 border-0">ID Transacción</th>
                                            <th class="py-3 border-0">Monto</th>
                                            <th class="py-3 border-0">Estado</th>
                                            <th class="py-3 pe-4 border-0 text-end">Recibo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item 1 -->
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded bg-light p-2 me-3 text-primary">
                                                        <i class="ri-article-line fs-4"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">Curso Profesional de Marketing Digital</h6>
                                                        <small class="text-muted">Compra única</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">15 Ene, 2024</td>
                                            <td class="text-muted font-monospace small">TXN-89342710</td>
                                            <td class="fw-bold">S/ 199.00</td>
                                            <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Completado</span></td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <!-- Item 2 -->
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded bg-light p-2 me-3 text-primary">
                                                        <i class="ri-article-line fs-4"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">Desarrollo Web Full Stack</h6>
                                                        <small class="text-muted">Compra única</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">20 Dic, 2023</td>
                                            <td class="text-muted font-monospace small">TXN-77283912</td>
                                            <td class="fw-bold">S/ 249.00</td>
                                            <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Completado</span></td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Item 3 (Failed Example) -->
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded bg-light p-2 me-3 text-danger">
                                                        <i class="ri-error-warning-line fs-4"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">Curso Avanzado de React</h6>
                                                        <small class="text-muted">Intento de compra</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">10 Dic, 2023</td>
                                            <td class="text-muted font-monospace small">TXN-00000000</td>
                                            <td class="fw-bold">S/ 180.00</td>
                                            <td><span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill">Fallido</span></td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-outline-secondary" disabled>
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Métodos de Pago Tab -->
                <div class="tab-pane fade" id="methods" role="tabpanel" aria-labelledby="methods-tab">
                    <div class="row g-4">
                        <!-- Tarjeta 1 (Visa) -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #1a1a1a 0%, #454545 100%); border-radius: 16px; min-height: 200px;">
                                <div class="card-body p-4 d-flex flex-column justify-content-between">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <i class="ri-visa-line fs-1"></i>
                                        <span class="badge bg-white text-dark rounded-pill px-3">Principal</span>
                                    </div>
                                    <div class="mt-4">
                                        <div class="h3 mb-1" style="letter-spacing: 2px;">•••• •••• •••• 4242</div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase" style="font-size: 0.7rem;">Titular</small>
                                                <span class="fw-bold">NORBERTO RAMIREZ</span>
                                            </div>
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase" style="font-size: 0.7rem;">Expira</small>
                                                <span class="fw-bold">12/25</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex gap-2 justify-content-end">
                                <button class="btn btn-sm btn-outline-danger border-0"><i class="ri-delete-bin-line me-1"></i> Eliminar</button>
                                <button class="btn btn-sm btn-outline-primary border-0"><i class="ri-pencil-line me-1"></i> Editar</button>
                            </div>
                        </div>

                        <!-- Tarjeta 2 (Mastercard) -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #302b63 0%, #24243e 100%); border-radius: 16px; min-height: 200px;">
                                <div class="card-body p-4 d-flex flex-column justify-content-between">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <i class="ri-mastercard-fill fs-1"></i>
                                    </div>
                                    <div class="mt-4">
                                        <div class="h3 mb-1" style="letter-spacing: 2px;">•••• •••• •••• 8899</div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase" style="font-size: 0.7rem;">Titular</small>
                                                <span class="fw-bold">NORBERTO RAMIREZ</span>
                                            </div>
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase" style="font-size: 0.7rem;">Expira</small>
                                                <span class="fw-bold">08/26</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex gap-2 justify-content-end">
                                <button class="btn btn-sm btn-outline-danger border-0"><i class="ri-delete-bin-line me-1"></i> Eliminar</button>
                                <button class="btn btn-sm btn-outline-secondary border-0">Hacer principal</button>
                            </div>
                        </div>

                        <!-- Agregar Nueva -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card border-2 border-dashed shadow-none h-100 d-flex align-items-center justify-content-center" style="border-radius: 16px; min-height: 200px; background-color: #f8f9fa;">
                                <div class="text-center p-4">
                                    <div class="mb-3">
                                        <i class="ri-add-circle-line text-muted" style="font-size: 3rem;"></i>
                                    </div>
                                    <h6 class="fw-bold text-muted">Agregar nuevo método</h6>
                                    <button class="btn btn-primary mt-2">
                                        <i class="ri-bank-card-line me-2"></i>Vincular tarjeta
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
