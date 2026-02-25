<?php
namespace App\Controllers\Admin;

class AuthController {
    public function login($basePath, $baseUrl) {
        include $basePath . '/views/admin/auth/login.php';
    }
}

