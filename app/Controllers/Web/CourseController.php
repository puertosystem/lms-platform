<?php
namespace App\Controllers\Web;

/**
 * Controlador para el Listado de Cursos Web
 */
class CourseController {
    /**
     * Muestra la lista de cursos disponibles
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'courses';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/courses/index.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
