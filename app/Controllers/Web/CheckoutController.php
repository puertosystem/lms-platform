<?php

namespace App\Controllers\Web;

/**
 * Controlador del Proceso de Pago (Checkout)
 */
class CheckoutController {
    /**
     * Muestra la página de pago
     */
    public function index($basePath, $baseUrl) {
        // Incluir el encabezado
        require $basePath . '/views/layouts/web/header.php';
        
        // Incluir la vista del checkout
        require $basePath . '/views/web/shop/checkout.php';
        
        // Incluir el pie de página
        require $basePath . '/views/layouts/web/footer.php';
    }
}
