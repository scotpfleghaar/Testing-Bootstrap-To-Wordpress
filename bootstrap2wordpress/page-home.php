<?php
/*
    Template Name: Home Page
*/

// Custom Fields
$prelaunch_price = get_post_meta(7,'prelaunch_price',true); 
$launch_price = get_post_meta(7,'launch_price',true); 
$final_price = get_post_meta(7,'final_price',true); 
$course_url = get_post_meta(7,'course_url',true); 
$button_text = get_post_meta(7,'button_text',true);

// Advanced Custom Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_description');

//Who should take the course

$who_section_image = get_field('who_section_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');


    

get_header(); ?>

    <!-- Hero ======================================-->
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="assets/img/logo-badge.png" alt="Bootstrap to wordpress" class="logo">
                    </div>
                    <!-- END col-sm-5 -->

                    <div class="col-sm-7 hero-text">
                        <h1>
                            <?php bloginfo('name')?>
                        </h1>
                        <p class="lead">
                            <?php bloginfo('description');?>
                        </p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                <span><?php echo $prelaunch_price?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming Soon!</small></h4>
                                <span><?php echo $launch_price?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming Soon!</small></h4>
                                <span><?php echo $final_price?></span>
                            </div>
                        </div>
                        <p>
                            <a class="btn btn-lg btn-danger" href="<?php echo $course_url?>" role="button">
                                <?php echo $button_text?>
                            </a>
                        </p>
                    </div>
                    <!-- END col-sm-7 -->
                </div>
                <!-- END ROW -->
            </div>
            <!-- END CONTAINER -->
        </article>
    </section>

    <!-- Opt In Section ======================================-->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><strong>Subscribe to our mailing list.</strong> We'll send something special as a thank you.</p>

                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success bt-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to Subscribe</button>
                </div>

            </div>
        </div>

    </section>

    <!-- Bosst your income ======================================-->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                <?php 
                if(!empty($income_feature_image)){?>
                <img src="<?php echo $income_feature_image['url'] ?>" alt="<?php echo $income_feature_image['alt'] ?>">
                <?php } ?>

                <h2>
                    <?php echo $income_section_title ?>
                </h2>
            </div>
            <p class="lead">
                <?php echo $income_section_description ?>
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        <?php echo $reason_1_title ?>
                    </h3>
                    <p>
                        <?php echo $reason_1_description ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h3>
                        <?php echo $reason_2_title ?>
                    </h3>
                    <p>
                        <?php echo $reason_2_description ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who benefits ======================================-->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">

                <?php 
                if(!empty($who_section_image)){?>
                <img src="<?php echo $who_section_image['url'] ?>" alt="<?php echo $who_section_image['alt'] ?>">
                <?php } ?>

                <h2>
                    <?php echo $who_section_title ?>
                </h2>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                        <?php echo $who_section_body ?>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Course Features ======================================-->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
                <img src="assets/img/icon-rocket.png">
                <h2>Course Features</h2>
                <div class="row">
                    <div class="col-sm-2">
                        <i class="ci ci-computer"></i>
                        <h4>Lifetime to 80 plus lectures</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-watch"></i>
                        <h4>10+ hours of HD content</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-calender"></i>
                        <h4>30 day money back garentee</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-cumminty"></i>
                        <h4>Access to a community of like minded students</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-instructor"></i>
                        <h4>Direct access to the instructor</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-divice"></i>
                        <h4>Available on all devices</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Features ======================================-->
    <section id="project-features">
        <div class="container">
            <h2>Final project features</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/img/icon-design.png" alt="design">
                    <h3>Nice &amp! design!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>

                </div>
                <div class="col-sm-4">
                    <img src="assets/img/icon-code.png" alt="design">
                    <h3>Nice &amp! code!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>

                </div>
                <div class="col-sm-4">
                    <img src="assets/img/icon-cms.png" alt="design">
                    <h3>Nice &amp! design!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>

                </div>
            </div>
        </div>
    </section>

    <!-- Video Featurette ======================================-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What the course intro!</h2>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/lg4BtCwFyVM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </section>

    <!-- INSTRUCTOR ======================================-->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h2>Your Instructor</h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.</p>
                    <hr>
                    <h3>The Numbers <small>They Don't Lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>Students</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568 <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Testimonial ======================================-->
    <section id="kudos">
        <div class="container">
            <dvi class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What people think</h2>

                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.<cite>John Johnson</cite></blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="assets/img/ben.png" alt="Man with mustache">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.<cite>John Johnson</cite></blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="assets/img/aj.png" alt="Dude with nice hair">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.<cite>John Johnson</cite></blockquote>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="assets/img/ernest.png" alt="Dude with nice hair">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum arcu pulvinar nisl dignissim hendrerit a quis risus. Etiam cursus dui sit amet sapien tincidunt, vel elementum metus semper.<cite>John Johnson</cite></blockquote>
                        </div>
                    </div>
                </div>
            </dvi>
        </div>
    </section>

    <?php
get_footer();
?>
