<?php
namespace App\Controllers\Web;

class ContactController {
    public function index($basePath, $baseUrl) {
        $activePage = 'contact';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/home/contact.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
