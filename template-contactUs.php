<?php
/*
Template Name: ContactUs Template
*/
if( have_posts() ){the_post();}
?>

<div class="contactUS">
    <div class="header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">GET <span class="white"> IN TOUCH</span></h1>
        </div>
    </div>
    <div class="contactContent content-medium">
        <h1 class="title t2 white text-center blue-cerulean">CONTACT <span class="pine-cone"> US</span></h1>
        <p class="text t-paragraph center"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        
        <?php echo do_shortcode( '[contact-form-7 id="114" title="ContactUs"]') ?>
    </div>
    <hr>
    <?php get_template_part('templates/letsTalk', 'page'); ?>
    <hr>
    <?php get_template_part('templates/ourLocation', 'page'); ?>
</div>