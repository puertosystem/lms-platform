<?php
namespace App\Controllers\Web;

class BlogDetailsController {
    public function index($basePath, $baseUrl) {
        // En un futuro aquí se podría cargar la información del blog desde la base de datos
        // usando un ID pasado por parámetro. Por ahora mostramos la vista estática.
        
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/blog/details.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
