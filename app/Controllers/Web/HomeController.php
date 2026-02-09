<?php
namespace App\Controllers\Web;

/**
 * Controlador de la Página de Inicio
 */
class HomeController {
    /**
     * Muestra la página principal del sitio
     */
    public function index($basePath, $baseUrl) {
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home/index.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
