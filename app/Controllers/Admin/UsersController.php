<?php
namespace App\Controllers\Admin;

class UsersController {
    public function index($basePath, $baseUrl) {
        $activePage = 'users-list';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/users/index.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }

    public function create($basePath, $baseUrl) {
        $activePage = 'users-create';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/users/create.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }
}
