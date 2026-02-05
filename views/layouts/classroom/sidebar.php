<?php
// Asegurarse de que $activePage esté definido para evitar errores
if (!isset($activePage)) {
    $activePage = '';
}
?>
<div class="faq-page-nav">
    <h3 class="title">Mi Cuenta</h3>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a href="<?php echo $baseUrl; ?>/mi-perfil" class="nav-link <?php echo ($activePage === 'dashboard') ? 'active' : ''; ?>"><i class="icon-59"></i> Dashboard</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'profile') ? 'active' : ''; ?>"><i class="icon-2"></i> Mi Perfil</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="<?php echo $baseUrl; ?>/mis-cursos" class="nav-link <?php echo ($activePage === 'my-courses') ? 'active' : ''; ?>"><i class="icon-25"></i> Mis Cursos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'wishlist') ? 'active' : ''; ?>"><i class="icon-22"></i> Wishlist</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'reviews') ? 'active' : ''; ?>"><i class="icon-28"></i> Reseñas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'quizzes') ? 'active' : ''; ?>"><i class="icon-44"></i> Cuestionarios</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'orders') ? 'active' : ''; ?>"><i class="icon-43"></i> Historial de Pedidos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'settings') ? 'active' : ''; ?>"><i class="icon-8"></i> Ajustes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link <?php echo ($activePage === 'logout') ? 'active' : ''; ?>"><i class="icon-4"></i> Cerrar Sesión</a>
        </li>
    </ul>
</div>
