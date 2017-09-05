<?php wp_reset_query(); ?>
<?php
//Video Feature
$video_title = get_field('video_title');
$video_feature_link = get_field('video_feature_link');
?>

<!-- Video Featurette ======================================-->
<section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo $video_title; ?></h2>
                    <iframe width="100%" height="300px" src="<?php echo $video_feature_link; ?>" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </section>
