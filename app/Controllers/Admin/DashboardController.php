<?php
namespace App\Controllers\Admin;

class DashboardController {
    public function index($basePath, $baseUrl) {
        // Aquí cargarías datos del modelo
        // $model = new \App\Models\Admin\DashboardModel();
        
        $activePage = 'dashboard';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/dashboard.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }
}
