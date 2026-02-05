<?php

namespace App\Controllers\Web;

class CheckoutController {
    public function index($basePath, $baseUrl) {
        // Incluir el encabezado
        require $basePath . '/views/layouts/web/header.php';
        
        // Incluir la vista del checkout
        require $basePath . '/views/web/checkout.php';
        
        // Incluir el pie de página
        require $basePath . '/views/layouts/web/footer.php';
    }
}
