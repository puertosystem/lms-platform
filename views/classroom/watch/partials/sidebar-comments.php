<aside class="classroom-sidebar-right">
    <div class="comments-header p-3">
        <div class="comment-input-wrapper position-relative mb-3">
            <input type="text" class="form-control" placeholder="Escribe tu comentario o pregunta">
            <button class="btn-send"><i class="ri-send-plane-fill"></i></button>
        </div>
        <div class="comment-filters d-flex gap-2">
            <button class="btn btn-sm btn-filter active">Más votados</button>
            <button class="btn btn-sm btn-filter">Nuevos</button>
            <button class="btn btn-sm btn-filter">Favoritos</button>
        </div>
    </div>
    
    <div class="comments-list p-3">
        <!-- Comment 1 (Main Thread) -->
        <div class="comment-item">
            <div class="d-flex gap-3">
                <div class="comment-author-col text-center">
                    <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-01.jpg" alt="Author" class="avatar rounded-circle mb-2">
                    <div class="like-action">
                        <i class="ri-heart-line"></i>
                        <span class="d-block small fw-bold">151</span>
                    </div>
                </div>
                <div class="comment-body flex-grow-1">
                    <div class="comment-meta mb-1">
                        <h6 class="author-name mb-0">Oscar Barajas Tavares</h6>
                        <span class="author-badge badge bg-primary bg-opacity-10 text-primary">Team Platzi</span>
                        <span class="text-muted small">• hace un año</span>
                    </div>
                    <div class="comment-text mb-2">
                        <p class="mb-0">Qué emoción este nuevo curso en compañía de Amin Espinoza 🚀</p>
                    </div>
                    <div class="comment-actions d-flex align-items-center justify-content-between mb-3">
                        <button class="btn-action"><i class="ri-chat-1-line me-1"></i> Responder</button>
                        <button class="btn-action"><i class="ri-flag-line me-1"></i> Reportar</button>
                    </div>

                    <!-- Replies -->
                    <div class="replies-wrapper">
                        <!-- Reply 1 -->
                        <div class="comment-item reply-item">
                            <div class="d-flex gap-3">
                                <div class="comment-author-col text-center">
                                    <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-02.jpg" alt="Author" class="avatar rounded-circle mb-2">
                                    <div class="like-action">
                                        <i class="ri-heart-line"></i>
                                        <span class="d-block small fw-bold">14</span>
                                    </div>
                                </div>
                                <div class="comment-body flex-grow-1">
                                    <div class="comment-meta mb-1">
                                        <h6 class="author-name mb-0">Cristhian Alexis Vera</h6>
                                        <span class="text-muted small">student • hace un año</span>
                                    </div>
                                    <div class="comment-text mb-2">
                                        <p class="mb-0">Buenas querida comunidad yo sabía que había un curso nuevo y sorpresa 😲 ahora si a volver a tomarlo con más fuerza.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reply 2 -->
                        <div class="comment-item reply-item">
                            <div class="d-flex gap-3">
                                <div class="comment-author-col text-center">
                                    <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-03.jpg" alt="Author" class="avatar rounded-circle mb-2">
                                    <div class="like-action">
                                        <i class="ri-heart-line"></i>
                                        <span class="d-block small fw-bold">3</span>
                                    </div>
                                </div>
                                <div class="comment-body flex-grow-1">
                                    <div class="comment-meta mb-1">
                                        <h6 class="author-name mb-0">Alexis Dorado Muñoz</h6>
                                        <span class="text-muted small">student • hace un año</span>
                                    </div>
                                    <div class="comment-text mb-2">
                                        <p class="mb-0">Genial!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" class="load-more-replies text-primary small fw-bold text-decoration-none">
                            <i class="ri-arrow-down-line"></i> Ver una respuesta más
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comment 2 -->
        <div class="comment-item mt-4">
            <div class="d-flex gap-3">
                <div class="comment-author-col text-center">
                    <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-04.jpg" alt="Author" class="avatar rounded-circle mb-2">
                    <div class="like-action">
                        <i class="ri-heart-line"></i>
                        <span class="d-block small fw-bold">29</span>
                    </div>
                </div>
                <div class="comment-body flex-grow-1">
                    <div class="comment-meta mb-1">
                        <h6 class="author-name mb-0">Sara María Mejía</h6>
                        <span class="text-muted small">student • hace un año</span>
                    </div>
                    <div class="comment-text mb-2">
                        <p class="mb-0">Genial! Un curso renovado, con una nueva dinámica más fresca! Algo me dice que lo disfrutaré!</p>
                    </div>
                    <div class="comment-actions d-flex align-items-center justify-content-between">
                        <button class="btn-action"><i class="ri-chat-1-line me-1"></i> Responder</button>
                        <button class="btn-action"><i class="ri-flag-line me-1"></i> Reportar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
