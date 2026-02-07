<aside class="classroom-sidebar">
    <div class="lesson-search">
        <input type="text" placeholder="Buscar contenido de cursos">
        <i class="icon-2" style="position: absolute; right: 30px; top: 25px; color: #999;"></i>
    </div>
    
    <ul class="lesson-list">
        <?php for($i=1; $i<=13; $i++): ?>
        <li class="lesson-item <?php echo $i === 1 ? 'active' : ''; ?>">
            <a href="#">
                <div class="d-flex align-items-center">
                    <i class="icon-68 lesson-icon"></i>
                    <span>Lesson <?php echo $i; ?></span>
                </div>
                <?php if($i < 5): ?>
                <i class="icon-76 lesson-check"></i> <!-- Check icon if completed -->
                <?php else: ?>
                <i class="ri-checkbox-blank-circle-line lesson-check"></i>
                <?php endif; ?>
            </a>
        </li>
        <?php endfor; ?>
        
        <!-- Quiz Example -->
        <li class="lesson-item">
            <a href="#">
                <div class="d-flex align-items-center">
                    <i class="icon-59 lesson-icon"></i>
                    <span>Quiz 1</span>
                </div>
                <span style="font-size: 12px; color: #999;">10 preguntas</span>
            </a>
        </li>
    </ul>
</aside>