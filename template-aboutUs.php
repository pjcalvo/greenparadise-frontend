<?php
/*
Template Name: AboutUs Template
*/
if( have_posts() ){the_post();}
?>
<div class="aboutUS">
    <div class="header center">
        <img class="imgHeader" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">ADVENTURE <span class="white"> IS EVERYWHERE</span></h1>
        </div>
    </div>
    <div class="aboutCR content-medium">
        <?php the_content(); ?>
    </div>
    
    <?php get_template_part('templates/ourTeam', 'page'); ?>
    <?php get_template_part('templates/destinations', 'page'); ?>
</div>