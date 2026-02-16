<?php
namespace App\Controllers\Admin;

class CoursesController {
    public function create($basePath, $baseUrl) {
        $activePage = 'courses-create';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/courses/create.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }

    public function structure($basePath, $baseUrl) {
        $activePage = 'courses-structure';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/courses/structure.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }

    public function material($basePath, $baseUrl) {
        $activePage = 'courses-material';
        include $basePath . '/views/layouts/admin/head.php';
        include $basePath . '/views/layouts/admin/header.php';
        include $basePath . '/views/layouts/admin/sidebar.php';
        include $basePath . '/views/admin/courses/material.php';
        include $basePath . '/views/layouts/admin/footer.php';
    }
}
