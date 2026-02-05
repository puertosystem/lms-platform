<?php
namespace App\Controllers\Classroom;

class ProfileController {
    public function index($basePath, $baseUrl) {
        $activePage = 'dashboard';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/classroom/profile.php';
        include $basePath . '/views/layouts/web/footer.php';
    }

    public function myCourses($basePath, $baseUrl) {
        $activePage = 'my-courses';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/classroom/my_courses.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
