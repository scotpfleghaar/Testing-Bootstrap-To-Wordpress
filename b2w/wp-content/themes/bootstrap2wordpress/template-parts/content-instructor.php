<?php wp_reset_query(); ?>
<?php
//INSTRUCTOR
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$background_photo = get_field('background_photo');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_username = get_field('google_username');
$number_of_students = get_field('number_of_student');
$number_of_reviews = get_field('number_of_reviews');
$number_of_courses = get_field('number_of_courses');

?>

<!-- INSTRUCTOR ======================================-->
<section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h2><?php echo $instructor_section_title; ?></h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $google_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <?php echo $full_bio; ?>
                    <hr>
                    <h3>The Numbers <small>They Don't Lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $number_of_students; ?> <span>Students</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $number_of_reviews; ?><span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $number_of_courses; ?> <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>