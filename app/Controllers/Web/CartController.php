<?php

namespace App\Controllers\Web;

class CartController {
    public function index($basePath, $baseUrl) {
        // Incluir el encabezado
        require $basePath . '/views/layouts/web/header.php';
        
        // Incluir la vista del carrito
        require $basePath . '/views/web/shop/index.php';
        
        // Incluir el pie de página
        require $basePath . '/views/layouts/web/footer.php';
    }
}
