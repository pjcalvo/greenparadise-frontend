<?php
/*
Template Name: Destinations Template
*/

$args = array( 'post_type' => 'destination', 'posts_per_page' => -1);
$loop = new WP_Query( $args );

$taxonomyArgs = array(
		'hide_empty'        => true,
		'parent'			=> 0,
        'hierarchical'      => false
    );

/* Taxonomy */
$taxonomy = 'destination_category'; // this is the name of the taxonomy
$terms = get_terms( $taxonomy, $taxonomyArgs ); // for more details refer to codex please.

if( have_posts() ){the_post();}
?>
<div class="destinations">
    <div class="header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">DISCOVER <span class="white"> NEW PLACES</span></h1>
        </div>
    </div>
    <div class="content-medium">
        <h1 class="title t2 green text-center">AWESOME <span class="black"> DESTINATIONS</span></h1>
        <div class="header-select">
            <div class="center">
                <label class="lbl_selectpicker">SELECT DESTINATION</label>
                <select id="destinationFilter" class="selectpicker green">
                    <option value="-1">View All Destinations</option>
                    
                    <?php foreach ($terms as $term) : ?>
                    
                    <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div id="des-title" class="title-content text-center"><h1 class="title t4">ALL <span> DESTINATIONS</span> </h1></div>
        <div class="carousel-content">
            <div id="dest_carousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                
                <div id="destCarouselContainer" class="carousel-inner" role="listbox">
                    <?php $count = 0 ?>
                    <div class="item active">
                        
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $count++; 
                        if($count >= 4):
                        $count = 0;
                        ?>
                        </div><div class="item">
                        <?php endif;?>
                        <div class="col-sm-4">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <div class="blue-cerulean">
                                    <!--<span class="price center">$<php echo get_field('destination_price') ?><sup>PER PERSON</sup></span>-->
                                    <span class="place center"><?php the_title() ?></span>
                                </div>
                                <!--<p class="text-center"><php echo get_field('destination_description') ?></p>-->
                                <hr>
                                <div class="sect-foot">
                                    <!--<label class="blue-cerulean t12">RESTRICTIONS APPLY</label>-->
                                    <a href="<?php echo get_permalink() ?>">
                                        <button href type="button" class="btn btn-green">TAKE ME THERE</button>
                                    </a>
                                </div>
                            </div>
                    
                        <?php endwhile; // end of the loop. 
                        ?>
                        </div>
                    </div>
                    <!-- Left and right controls -->                
                    <a class="left carousel-control" href="#dest_carousel" role="button" data-slide="prev"><span>‹</span></a>

                    <a class="right carousel-control" href="#dest_carousel" role="button" data-slide="next"><span>›</span></a>
                </div>
            </div>
        </div>
    </div>
</div>