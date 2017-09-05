<?php
/*
    Template Name: Home Page
*/

// // Custom Fields
// $prelaunch_price = get_post_meta(7,'prelaunch_price',true); 
// $launch_price = get_post_meta(7,'launch_price',true); 
// $final_price = get_post_meta(7,'final_price',true); 
// $course_url = get_post_meta(7,'course_url',true); 
// $button_text = get_post_meta(7,'button_text',true);

// // Advanced Custom Fields
// $income_feature_image = get_field('income_feature_image');
// $income_section_title = get_field('income_section_title');
// $income_section_description = get_field('income_section_description');
// $reason_1_title = get_field('reason_1_title');
// $reason_1_description = get_field('reason_1_description');
// $reason_2_title = get_field('reason_2_title');
// $reason_2_description = get_field('reason_2_description');

// //Who should take the course

// $who_section_image = get_field('who_section_image');
// $who_section_title = get_field('who_section_title');
// $who_section_body = get_field('who_section_body');

// //Course Features
// $features_section_image = get_field('features_section_image');
// $features_section_title = get_field('features_section_title');
// $features_section_body = get_field('features_section_body');

// //Project Features 
// $project_feature_title = get_field('project_feature_title');
// $project_feature_body = get_field('project_feature_body');

// //Video Feature
// $video_title = get_field('video_title');
// $video_feature_link = get_field('video_feature_link');





    

get_header(); ?>

<?php get_template_part('template-parts/content','hero'); ?>
    
<?php get_template_part('template-parts/content','optin'); ?>

<?php get_template_part('template-parts/content','boost'); ?>

<?php get_template_part('template-parts/content','benefits'); ?>

<?php get_template_part('template-parts/content','coursefeatures'); ?>

<?php get_template_part('template-parts/content','projectfeatures'); ?>

<?php get_template_part('template-parts/content','video'); ?>

<?php get_template_part('template-parts/content','instructor'); ?>

<?php get_template_part('template-parts/content','testimonial'); ?>



<?php get_footer(); ?>
