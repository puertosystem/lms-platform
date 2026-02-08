<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduBlink | Online Education Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/assets/images/favicon.png">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/magnifypopup.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendor/tipped.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/app.css">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="edu-header header-style-1 header-fullwidth">
            <div class="header-top-bar">
                <div class="container-fluid">
                    <div class="header-top">
                        <div class="header-top-left">
                            <div class="header-notify">
                                First 20 students get 50% discount. <a href="#">Hurry up!</a>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">Ingresar</a></li>
                                <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</a></li>
                                <li><a href="tel:+51914853912"><i class="icon-phone"></i>Call: +51 914 853 912</a></li>
                                <li><a href="mailto:info@tuguiadigital.com" target="_blank"><i class="icon-envelope"></i>Email: info@tuguiadigital.com</a></li>
                                <li class="social-icon">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="<?php echo $baseUrl; ?>/">
                                    <img class="logo-light" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                    <img class="logo-dark" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-white.png" alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="header-category">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                            <a href="#"><i class="icon-1"></i>Categorias</a>
                                            <ul class="submenu">
                                                <li><a href="course-one.html">Design</a></li>
                                                <li><a href="course-one.html">Development</a></li>
                                                <li><a href="course-one.html">Architecture</a></li>
                                                <li><a href="course-one.html">Life Style</a></li>
                                                <li><a href="course-one.html">Data Science</a></li>
                                                <li><a href="course-one.html">Marketing</a></li>
                                                <li><a href="course-one.html">Music</a></li>
                                                <li><a href="course-one.html">Photography</a></li>
                                                <li><a href="course-one.html">Finance</a></li>
                                                <li><a href="course-one.html">Motivation</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li><a href="<?php echo $baseUrl; ?>/nosotros" class="<?php echo ($activePage === 'about') ? 'active' : ''; ?>">Quienes Somos</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>/cursos" class="<?php echo ($activePage === 'courses') ? 'active' : ''; ?>">Cursos</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>/faq" class="<?php echo ($activePage === 'faq') ? 'active' : ''; ?>">FAQ</a></li>                                    
                                    <li><a href="<?php echo $baseUrl; ?>/blog" class="<?php echo ($activePage === 'blog') ? 'active' : ''; ?>">Blog</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>/contacto" class="<?php echo ($activePage === 'contact') ? 'active' : ''; ?>">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">
                                <li class="search-bar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="search-btn" type="button"><i class="icon-2"></i></button>
                                    </div>
                                </li>
                                <li class="icon search-icon">
                                    <a href="javascript:void(0)" class="search-trigger">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                                <li class="icon cart-icon">
                                    <a href="<?php echo $baseUrl; ?>/tienda/carrito" class="cart-icon">
                                        <i class="icon-3"></i>
                                        <span class="count">0</span>
                                    </a>
                                </li>
                                <li class="header-btn">
                                    <a href="<?php echo $baseUrl; ?>/aula-virtual" target="_blank" class="edu-btn btn-medium">Aula Virtual <i class="icon-4"></i></a>
                                </li>
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                                <a href="<?php echo $baseUrl; ?>/">
                                    <img class="logo-light" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                    <img class="logo-dark" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-white.png" alt="Corporate Logo">
                                </a>
                            </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">
                        <li><a href="<?php echo $baseUrl; ?>/nosotros">Quienes Somos</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/cursos">Cursos</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/faq">FAQ</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/blog">Blog</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <!-- Start Search Popup  -->
            <div class="edu-search-popup">
                <div class="content-wrap">
                    <div class="site-logo">
                        <img class="logo-light" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                        <img class="logo-dark" src="<?php echo $baseUrl; ?>/assets/images/logo/logo-white.png" alt="Corporate Logo">
                    </div>
                    <div class="close-button">
                        <button class="close-trigger"><i class="icon-73"></i></button>
                    </div>
                    <div class="inner">
                        <form class="search-form" action="#">
                            <input type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                            <button class="submit-button"><i class="icon-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Search Popup  -->
            
            <!-- Modal Login -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="false" data-bs-scroll="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="box-shadow: 0 5px 30px rgba(0,0,0,0.15);">
                        <div class="modal-header border-0">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="login-form-box">
                                <h3 class="title">Iniciar sesión</h3>
                                <p>¿No tienes una cuenta? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Regístrate</a></p>
                                <form id="login-form-modal">
                                    <div class="form-group">
                                        <label for="current-log-email">Usuario o correo electrónico*</label>
                                        <input type="email" name="current-log-email" id="current-log-email" placeholder="Email o usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="current-log-password">Contraseña*</label>
                                        <input type="password" name="current-log-password" id="current-log-password" placeholder="Contraseña">
                                        <span class="password-show"><i class="icon-76"></i></span>
                                    </div>
                                    <div class="form-group chekbox-area">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="remember-me">
                                            <label for="remember-me">Recuérdame</label>
                                        </div>
                                        <a href="#" class="password-reset">¿Olvidaste tu contraseña?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="btn-login-modal-submit" class="edu-btn btn-medium">Iniciar sesión <i class="icon-4"></i></button>
                                    </div>
                                </form>
                                <div id="login-modal-success-msg" style="display:none;" class="text-center">
                                    <h4 class="title text-success" style="color: #1ab69d;">¡Bienvenido!</h4>
                                    <p>Sesión iniciada correctamente.</p>
                                    <p>Redirigiendo a tu perfil...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Register -->
            <div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="false" data-bs-scroll="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="box-shadow: 0 5px 30px rgba(0,0,0,0.15);">
                        <div class="modal-header border-0">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="login-form-box registration-form">
                                <h3 class="title">Registrarse</h3>
                                <p>¿Ya tienes una cuenta? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Iniciar sesión</a></p>
                                <form id="register-form-modal">
                                    <div class="form-group">
                                        <label for="reg-name">Nombre completo*</label>
                                        <input type="text" name="reg-name" id="reg-name" placeholder="Nombre completo">
                                    </div>
                                    <div class="form-group">
                                        <label for="log-email">Usuario o correo electrónico*</label>
                                        <input type="email" name="log-email" id="log-email" placeholder="Email o usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="log-password">Contraseña*</label>
                                        <input type="password" name="log-password" id="log-password" placeholder="Contraseña">
                                        <span class="password-show"><i class="icon-76"></i></span>
                                    </div>
                                    <div class="form-group chekbox-area">
                                        <div class="edu-form-check">
                                            <input type="checkbox" id="terms-condition">
                                            <label for="terms-condition">Acepto los términos y condiciones. <a href="#">Términos y condiciones.</a> </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="btn-register-submit" class="edu-btn btn-medium">Crear Cuenta <i class="icon-4"></i></button>
                                    </div>
                                </form>
                                <div id="register-success-msg" style="display:none;" class="text-center">
                                    <h4 class="title text-success" style="color: #1ab69d;">¡Gracias por registrarte!</h4>
                                    <p>Tu cuenta se ha creado exitosamente.</p>
                                    <p>Redirigiendo a tu perfil...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Register Modal Logic
                    const btnRegister = document.getElementById('btn-register-submit');
                    if(btnRegister) {
                        btnRegister.addEventListener('click', function() {
                            // Loading state
                            const originalContent = btnRegister.innerHTML;
                            btnRegister.innerHTML = 'Procesando...';
                            btnRegister.style.opacity = '0.7';
                            btnRegister.disabled = true;

                            setTimeout(function() {
                            // Hide form, show success
                            document.getElementById('register-form-modal').style.display = 'none';
                            document.getElementById('register-success-msg').style.display = 'block';
                            
                            setTimeout(function() {
                                window.location.href = '<?php echo $baseUrl; ?>/aula-virtual/mi-perfil';
                            }, 2000);
                        }, 1500);
                        });
                    }

                    // Login Modal Logic
                    const btnLoginModal = document.getElementById('btn-login-modal-submit');
                    if(btnLoginModal) {
                        btnLoginModal.addEventListener('click', function() {
                            // Loading state
                            const originalContent = btnLoginModal.innerHTML;
                            btnLoginModal.innerHTML = 'Procesando...';
                            btnLoginModal.style.opacity = '0.7';
                            btnLoginModal.disabled = true;

                            setTimeout(function() {
                            // Hide form, show success
                            document.getElementById('login-form-modal').style.display = 'none';
                            document.getElementById('login-modal-success-msg').style.display = 'block';
                            
                            setTimeout(function() {
                                window.location.href = '<?php echo $baseUrl; ?>/aula-virtual/mi-perfil';
                            }, 2000);
                        }, 1500);
                        });
                    }
                });
            </script>
        </header>
