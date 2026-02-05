<?php
namespace App\Controllers\Admin;

class DashboardController {
    public function index($basePath) {
        // Aquí cargarías datos del modelo
        // $model = new \App\Models\Admin\DashboardModel();
        
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/admin/dashboard.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }
}
