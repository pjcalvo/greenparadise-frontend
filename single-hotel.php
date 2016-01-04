<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single content-medium">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-justify dark-green">HOTEL<span> </span></h1>
            <br>
    </div>
    <div>
        <hr><br>
         <div class="">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
        </div>
        <div class="text-center">
            <img class = "single-image" src="" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>')">
        </div>
        <div class="col-sm-12">
                <h1 class="title t4_2 dark-green">STARTING FROM:</h1>
                </label>
                <h1 class="title t1_1 blue-cerulean"><span>$</span><?php echo get_field("hotel_price"); ?>
                    <sup class="t12">PER NIGHT</sup>
                    <br><br>
                </h1>
        </div>
        <div class="">
            <h1 class="title t4_3">DETAILS</h1>
            <div class="text t-paragraph text-justify"><?php echo get_the_excerpt() ?></div>
        </div>
    </div>
<?php comments_template(); ?>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>