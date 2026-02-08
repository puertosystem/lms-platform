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
}
