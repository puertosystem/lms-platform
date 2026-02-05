<?php
namespace App\Controllers\Web;

class HomeController {
    public function index($basePath, $baseUrl) {
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
