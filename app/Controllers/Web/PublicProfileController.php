<?php
namespace App\Controllers\Web;

class PublicProfileController {
    public function index($BASE_PATH, $BASE_URL, $username) {
        // Aquí normalmente obtendríamos los datos del usuario de la base de datos usando $username
        // Por ahora, usaremos datos simulados basados en la imagen de referencia
        
        $user = [
            'name' => 'Norberto Ramirez',
            'role' => 'Instructor',
            'course_count' => 3,
            'rating' => 0,
            'avatar' => $BASE_URL . '/assets/images/author/author-01.jpg', // Marcador de posición
            'joined' => 'marzo 2023',
            'social' => [
                'instagram' => '#'
            ]
        ];

        // Datos de cursos simulados
        $courses = [
            [
                'title' => 'Chat GPT: Domina el uso de chatGPT',
                'image' => $BASE_URL . '/assets/images/course/course-01.jpg', // Marcador de posición
                'category' => 'IA',
                'lessons' => 18,
                'duration' => '4:28:19',
                'rating' => 0.0,
                'price' => 'Free',
                'old_price' => null
            ],
            [
                'title' => 'Meta ADS para emprendedores',
                'image' => $BASE_URL . '/assets/images/course/course-02.jpg', // Marcador de posición
                'category' => 'Marketing',
                'lessons' => 4,
                'duration' => '2 Horas',
                'rating' => 0.0,
                'price' => null, // Gratis o precio específico
                'old_price' => null
            ],
            [
                'title' => 'Marketing para emprender',
                'image' => $BASE_URL . '/assets/images/course/course-03.jpg', // Marcador de posición
                'category' => 'Marketing',
                'lessons' => 26,
                'duration' => null,
                'rating' => 0.0,
                'price' => 85,
                'old_price' => 100
            ]
        ];

        // Variables de la vista
        $pageTitle = $user['name'] . ' | Perfil Público';
        $baseUrl = $BASE_URL; // Arreglar nombre de variable para encabezado/pie de página
        
        // Cargar vista
        include $BASE_PATH . '/views/layouts/web/header.php';
        require $BASE_PATH . '/views/web/user/public.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
    }
}
