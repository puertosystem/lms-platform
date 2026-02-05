<?php
namespace App\Controllers\Web;

class CourseController {
    public function index($basePath, $baseUrl) {
        $activePage = 'courses';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/courses.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
