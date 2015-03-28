<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single">
    <div class="header singleOneDayHeader small-banner center">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">VACATION <span class="white"> PACKAGE</span></h1>
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
        <label><h2>Price:    </h2> </label><span class="subtitle">    $<?php echo get_field("price_from"); ?></span>
        <br>
        <label><h2>Number of Nights:    </h2> </label><span class="subtitle">    <?php echo get_field("number_nights"); ?></span>
        <br>
        <?php $hotels = get_field('vacation_hotels'); 
         if( $hotels ): ?>
        <label><h2>Hotels:    </h2> </label>
        <br>
        <?php foreach( $hotels as $hotel): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($hotel); ?>
        <li class="subtitle">
            <?php print_r($hotel->post_title) ?>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>
        <br>
        <div class="text t-paragraph text-justify"><?php echo the_field("includes"); ?></div>
    </div>
</div>