<?php
// views/web/public_profile.php
?>
<div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title"><?php echo $user['name']; ?></h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/">Inicio</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Perfil Público</li>
            </ul>
        </div>
    </div>
</div>

<div class="edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <!-- Left Sidebar -->
            <div class="col-lg-4">
                <div class="edu-course-sidebar">
                    <div class="edu-course-widget widget-instructor">
                        <div class="inner" style="text-align: center; padding: 30px;">
                            <div class="thumbnail" style="margin-bottom: 20px;">
                                <img src="<?php echo $user['avatar']; ?>" alt="User Avatar" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                            </div>
                            <div class="content">
                                <h4 class="title" style="margin-bottom: 5px;"><?php echo $user['name']; ?></h4>
                                <span class="subtitle" style="display: block; margin-bottom: 15px; color: #1ab69d;"><?php echo $user['role']; ?></span>
                                
                                <div class="course-meta" style="justify-content: center; margin-bottom: 15px;">
                                    <span><i class="icon-25"></i> <?php echo $user['course_count']; ?> Cursos</span>
                                </div>
                                
                                <div class="rating" style="color: #ffa41b; margin-bottom: 20px;">
                                    <?php for($i=0; $i<5; $i++): ?>
                                        <i class="<?php echo ($i < $user['rating']) ? 'icon-23' : 'icon-23 off'; ?>"></i>
                                    <?php endfor; ?>
                                    <span class="rating-count">(<?php echo $user['rating']; ?>)</span>
                                </div>
                                
                                <a href="#" class="edu-btn btn-medium" style="width: 100%;">Enviar Mensaje</a>
                                
                                <ul class="social-share icon-transparent" style="justify-content: center; margin-top: 20px;">
                                    <li><a href="#" class="color-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="color-ig"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#" class="color-yt"><i class="icon-youtube"></i></a></li>
                                </ul>
                                
                                <div class="member-since" style="margin-top: 20px; font-size: 14px; color: #777;">
                                    Miembro desde <?php echo $user['joined']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="border-bottom: 1px solid #eee; margin-bottom: 30px;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="true" style="border: none; background: transparent; padding: 10px 20px; font-weight: 600; color: #333;">Cursos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="co-owned-tab" data-bs-toggle="tab" data-bs-target="#co-owned" type="button" role="tab" aria-controls="co-owned" aria-selected="false" style="border: none; background: transparent; padding: 10px 20px; font-weight: 600; color: #777;">Co-Owned Courses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false" style="border: none; background: transparent; padding: 10px 20px; font-weight: 600; color: #777;">Reseñas</button>
                    </li>
                </ul>
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                        <div class="row g-5">
                            <?php foreach($courses as $course): ?>
                            <div class="col-md-6 col-lg-6 col-xl-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-course course-style-1 hover-button-bg-white">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $course['image']; ?>" alt="Course Meta">
                                            </a>
                                            <div class="time-top">
                                                <span class="duration"><i class="icon-61"></i> <?php echo $course['duration'] ?? 'N/A'; ?></span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="course-level"><?php echo $course['category']; ?></span>
                                            <h6 class="title">
                                                <a href="#"><?php echo $course['title']; ?></a>
                                            </h6>
                                            <div class="course-rating">
                                                <div class="rating">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <span class="rating-count">(<?php echo $course['rating']; ?>)</span>
                                            </div>
                                            <div class="course-price">
                                                <?php if($course['price']): ?>
                                                    $<?php echo $course['price']; ?>
                                                    <?php if($course['old_price']): ?>
                                                        <span class="old-price">$<?php echo $course['old_price']; ?></span>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    Gratis
                                                <?php endif; ?>
                                            </div>
                                            <ul class="course-meta">
                                                <li><i class="icon-24"></i> <?php echo $course['lessons']; ?> Lecciones</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                         <!-- Pagination -->
                        <div class="row">
                            <div class="col-lg-12 mt--60">
                                <nav>
                                    <ul class="edu-pagination">
                                        <li><a href="#"><i class="icon-west"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-east"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="co-owned" role="tabpanel" aria-labelledby="co-owned-tab">
                        <p>No hay cursos compartidos.</p>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                         <p>No hay reseñas aún.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
