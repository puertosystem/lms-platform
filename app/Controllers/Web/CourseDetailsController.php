<?php
namespace App\Controllers\Web;

/**
 * Controlador para los Detalles del Curso Web
 */
class CourseDetailsController {
    /**
     * Muestra la información detallada de un curso específico
     */
    public function index($basePath, $baseUrl) {
        // En un futuro aquí se podría cargar la información del curso desde la base de datos
        // usando un ID pasado por parámetro. Por ahora mostramos la vista estática.
        
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/courses/details.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
