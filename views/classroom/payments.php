<?php include $basePath . '/views/layouts/classroom/head.php'; ?>

<!-- Header -->
<?php include $basePath . '/views/layouts/classroom/header.php'; ?>

<div class="classroom-wrapper classroom-payments-page">
    <!-- Sidebar -->
    <?php include $basePath . '/views/layouts/classroom/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="classroom-content">
        <div class="container-fluid">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-4 fw-bold">Pagos y Facturación</h2>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bold" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true">Historial de Transacciones</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="methods-tab" data-bs-toggle="tab" data-bs-target="#methods" type="button" role="tab" aria-controls="methods" aria-selected="false">Métodos de Pago</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content pt-4" id="paymentTabsContent">
                        
                        <!-- Historial Tab -->
                        <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
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
                                                <button class="edu-btn btn-border btn-small">
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
                                                <button class="edu-btn btn-border btn-small">
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
                                                <button class="edu-btn btn-border btn-small" disabled>
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Métodos de Pago Tab -->
                <div class="tab-pane fade" id="methods" role="tabpanel" aria-labelledby="methods-tab">
                    <div class="row g-4" id="cards-container">
                        <!-- Tarjeta 1 (Visa) -->
                        <div class="col-md-6 col-xl-4 card-item-container">
                            <div class="card border-0 shadow-sm text-white card-visa">
                                <div class="card-body p-4 d-flex flex-column justify-content-between">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <i class="ri-visa-line fs-1"></i>
                                        <span class="badge bg-white text-dark rounded-pill px-3 badge-primary-card">Principal</span>
                                    </div>
                                    <div class="mt-4">
                                        <div class="h3 mb-1 card-number">•••• •••• •••• 4242</div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase card-label">Titular</small>
                                                <span class="fw-bold">NORBERTO RAMIREZ</span>
                                            </div>
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase card-label">Expira</small>
                                                <span class="fw-bold">12/25</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex gap-2 justify-content-end action-buttons">
                                <button class="edu-btn btn-border btn-small btn-delete-card"><i class="ri-delete-bin-line me-1"></i> Eliminar</button>
                                <button class="edu-btn btn-border btn-small btn-edit-card" data-bs-toggle="modal" data-bs-target="#editCardModal"><i class="ri-pencil-line me-1"></i> Editar</button>
                                <button class="edu-btn btn-border btn-small btn-make-primary d-none">Hacer principal</button>
                            </div>
                        </div>

                        <!-- Tarjeta 2 (Mastercard) -->
                        <div class="col-md-6 col-xl-4 card-item-container">
                            <div class="card border-0 shadow-sm text-white card-mastercard">
                                <div class="card-body p-4 d-flex flex-column justify-content-between">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <i class="ri-mastercard-fill fs-1"></i>
                                        <span class="badge bg-white text-dark rounded-pill px-3 badge-primary-card d-none">Principal</span>
                                    </div>
                                    <div class="mt-4">
                                        <div class="h3 mb-1 card-number">•••• •••• •••• 8899</div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase card-label">Titular</small>
                                                <span class="fw-bold">NORBERTO RAMIREZ</span>
                                            </div>
                                            <div>
                                                <small class="opacity-75 d-block text-uppercase card-label">Expira</small>
                                                <span class="fw-bold">08/26</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex gap-2 justify-content-end action-buttons">
                                <button class="edu-btn btn-border btn-small btn-delete-card"><i class="ri-delete-bin-line me-1"></i> Eliminar</button>
                                <button class="edu-btn btn-border btn-small btn-edit-card d-none" data-bs-toggle="modal" data-bs-target="#editCardModal"><i class="ri-pencil-line me-1"></i> Editar</button>
                                <button class="edu-btn btn-border btn-small btn-make-primary">Hacer principal</button>
                            </div>
                        </div>

                        <!-- Agregar Nueva -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card border-2 border-dashed shadow-none h-100 d-flex align-items-center justify-content-center card-add-new">
                                <div class="text-center p-4">
                                    <div class="mb-3">
                                        <i class="ri-add-circle-line add-new-icon"></i>
                                    </div>
                                    <h6 class="fw-bold text-muted">Agregar nuevo método</h6>
                                    <button class="edu-btn btn-medium mt-2" data-bs-toggle="modal" data-bs-target="#addCardModal">
                                        Vincular tarjeta <i class="ri-bank-card-line ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Modal Editar Tarjeta -->
<div class="modal fade" id="editCardModal" tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title fw-bold" id="editCardModalLabel">Editar Tarjeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="editCardName" class="form-label fw-bold">Nombre del Titular</label>
                        <input type="text" class="form-control" id="editCardName" value="NORBERTO RAMIREZ">
                    </div>
                    <div class="mb-3">
                        <label for="editCardNumber" class="form-label fw-bold">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="editCardNumber" value="•••• •••• •••• 4242" disabled>
                        <small class="text-muted">El número de tarjeta no se puede editar por seguridad.</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editCardExpiry" class="form-label fw-bold">Fecha de Expiración</label>
                            <input type="text" class="form-control" id="editCardExpiry" value="12/25" placeholder="MM/YY">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editCardCvv" class="form-label fw-bold">CVV</label>
                            <input type="text" class="form-control" id="editCardCvv" placeholder="***">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="edu-btn btn-border btn-medium" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="edu-btn btn-medium" id="saveEditCardBtn">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Agregar Tarjeta -->
<div class="modal fade" id="addCardModal" tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title fw-bold" id="addCardModalLabel">Vincular Nueva Tarjeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="addCardName" class="form-label fw-bold">Nombre del Titular</label>
                        <input type="text" class="form-control" id="addCardName" placeholder="Como aparece en la tarjeta">
                    </div>
                    <div class="mb-3">
                        <label for="addCardNumber" class="form-label fw-bold">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="addCardNumber" placeholder="0000 0000 0000 0000" maxlength="19">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="addCardExpiry" class="form-label fw-bold">Fecha de Expiración</label>
                            <input type="text" class="form-control" id="addCardExpiry" placeholder="MM/YY">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="addCardCvv" class="form-label fw-bold">CVV</label>
                            <input type="text" class="form-control" id="addCardCvv" placeholder="***">
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="saveCardCheck" checked>
                        <label class="form-check-label" for="saveCardCheck">
                            Guardar esta tarjeta para futuras compras
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="edu-btn btn-border btn-medium" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="edu-btn btn-medium" id="linkCardBtn">Vincular Tarjeta</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Eliminar Tarjeta -->
<div class="modal fade" id="deleteCardModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-body p-4 text-center">
                <div class="mb-3">
                    <div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="ri-alert-line text-danger display-4"></i>
                    </div>
                </div>
                <h4 class="fw-bold mb-2">¿Eliminar tarjeta?</h4>
                <p class="text-muted mb-4">Esta acción no se puede deshacer. ¿Estás seguro de que deseas eliminar este método de pago?</p>
                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="edu-btn btn-border btn-medium" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="edu-btn btn-medium bg-danger border-danger text-white" id="confirmDeleteBtn">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Específico para Pagos -->
<script src="<?php echo $baseUrl; ?>/assets/js/classroom/payments.js"></script>

<?php include $basePath . '/views/layouts/classroom/footer.php'; ?>
