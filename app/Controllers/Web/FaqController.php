<?php
namespace App\Controllers\Web;

/**
 * Controlador para la página de Preguntas Frecuentes
 */
class FaqController {
    /**
     * Muestra la página de FAQ
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'faq';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home/faq.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
