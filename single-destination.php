<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-justify dark-green">DESTINATIONS</h1>
            <br>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
    </div>
    <div class="content-medium">
        <hr><br>
        <div class="text-center">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
        </div>
        <div class="col-sm-12">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
            <p class"text t-paragraph"><?php echo get_the_excerpt() ?></p>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h1 class="title t4_2 dark-green">PACKAGE DETAILS:</h1>
                <br>
                <h1 class="title t5">INCLUDES:</h1>
                <div class="text t-paragraph">
                    <?php echo get_field("destination_includes"); ?>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <h1 class="title t4_2 dark-green">PRICE:</h1>
                <br>
                </label>
                <h1 class="title t1_1 blue-cerulean"><span>$</span><?php echo get_field("destination_price"); ?>
                    <sup class="t12">PER PERSON</sup>
                </h1>
                <button type="button" class="btn btn-green">BUY THIS TOUR</button>
            </div>
        </div>
        <br><br>
        <div class="col-sm-12">
            <h1 class="title t4_3">MORE DESCRIPTION</h1>
            <div class="text t-paragraph text-justify"><?php echo the_field("destination_description"); ?></div>
        </div>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>