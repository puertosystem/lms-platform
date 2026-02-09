<?php
namespace App\Controllers\Web;

/**
 * Controlador de la página "Sobre Nosotros"
 */
class AboutController {
    /**
     * Muestra la información sobre la empresa o sitio
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'about';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home/about.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
