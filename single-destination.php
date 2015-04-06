<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single">
    <div class="header singleOneDayHeader small-banner center">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">DESTINATIONS</h1>
        </div>
    </div>
    <div class="text-center singleHeader">
            <h1 class="title t2 dark-green"><?php echo get_the_title() ?></h1>
            <p class="text t-paragraph text-center"><?php echo get_the_excerpt() ?></p>
    </div>
    <div class="content-medium">
        <div class="text-center">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
        </div>
        <div class="text t-paragraph text-justify"><?php echo the_field("destination_description"); ?></div>
    </div>
</div>