<?php
namespace App\Controllers\Classroom;

/**
 * Controlador de Ajustes del Perfil del Aula Virtual
 */
class SettingsController {
    /**
     * Muestra la página de ajustes de perfil
     */
    public function index($basePath, $baseUrl) {
        $activePage = 'settings';
        $pageTitle = 'Ajustes de Perfil';
        include $basePath . '/views/classroom/settings.php';
    }
}
