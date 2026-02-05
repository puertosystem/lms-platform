<?php
namespace App\Controllers\Web;

class AboutController {
    public function index($basePath, $baseUrl) {
        $activePage = 'about';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/about.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
