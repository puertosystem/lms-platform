<?php
namespace App\Controllers\Web;

/**
 * Controlador para la página de Contacto
 */
class ContactController {
    /**
     * Muestra el formulario de contacto
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'contact';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home/contact.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
