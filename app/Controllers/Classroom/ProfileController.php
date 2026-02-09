<?php
namespace App\Controllers\Classroom;

class ProfileController {
    public function index($basePath, $baseUrl) {
        $activePage = 'dashboard';
        $pageTitle = 'Mi Panel';
        // include $basePath . '/views/layouts/web/header.php'; // Removed web header
        include $basePath . '/views/classroom/profile.php';
        // include $basePath . '/views/layouts/web/footer.php'; // Removed web footer
    }

    public function certificates($basePath, $baseUrl) {
        $activePage = 'certificates';
        $pageTitle = 'Mis Certificados';
        include $basePath . '/views/classroom/certificates.php';
    }

    public function wishlist($basePath, $baseUrl) {
        $activePage = 'wishlist';
        $pageTitle = 'Lista de deseos';
        include $basePath . '/views/classroom/wishlist.php';
    }

    public function payments($basePath, $baseUrl) {
        $activePage = 'payments';
        $pageTitle = 'Pagos y Facturación';
        include $basePath . '/views/classroom/payments.php';
    }
}
