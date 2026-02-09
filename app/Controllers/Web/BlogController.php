<?php

namespace App\Controllers\Web;

/**
 * Controlador para la sección de Blog
 */
class BlogController {
    /**
     * Muestra la lista de artículos del blog
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'blog';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/blog/index.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
