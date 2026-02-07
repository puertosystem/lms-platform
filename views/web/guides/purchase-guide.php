<?php
// views/web/guides/purchase-guide.php
?>
<!--=====================================-->
<!--=       Breadcrumb Area Start      =-->
<!--=====================================-->
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Guía de Compra</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Inicio</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Guía de Compra</li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <span></span>
        </li>
        <li class="shape-2 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-13.png" alt="shape"></li>
        <li class="shape-3 scene"><img data-depth="-2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-15.png" alt="shape"></li>
        <li class="shape-4">
            <span></span>
        </li>
        <li class="shape-5 scene"><img data-depth="2" src="<?php echo $baseUrl; ?>/assets/images/about/shape-07.png" alt="shape"></li>
    </ul>
</div>

<!--=====================================-->
<!--=           Guide Content Area Start         =-->
<!--=====================================-->
<section class="privacy-policy-area">
    <div class="container">
        <div class="row row--30">
            <!-- Contenido Principal -->
            <div class="col-lg-8">
                <div class="privacy-policy">
                    <div class="text-block">
                        <h1 class="title">Manuales de Usuario y Guía de Compra</h1>
                        <p>Bienvenido a nuestra sección de ayuda. Aquí encontrará manuales detallados y guías paso a paso para navegar por nuestra plataforma, inscribirse en cursos y gestionar su cuenta de estudiante.<br>
                            <br>
                            Nuestro objetivo es hacer que su experiencia de aprendizaje sea lo más fluida posible. Si tiene alguna duda que no se resuelva en estos manuales, por favor contáctenos.
                        </p>
                    </div>
                    <div class="text-block">
                        <h4 class="title">¿Cómo comprar un curso?</h4>
                        <p>Para adquirir uno de nuestros cursos, siga estos sencillos pasos:</p>
                        <ol>
                            <li>Navegue por nuestro catálogo de cursos y seleccione el que sea de su interés.</li>
                            <li>Haga clic en el botón "Inscribirse" o "Añadir al carrito".</li>
                            <li>Revise su carrito de compras y proceda al pago.</li>
                            <li>Complete sus datos de facturación y seleccione su método de pago preferido.</li>
                            <li>Una vez confirmado el pago, recibirá un correo electrónico con los detalles de acceso.</li>
                        </ol>
                    </div>
                    <div class="text-block">
                        <h4 class="title">Acceso al Aula Virtual</h4>
                        <p>Una vez inscrito, puede acceder a sus cursos a través del enlace "Aula Virtual" en el menú principal. Ingrese con su correo electrónico y contraseña registrados.</p>
                    </div>
                     <div class="text-block">
                        <div class="edu-faq-content">
                            <!-- Aquí se pueden incluir preguntas frecuentes específicas de compras si es necesario -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="edu-blog-sidebar">
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-search">
                        <div class="inner">
                            <h4 class="widget-title">Buscar en Ayuda</h4>
                            <div class="content">
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="icon-2"></i></button>
                                    <input type="text" placeholder="Buscar manual...">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-tags">
                        <div class="inner">
                            <h4 class="widget-title">Temas Comunes</h4>
                            <div class="content">
                                <div class="tag-list">
                                    <a href="#">Inscripción</a>
                                    <a href="#">Pagos</a>
                                    <a href="#">Certificados</a>
                                    <a href="#">Acceso</a>
                                    <a href="#">Soporte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-action">
                        <div class="inner">
                            <h4 class="title">¿Necesitas más ayuda?</h4>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Nuestro equipo de soporte está disponible para asistirte.</p>
                            <a href="https://api.whatsapp.com/send?phone=+51940414724&text=Hola%20Rebagliati,%20tengo%20una%20consulta%20sobre%20el%20proceso%20de%20compra" target="_blank" class="edu-btn btn-medium">Contactar Soporte<i class="icon-4"></i></a>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
    </div>
</section>