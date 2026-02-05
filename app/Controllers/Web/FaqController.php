<?php
namespace App\Controllers\Web;

class FaqController {
    public function index($basePath, $baseUrl) {
        $activePage = 'faq';
        include $basePath . '/views/layouts/web/header.php';
        include $basePath . '/views/web/faq.php';
        include $basePath . '/views/layouts/web/footer.php';
    }
}
