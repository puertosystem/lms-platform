<?php
namespace App\Controllers\Classroom;

/**
 * Controlador de Cursos del Aula Virtual
 */
class CourseController {
    /**
     * Muestra la página principal del curso
     */
    public function index($basePath) {
        // Aquí cargarías el curso
        // $model = new \App\Models\Classroom\CourseModel();
        
        include $basePath . '/views/layouts/classroom/header.php';
        include $basePath . '/views/classroom/course.php';
        include $basePath . '/views/layouts/classroom/footer.php';
    }
}
