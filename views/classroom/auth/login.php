<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle ?? 'Aula Virtual'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/assets/images/favicon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/classroom-auth.css">
</head>
<body>

    <div class="login-container">
        <div class="col-lg-6 login-form-section">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo $baseUrl; ?>">
                        <img src="<?php echo $baseUrl; ?>/assets/images/logo/logo-dark.png" alt="Logo" style="max-height: 50px;">
                    </a>
                </div>
                
                <h3 class="login-title">Iniciar sesión</h3>
                <p class="login-subtitle">Ingrese su usuario y contraseña para iniciar sesión.</p>
                
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Ingresa tu DNI">
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="*********">
                    </div>
                    
                    <div class="form-group">
                        <a href="<?php echo $baseUrl; ?>/mi-perfil" class="edu-btn btn-medium btn-login">INICIAR SESIÓN</a>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#">¿Se te olvidó tu contraseña?</a>
                    </div>
                </form>
            </div>
            
            <!-- Decorator shape bottom left -->
            <div class="decorator-circle"></div>
        </div>
        
        <div class="col-lg-6 login-illustration-section d-none d-lg-flex">
            <!-- Using a placeholder illustration that fits education theme -->
            <img src="<?php echo $baseUrl; ?>/assets/images/banner/banner-chart.png" alt="Login Illustration">
        </div>
    </div>

</body>
</html>