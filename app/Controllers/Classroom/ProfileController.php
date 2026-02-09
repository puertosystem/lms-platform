<?php
namespace App\Controllers\Classroom;

/**
 * Controlador de Perfil del Usuario
 */
class ProfileController {
    /**
     * Muestra el panel principal del usuario (Dashboard)
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'dashboard';
        $pageTitle = 'Mi Panel';
        // include $basePath . '/views/layouts/web/header.php'; // Encabezado web eliminado
        include $basePath . '/views/classroom/profile.php';
        // include $basePath . '/views/layouts/web/footer.php'; // Pie de página web eliminado
    }

    /**
     * Muestra la lista de certificados del usuario
     */
    public function certificates($basePath, $baseUrl) {
        $activePage = 'certificates';
        $pageTitle = 'Mis Certificados';
        include $basePath . '/views/classroom/certificates.php';
    }

    /**
     * Muestra la lista de deseos del usuario
     */
    public function wishlist($basePath, $baseUrl) {
        $activePage = 'wishlist';
        $pageTitle = 'Lista de deseos';
        include $basePath . '/views/classroom/wishlist.php';
    }

    /**
     * Muestra el historial de pagos y facturación
     */
    public function payments($basePath, $baseUrl) {
        $activePage = 'payments';
        $pageTitle = 'Pagos y Facturación';
        include $basePath . '/views/classroom/payments.php';
    }
}
