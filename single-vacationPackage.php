<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single content-medium">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-justify blue-cerulean">VACATION <span> PACKAGE</span></h1>
            <br>
    </div>
    <div class="content-medium">
        <hr><br>
        <div class="">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
            <p class"text t-paragraph"><?php echo the_field("packageDescription"); ?></p>
        </div>
        <div class="text-center">
            <img class = "single-image" src="" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>')">
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h1 class="title t4_2 dark-green">PACKAGE DETAILS:</h1>
                <br>
                <h1 class="title t5">INCLUDES:</h1>
                <div class="text t-paragraph">
                    <?php echo get_field("includes"); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php $hotels = get_field('vacation_hotels'); ?>
                <h1 class="title t4_2 dark-green">HOTELS:</h1>
                <?php if($hotels): ?>
                <br>
                <?php foreach( $hotels as $hotel): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($hotel); ?>
                <li class="subtitle">
                    <?php print_r($hotel->post_title) ?>
                </li>
                <?php endforeach; endif;?>
            </div>
            <div class="col-sm-4">
                <h1 class="title t4_2 dark-green">NUMBER OF NIGHTS:</h1>
                <h1 class="title t1_1 blue-cerulean"><?php echo get_field("number_nights"); ?></h1>
                <h1 class="title t4_2 dark-green">PRICE:</h1>
                </label>
                <h1 class="title t1_1 blue-cerulean"><span>$</span><?php echo get_field("price_from"); ?>
                    <sup class="t12">PER PERSON</sup>
                </h1>
                <button type="button" class="btn btn-green modalbtn" data-toggle="modal" data-title="<?php echo "Vacation Package - " . get_the_title() ?>" data-target="#buyModal">BUY THIS TOUR</button>
            </div>
        </div>
        <br><br>
        <div class="">
            <h1 class="title t4_3">DETAILS</h1>
            <div class="text t-paragraph text-justify"><?php echo get_the_excerpt() ?></div>
        </div>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>
<?php get_template_part('templates/modalBuy', 'page'); ?>