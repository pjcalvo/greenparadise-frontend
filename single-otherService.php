<?php
global $wp_query;
$wp_query->the_post();
$Description = get_field("otherservice_description");

?>

<div class="single content-medium">
    <div class="text-center singleHeader">
        <h1 class="title t4 text-justify dark-green">OTHER SERVICES</h1>
        <br>
    </div>
    <div>
        <hr><br>
        <div class="text t-paragraph">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
            <p class"text t-paragraph"><?php echo $Description ?></p>
        </div>
        <div class="text-center">
            <img class = "single-image" src="" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>')">
        </div>  
        <div class="col-sm-5 col-sm-offset-1">
            <h1 class="title t4_2 dark-green">PRICE:</h1>
            <h1 class="title t1_1 blue-cerulean"><span>$</span><?php echo get_field("otherservice_price"); ?>
                <sup class="t12">PER PERSON</sup>
            </h1>
        </div>
        <br><br>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>