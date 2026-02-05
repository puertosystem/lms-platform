<?php

namespace App\Controllers\Web;

class BlogController {
    public function index($basePath, $baseUrl) {
        $activePage = 'blog';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/blog.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
