<?php
/*
Template Name: OtherServices Template
*/

if( have_posts() ){the_post();}
?>

<div class="content-medium">
    <div class="header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">OTHER <span class="white"> SERVICES</span></h1>
        </div>
    </div>
    <div class="center">
        <div class="busIcon float-left"></div>
        <h1 class="title t4 text-center blue-cerulean float-right">CHOOSE <span class="pine-cone"> YOUR TRANSPORTATION</span></h1>
    </div>
    <br>
    <div class="text t-paragraph text-justify">
        <?php echo get_the_content(); ?>
    </div>
    <br><hr><br>
</div>
<br><br>
<?php get_template_part('templates/destinations', 'page'); ?>