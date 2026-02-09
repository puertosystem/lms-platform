<?php
// Mock Data for Course Content
$modules = [
    [
        'title' => 'Introducción',
        'lessons' => [
            ['title' => 'Bienvenida al curso', 'duration' => '2:30', 'type' => 'video', 'completed' => true],
            ['title' => 'Qué aprenderás', 'duration' => '5:15', 'type' => 'video', 'completed' => true],
        ]
    ],
    [
        'title' => 'Fundamentos',
        'lessons' => [
            ['title' => 'Conceptos básicos', 'duration' => '10:45', 'type' => 'video', 'completed' => false],
            ['title' => 'Instalación de herramientas', 'duration' => '15:20', 'type' => 'video', 'completed' => false],
            ['title' => 'Quiz de Fundamentos', 'duration' => '10 preguntas', 'type' => 'quiz', 'completed' => false],
        ]
    ],
    [
        'title' => 'Técnicas Avanzadas',
        'lessons' => [
            ['title' => 'Optimización de flujo', 'duration' => '20:00', 'type' => 'video', 'completed' => false],
            ['title' => 'Integraciones', 'duration' => '12:30', 'type' => 'video', 'completed' => false],
        ]
    ],
    [
        'title' => 'Proyecto Final',
        'lessons' => [
            ['title' => 'Planteamiento', 'duration' => '8:00', 'type' => 'video', 'completed' => false],
            ['title' => 'Desarrollo paso a paso', 'duration' => '45:00', 'type' => 'video', 'completed' => false],
            ['title' => 'Entrega final', 'duration' => '5:00', 'type' => 'assignment', 'completed' => false],
        ]
    ]
];
?>
<aside class="classroom-sidebar">
    <div class="lesson-search">
        <input type="text" placeholder="Buscar contenido de cursos">
        <i class="icon-2" style="position: absolute; right: 30px; top: 25px; color: #999;"></i>
    </div>
    
    <div class="accordion" id="courseAccordion">
        <?php foreach($modules as $index => $module): ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                    <?php echo $module['title']; ?>
                </button>
            </h2>
            <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                    <ul class="lesson-list">
                        <?php foreach($module['lessons'] as $lIndex => $lesson): ?>
                        <li class="lesson-item <?php echo ($index === 0 && $lIndex === 0) ? 'active' : ''; ?>">
                            <a href="#">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="<?php echo $lesson['type'] === 'quiz' ? 'icon-59' : ($lesson['type'] === 'assignment' ? 'icon-72' : 'icon-68'); ?> lesson-icon"></i>
                                        <span><?php echo $lesson['title']; ?></span>
                                    </div>
                                    <?php if($lesson['completed']): ?>
                                    <i class="icon-76 lesson-check" style="color: var(--color-primary);"></i>
                                    <?php else: ?>
                                    <i class="ri-checkbox-blank-circle-line lesson-check" style="color: #ddd;"></i>
                                    <?php endif; ?>
                                </div>
                                <span style="font-size: 12px; color: #999; margin-left: 34px; display: block;"><?php echo $lesson['duration']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</aside>
