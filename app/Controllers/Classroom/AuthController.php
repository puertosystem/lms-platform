<?php

namespace App\Controllers\Classroom;

class AuthController {
    public function login($basePath, $baseUrl) {
        $pageTitle = "Aula Virtual | Iniciar Sesión";
        require $basePath . '/views/classroom/auth/login.php';
    }
}
