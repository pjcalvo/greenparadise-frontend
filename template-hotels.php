<?php
/*
Template Name: Hotels Template
*/

if( have_posts() ){the_post();}
?>

<div class="hotels">
    <div class="header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">ENJOY <span class="white"> YOUR STAY</span></h1>
        </div>
    </div>
    <div class="content-medium">
        <div class="hotelHeader text-center">
            <h1 class="title t2 blue-cerulean">SEND <span class="pine-cone"> US A REQUEST</span></h1>
            <p class="text t-paragraph sumary"><?php echo get_the_content() ?></p>
        </div>
    </div>
    <div class="hotelForm-content">
        <div class="form white">
            <h1 class="title t5 white">FORM HOTEL REQUEST</h1>
            <?php echo do_shortcode( '[contact-form-7 id="166" title="Untitled"]' ); ?>
        </div>
    </div>
    <div class="hotelsContent content-medium">
    </div>
</div>