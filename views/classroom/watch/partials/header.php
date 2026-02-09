<header class="classroom-header">
    <div class="d-flex align-items-center">
        <button class="btn btn-link text-white me-3 d-none d-lg-block" id="toggle-sidebar">
            <i class="icon-54"></i>
        </button>
        <button class="btn btn-link text-white me-3 d-lg-none mobile-toggle">
            <i class="icon-54"></i>
        </button>
        <h1 class="course-title"><?php echo $courseTitle ?? 'Curso de ejemplo'; ?></h1>
    </div>

    <div class="d-flex align-items-center">
        <div class="progress-container d-none d-md-flex me-3">
            <span class="progress-text">0 de 77 elementos</span>
            <div class="progress-bar-wrapper">
                <div class="progress-fill" style="width: 15%;"></div>
            </div>
        </div>
        
        <!-- Toggle Comments -->
        <button class="btn btn-link text-white me-3" id="toggle-comments" title="Mostrar/Ocultar Comentarios">
            <i class="ri-chat-3-line" style="font-size: 24px;"></i>
        </button>

        <a href="<?php echo $baseUrl; ?>/aula-virtual/mi-perfil" class="btn-close-classroom">
            <i class="icon-73"></i>
        </a>
    </div>
</header>