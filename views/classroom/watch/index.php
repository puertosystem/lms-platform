<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aula Virtual - <?php echo $courseTitle ?? 'Curso'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/assets/images/favicon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/classroom-watch.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/comments.css">
</head>
<body class="classroom-watch-page">

    <!-- Header -->
    <?php include __DIR__ . '/partials/header.php'; ?>

    <div class="classroom-wrapper">
        <!-- Sidebar -->
        <?php include __DIR__ . '/partials/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="classroom-content" id="main-content">
            <div class="container-fluid">
                <?php include __DIR__ . '/partials/player.php'; ?>
            </div>
        </main>

        <!-- Right Sidebar (Comments) -->
        <?php include __DIR__ . '/partials/sidebar-comments.php'; ?>
    </div>

    <!-- JS -->
    <script src="<?php echo $baseUrl; ?>/assets/js/vendor/jquery.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script>
        // Alternar Barra Lateral
        $(document).ready(function() {
            $('#toggle-sidebar').on('click', function() {
                $('.classroom-sidebar').toggleClass('collapsed');
                $('.classroom-content').toggleClass('expanded');
            });

            // Alternar en móvil
            $('.mobile-toggle').on('click', function() {
                $('.classroom-sidebar').toggleClass('active');
            });

            // Alternar Barra Lateral de Comentarios
            $('#toggle-comments').on('click', function() {
                $('.classroom-sidebar-right').toggleClass('collapsed');
                $('.classroom-content').toggleClass('expanded-right');
            });
        });
    </script>
</body>
</html>