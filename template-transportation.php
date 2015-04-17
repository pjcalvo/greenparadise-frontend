<?php
/*
Template Name: Transportation Template
*/

if( have_posts() ){the_post();}

$otherServicesArgs = array( 'post_type' => 'otherService', 'posts_per_page' => 3);
$otherServicesLoop = new WP_Query( $otherServicesArgs );

?>

<div class="content-medium">
    <div class="other-service header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">OTHER <span class="white"> SERVICES</span></h1>
        </div>
    </div>
    <div class="other-service-title float-left">
        <div class="float-left busIcon"></div>
        <h1 class="title t4 blue-cerulean"><?php the_title() ?></h1>
    </div>
    <br><hr class="float-left"><br>
    <div class="text t-paragraph text-justify float-left">
        <?php echo get_the_content(); ?>
    </div>
    
</div>
<div class="services transportation-page">
    <div class=" contactServices content-medium">
    <!-- Other Services -->
            <div class="carouselContent">
                <div class="vacationHeader">
                    <h1 class="title t2 pine-cone">TRANSPORT <span> SERVICES</span></h1>
                    <p class="text t-paragraph"><?php echo $otherService?></p>
                </div>
                <div id="carousel-otherServices" class="row carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php 
                            $count = 0;
                            $showControl = false;
                        ?>
                        <div class="item active">
                            <?php while ( $otherServicesLoop->have_posts() ) : $otherServicesLoop->the_post(); 

                            if($count >= 6):
                            $count = 0;
                            $showControl = true;
                            ?>
                            </div><div class="item">
                            <?php endif;?>    
                            <div class="subItem col-sm-4">
                                <a href="<?php echo get_permalink() ?>">
                                    <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                    <h1 class="title t6 dark-green tour-name"><?php the_title() ?></h1>

                                </a>
                            </div>
                        <?php $count++; endwhile; // end of the loop. 
                        ?>
                        </div>

                        <!-- Controls -->
                        <?php if($showControl): ?>
                            <a class="left carousel-control" href="#carousel-otherServices" role="button" data-slide="prev"><span>‹</span></a>
                            <a class="right carousel-control" href="#carousel-otherServices" role="button" data-slide="next"><span >›</span></a>
                        <?php endif; ?>
                    </div> <!-- Carousel -->
                </div>
            </div>

    </div>
</div>
<br><br>
<?php get_template_part('templates/destinations', 'page'); ?>