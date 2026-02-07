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
        <div class="progress-container d-none d-md-flex">
            <span class="progress-text">0 de 77 elementos</span>
            <div class="progress-bar-wrapper">
                <div class="progress-fill" style="width: 15%;"></div>
            </div>
        </div>
        <a href="<?php echo $baseUrl; ?>/mis-cursos" class="btn-close-classroom">
            <i class="icon-73"></i>
        </a>
    </div>
</header>