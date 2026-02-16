<?php
// views/web/privacy/security.php
?>
<!--=====================================-->
<!--=       Breadcrumb Area Start      =-->
<!--=====================================-->
<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Seguridad</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/">Inicio</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/anexo-de-privacidad">Anexo de Privacidad</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Seguridad</li>
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
<!--=           Security Area Start     =-->
<!--=====================================-->
<section class="privacy-policy-area">
    <div class="container">
        <div class="row row--30">
            <div class="col-lg-8">
                <div class="privacy-policy">
                    <div class="text-block">
                        <h3 class="title">Seguridad en Rebagliati Diplomados</h3>
                        <p>En el Consorcio Rebagliati Diplomados, nos tomamos muy en serio la seguridad de su información personal. Implementamos medidas técnicas, administrativas y físicas diseñadas para proteger sus datos contra acceso no autorizado, uso indebido, alteración o pérdida.</p>
                    </div>
                    
                    <div class="text-block">
                        <h4 class="title">Protección de Datos</h4>
                        <p>Utilizamos tecnologías de encriptación estándar de la industria (como SSL/TLS) para proteger la transmisión de información sensible, como datos de pago y contraseñas, a través de nuestro sitio web.</p>
                        <ul>
                            <li>Encriptación de datos en tránsito y en reposo.</li>
                            <li>Monitoreo constante de nuestros sistemas para detectar vulnerabilidades.</li>
                            <li>Acceso restringido a la información personal solo a empleados autorizados.</li>
                        </ul>
                    </div>

                    <div class="text-block">
                        <h4 class="title">Pagos Seguros</h4>
                        <p>No almacenamos los datos completos de su tarjeta de crédito o débito en nuestros servidores. Las transacciones de pago son procesadas por proveedores de servicios de pago certificados que cumplen con los estándares de seguridad PCI-DSS (Payment Card Industry Data Security Standard).</p>
                    </div>

                    <div class="text-block">
                        <h4 class="title">Seguridad de la Cuenta</h4>
                        <p>Le recomendamos que utilice contraseñas seguras y únicas para su cuenta en nuestra plataforma y que no las comparta con nadie. Si sospecha que su cuenta ha sido comprometida, por favor contáctenos inmediatamente.</p>
                    </div>
                    
                    <div class="text-block">
                         <div class="edu-faq-content">
                            <?php include $BASE_PATH . '/views/web/includes/faq/faq-central.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="edu-blog-sidebar">
                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-search">
                        <div class="inner">
                            <h4 class="widget-title">Buscar</h4>
                            <div class="content">
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="icon-2"></i></button>
                                    <input type="text" placeholder="Buscar...">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->

                    <!-- Start Single Widget  -->
                    <div class="edu-blog-widget widget-action">
                        <div class="inner">
                            <h4 class="title">¿Dudas sobre seguridad?</h4>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Nuestro equipo de soporte técnico está disponible para ayudarte.</p>
                            <a href="https://api.whatsapp.com/send?phone=+51940414724&text=Hola%20equipo,%20tengo%20una%20consulta%20sobre%20la%20seguridad%20de%20la%20plataforma." target="_blank" class="edu-btn btn-medium">WhatsApp <i class="icon-4"></i></a>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
    </div>
</section>
