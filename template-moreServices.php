<?php
/*
Template Name: MoreServices Template
*/

if( have_posts() ){the_post();}
?>

<div class="content-medium">
    <div class="other-service header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">OTHER <span class="white"> SERVICES</span></h1>
        </div>
    </div>
    <div class="other-service-title float-left">
        <div class="float-left busIcon"></div>
        <h1 class="title t4 blue-cerulean"><?php the_title() ?></h1>
    </div>
    <br><hr class="float-left"><br>
    <div class="text t-paragraph text-justify float-left">
        <?php echo get_the_content(); ?>
    </div>
    
</div>
<br><br>
<?php get_template_part('templates/destinations', 'page'); ?>