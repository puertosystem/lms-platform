<?php
$BASE_PATH = __DIR__;
// Calcular URL base dinámicamente
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$BASE_URL = ($scriptName === '/') ? '' : $scriptName;

$route = isset($_GET['route']) ? $_GET['route'] : 'home';
// Limpiar la ruta (eliminar barras al final y al principio si es necesario)
$route = trim($route, '/');
if ($route === '') {
    $route = 'home';
}

switch ($route) {
    case 'home':
        require $BASE_PATH . '/app/Controllers/Web/HomeController.php';
        $controller = new \App\Controllers\Web\HomeController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'contacto':
    case 'contact':
        require $BASE_PATH . '/app/Controllers/Web/ContactController.php';
        $controller = new \App\Controllers\Web\ContactController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'blog':
        require $BASE_PATH . '/app/Controllers/Web/BlogController.php';
        $controller = new \App\Controllers\Web\BlogController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'detalle-blog':
        require $BASE_PATH . '/app/Controllers/Web/BlogDetailsController.php';
        $controller = new \App\Controllers\Web\BlogDetailsController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'faq':
        require $BASE_PATH . '/app/Controllers/Web/FaqController.php';
        $controller = new \App\Controllers\Web\FaqController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'cursos':
        require $BASE_PATH . '/app/Controllers/Web/CourseController.php';
        $controller = new \App\Controllers\Web\CourseController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'detalle-curso':
        require $BASE_PATH . '/app/Controllers/Web/CourseDetailsController.php';
        $controller = new \App\Controllers\Web\CourseDetailsController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'nosotros':
        require $BASE_PATH . '/app/Controllers/Web/AboutController.php';
        $controller = new \App\Controllers\Web\AboutController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'carrito':
        require $BASE_PATH . '/app/Controllers/Web/CartController.php';
        $controller = new \App\Controllers\Web\CartController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'checkout':
        require $BASE_PATH . '/app/Controllers/Web/CheckoutController.php';
        $controller = new \App\Controllers\Web\CheckoutController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'mi-perfil':
        require $BASE_PATH . '/app/Controllers/Classroom/ProfileController.php';
        $controller = new \App\Controllers\Classroom\ProfileController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'mis-cursos':
        require $BASE_PATH . '/app/Controllers/Classroom/ProfileController.php';
        $controller = new \App\Controllers\Classroom\ProfileController();
        $controller->myCourses($BASE_PATH, $BASE_URL);
        break;
    default:
        // Verificar rutas dinámicas
        if (strpos($route, 'perfil/') === 0) {
            require $BASE_PATH . '/app/Controllers/Web/PublicProfileController.php';
            $controller = new \App\Controllers\Web\PublicProfileController();
            $parts = explode('/', $route);
            $username = isset($parts[1]) ? $parts[1] : '';
            if ($username) {
                $controller->index($BASE_PATH, $BASE_URL, $username);
                break;
            }
        }

        http_response_code(404);
        include $BASE_PATH . '/views/layouts/web/header.php';
        echo '<div class="container"><div class="row"><div class="col-12"><h1>404 - Página no encontrada</h1></div></div></div>';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
}
