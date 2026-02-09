<?php
namespace App\Controllers\Classroom;

class SettingsController {
    public function index($basePath, $baseUrl) {
        $activePage = 'settings';
        $pageTitle = 'Ajustes de Perfil';
        include $basePath . '/views/classroom/settings.php';
    }
}
