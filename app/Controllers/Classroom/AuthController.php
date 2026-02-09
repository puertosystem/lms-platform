<?php

namespace App\Controllers\Classroom;

/**
 * Controlador de Autenticación para el Aula Virtual
 */
class AuthController {
    /**
     * Muestra la página de inicio de sesión
     */
    public function login($basePath, $baseUrl) {
        $pageTitle = "Aula Virtual | Iniciar Sesión";
        require $basePath . '/views/classroom/auth/login.php';
    }
}
