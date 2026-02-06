<?php
namespace App\Controllers\Web;

class PublicProfileController {
    public function index($BASE_PATH, $BASE_URL, $username) {
        // Here we would typically fetch the user data from the database using $username
        // For now, we'll use mock data based on the reference image
        
        $user = [
            'name' => 'Norberto Ramirez',
            'role' => 'Instructor',
            'course_count' => 3,
            'rating' => 0,
            'avatar' => $BASE_URL . '/assets/images/author/author-01.jpg', // Placeholder
            'joined' => 'marzo 2023',
            'social' => [
                'instagram' => '#'
            ]
        ];

        // Mock courses data
        $courses = [
            [
                'title' => 'Chat GPT: Domina el uso de chatGPT',
                'image' => $BASE_URL . '/assets/images/course/course-01.jpg', // Placeholder
                'category' => 'IA',
                'lessons' => 18,
                'duration' => '4:28:19',
                'rating' => 0.0,
                'price' => 'Free',
                'old_price' => null
            ],
            [
                'title' => 'Meta ADS para emprendedores',
                'image' => $BASE_URL . '/assets/images/course/course-02.jpg', // Placeholder
                'category' => 'Marketing',
                'lessons' => 4,
                'duration' => '2 Horas',
                'rating' => 0.0,
                'price' => null, // Free or specific price
                'old_price' => null
            ],
            [
                'title' => 'Marketing para emprender',
                'image' => $BASE_URL . '/assets/images/course/course-03.jpg', // Placeholder
                'category' => 'Marketing',
                'lessons' => 26,
                'duration' => null,
                'rating' => 0.0,
                'price' => 85,
                'old_price' => 100
            ]
        ];

        // View variables
        $pageTitle = $user['name'] . ' | Perfil Público';
        $baseUrl = $BASE_URL; // Fix variable name for header/footer
        
        // Load view
        include $BASE_PATH . '/views/layouts/web/header.php';
        require $BASE_PATH . '/views/web/user/public.php';
        include $BASE_PATH . '/views/layouts/web/footer.php';
    }
}
