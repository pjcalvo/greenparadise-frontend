<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single content-medium">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-justify dark-green">HOTEL<span> </span></h1>
            <br>
            <p class="text t-paragraph text-justify">All of our hotels have been strictly choosed to deliver the best experience to the tourists</p>
    </div>
    <div>
        <hr><br>
         <div class="">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
        </div>
        <div class="text-center">
            <img class = "single-image" src="" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>')">
        </div>
        <div class="">
            <h1 class="title t4_3">DETAILS</h1>
            <div class="text t-paragraph text-justify"><?php echo get_the_excerpt() ?></div>
        </div>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>