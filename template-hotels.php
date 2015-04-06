<?php
/*
Template Name: Hotels Template
*/

$taxonomy = 'hotel_province'; // this is the name of the taxonomy
 $terms = get_terms( $taxonomy, 'orderby=count&hide_empty=1&parent=0' ); // for more details refer to codex please.

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
            <h1 class="title t5 white">HOTEL REQUEST FORM<Hotel Request Form/h1>
            <?php echo do_shortcode( '[contact-form-7 id="166" title="Untitled"]' ); ?>
        </div>
    </div>
    <div class="hotelsContent content-medium">
        <div class="hotelHeader text-center">
            <h1 class="title t2 dark-green">HOTELS</h1>
        </div>
        <?php foreach ($terms as $term) : ?>
        <div class="province-list">
        <h1 class="province-title title t4 blue-cerulean"> <?php echo $term->name; ?></h1>
        <?php $query = get_article_query($term->term_id); ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class = "hotel-item col-sm-4"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                <p class="text title t6 dark-green"><?php the_title(); ?></p></div>
            <?php endwhile; ?> 
        <?php endforeach; ?>
        </div>
    </div>
</div>