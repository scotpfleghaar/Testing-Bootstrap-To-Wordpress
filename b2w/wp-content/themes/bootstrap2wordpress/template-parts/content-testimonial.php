<?php wp_reset_query(); ?>
<!-- Testimonial ======================================-->
<section id="kudos">
        <div class="container">
            <dvi class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What people think</h2>

                    <div class="row testimonial">

                    <?php $loop = new WP_Query(array('post_type' => 'reviews', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                    <?php while($loop->have_posts()) : $loop->the_post();?>
    
                    <div class="col-sm-4">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail(array(200,200));
                    }?>
                    </div>
                    <div class="col-sm-8">
                        <blockquote><?php the_content();?><cite><?php the_title();?></cite></blockquote>
                    </div>
                    </div>
    
                    <?php endwhile; ?>

                    
                </div>
            </dvi>
        </div>
    </section>
   