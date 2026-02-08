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
    case 'blog/detalle-blog':
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
    case 'nosotros':
        require $BASE_PATH . '/app/Controllers/Web/AboutController.php';
        $controller = new \App\Controllers\Web\AboutController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'tienda/carrito':
        require $BASE_PATH . '/app/Controllers/Web/CartController.php';
        $controller = new \App\Controllers\Web\CartController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'tienda/checkout':
        require $BASE_PATH . '/app/Controllers/Web/CheckoutController.php';
        $controller = new \App\Controllers\Web\CheckoutController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'aula-virtual/mi-perfil':
        require $BASE_PATH . '/app/Controllers/Classroom/ProfileController.php';
        $controller = new \App\Controllers\Classroom\ProfileController();
        $controller->index($BASE_PATH, $BASE_URL);
        break;
    case 'aula-virtual':
        require $BASE_PATH . '/app/Controllers/Classroom/AuthController.php';
        $controller = new \App\Controllers\Classroom\AuthController();
        $controller->login($BASE_PATH, $BASE_URL);
        break;
    case 'anexo-de-privacidad':
        // Cargar vista directamente o crear un controlador simple
        $title = "Anexo de Privacidad";
        $baseUrl = $BASE_URL; // Definir $baseUrl para los includes
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/privacy/index.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'anexo-de-privacidad/aviso-de-cookies':
        $title = "Aviso de Cookies";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/privacy/cookies.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'anexo-de-privacidad/seguridad':
        $title = "Seguridad";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/privacy/security.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'anexo-de-privacidad/condiciones-de-uso':
        $title = "Condiciones de Uso";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/privacy/terms.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'instructores':
        $title = "Instructores";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/instructors/index.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'instructores/detalle':
        $title = "Detalle del Instructor";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/instructors/details.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'guia-de-compra':
        $title = "Guía de Compra";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/layouts/web/header.php';
        include $BASE_PATH . '/views/web/guides/purchase-guide.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
        break;
    case 'aula-virtual/curso/ver':
        $courseTitle = "Curso de ejemplo";
        $baseUrl = $BASE_URL;
        include $BASE_PATH . '/views/classroom/watch/index.php';
        break;
    default:
        // Verificar rutas dinámicas
        
        // Ruta para detalle de curso: cursos/detalle-curso o cursos/nombre-del-curso
        if (strpos($route, 'cursos/') === 0) {
            require $BASE_PATH . '/app/Controllers/Web/CourseDetailsController.php';
            $controller = new \App\Controllers\Web\CourseDetailsController();
            // Podríamos pasar el slug del curso al controlador si fuera necesario
            // $parts = explode('/', $route);
            // $courseSlug = isset($parts[1]) ? $parts[1] : '';
            $controller->index($BASE_PATH, $BASE_URL);
            break;
        }

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
