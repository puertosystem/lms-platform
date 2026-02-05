<?php include 'includes/course-details/banner.php'; ?>

<!--=====================================-->
<!--=     Courses Details Area Start    =-->
<!--=====================================-->
<section class="edu-section-gap course-details-area">
    <div class="container">
        <div class="row row--30">
            <div class="col-lg-8">
                <div class="course-details-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="carriculam-tab" data-bs-toggle="tab" data-bs-target="#carriculam" type="button" role="tab" aria-controls="carriculam" aria-selected="false">Carriculam</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <?php include 'includes/course-details/descripcion.php'; ?>
                        </div>
                        <div class="tab-pane fade" id="carriculam" role="tabpanel" aria-labelledby="carriculam-tab">
                            <?php include 'includes/course-details/temario.php'; ?>
                        </div>
                        <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                            <?php include 'includes/course-details/instructor.php'; ?>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <?php include 'includes/course-details/reviews.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include 'includes/course-details/info.php'; ?>
            </div>
        </div>
    </div>
</section>
