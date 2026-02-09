<aside class="classroom-sidebar">
    <div class="lesson-search">
        <input type="text" placeholder="Buscar...">
        <i class="icon-2" style="position: absolute; right: 30px; top: 25px; color: #999;"></i>
    </div>
    
    <ul class="lesson-list dashboard-menu">
        <li class="lesson-item <?php echo ($activePage ?? '') === 'dashboard' ? 'active' : ''; ?>">
            <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil">
                <div class="d-flex align-items-center">
                    <i class="icon-2 lesson-icon"></i> <!-- Dashboard Icon -->
                    <span>Escritorio</span>
                </div>
            </a>
        </li>
        <li class="lesson-item <?php echo ($activePage ?? '') === 'wishlist' ? 'active' : ''; ?>">
            <a href="<?php echo $baseUrl; ?>/aula-virtual/lista-deseos">
                <div class="d-flex align-items-center">
                    <i class="icon-22 lesson-icon"></i> <!-- Wishlist Icon -->
                    <span>Lista de deseos</span>
                </div>
            </a>
        </li>
        <li class="lesson-item <?php echo ($activePage ?? '') === 'payments' ? 'active' : ''; ?>">
            <a href="<?php echo $baseUrl; ?>/aula-virtual/pagos">
                <div class="d-flex align-items-center">
                    <i class="ri-secure-payment-line lesson-icon" style="font-size: 18px;"></i> <!-- Payments Icon -->
                    <span>Pagos</span>
                </div>
            </a>
        </li>
        <li class="lesson-item <?php echo ($activePage ?? '') === 'certificates' ? 'active' : ''; ?>">
            <a href="<?php echo $baseUrl; ?>/aula-virtual/mis-certificados">
                <div class="d-flex align-items-center">
                    <i class="ri-award-line lesson-icon" style="font-size: 18px;"></i> <!-- Certificates Icon -->
                    <span>Mis certificados</span>
                </div>
            </a>
        </li>
        <li class="lesson-item <?php echo ($activePage ?? '') === 'settings' ? 'active' : ''; ?>">
            <a href="<?php echo $baseUrl; ?>/aula-virtual/ajustes">
                <div class="d-flex align-items-center">
                    <i class="icon-83 lesson-icon"></i> <!-- Settings Icon -->
                    <span>Ajustes</span>
                </div>
            </a>
        </li>
    </ul>
</aside>