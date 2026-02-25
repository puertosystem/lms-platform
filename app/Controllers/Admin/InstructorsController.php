<?php
namespace App\Controllers\Admin;

class InstructorsController {
    public function index($basePath, $baseUrl) {
        $activePage = 'instructors-list';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/instructors/index.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }

    public function create($basePath, $baseUrl) {
        $activePage = 'instructors-create';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/instructors/create.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }
}
