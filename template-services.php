<?php
/*
Template Name: Services Template
*/

$args = array( 'post_type' => 'OneDay', 'posts_per_page' => -1);
$loop = new WP_Query( $args );

$vacationArgs = array( 'post_type' => 'vacationPackage', 'posts_per_page' => -1);
$vacationLoop = new WP_Query( $vacationArgs );

$oneDayExcerpt = get_field('one_day_tour_excerpt');
$vacationPackage = get_field('vacation_package_excerpt');

if( have_posts() ){the_post();}
?>

<div class="services">
    <div class="header small-banner center" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>');">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">DISCOVER <span class="white"> THE PARADISE</span></h1>
        </div>
    </div>
    <div class="contactServices content-medium">
        <div class="pageSumary row">
            <?php the_content() ?>
        </div>
        <div class="oneDayGrayHeader">
            <h1 class="title t2 dark-green">ONE DAY <span> TOURS</span></h1>
            <p class="text t-paragraph"><?php echo $oneDayExcerpt?></p>
        </div>

        <div class="carouselContent">
            <div id="carousel-oneDay" class="row carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php 
                        $count = 0;
                        $showControl = false;
                    ?>
                    <div class="item active">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $count++; 
                        if($count >= 7):
                        $count = 0;
                        $showControl = true;
                        ?>
                        </div><div class="item">
                        <?php endif;?>
                        <div class="subItem col-sm-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <h1 class="title t6 dark-green tour-name"><?php the_title() ?></h1>
                                <p class="text img-sumary pine-cone"><?php echo get_the_excerpt() ?></p>
                            </a>
                        </div>
                    <?php endwhile; // end of the loop. 
                    ?>
                    </div>

                    <!-- Controls -->
                    <?php if($showControl): ?>
                        <a class="left carousel-control" href="#carousel-oneDay" role="button" data-slide="prev"><span>‹</span></a>
                        <a class="right carousel-control" href="#carousel-oneDay" role="button" data-slide="next"><span >›</span></a>
                    <?php endif; ?>
                </div> <!-- Carousel -->
            </div>
        </div>
        <hr>
        <div class="carouselContent">
            <div class="vacationHeader">
                <h1 class="title t2 blue-cerulean">VACATION <span> PACKAGES</span></h1>
                <p class="text t-paragraph"><?php echo $vacationPackage?></p>
            </div>
            <div id="carousel-vacations" class="row carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php 
                        $count = 0;
                        $showControl = false;
                    ?>
                    <div class="item active">
                        <?php while ( $vacationLoop->have_posts() ) : $vacationLoop->the_post(); 
                        $count++; 
                        if($count >= 7):
                        $count = 0;
                        $showControl = true;
                        ?>
                        </div><div class="item">
                        <?php endif;?>    
                        <div class="subItem col-sm-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <h1 class="title t6 dark-green tour-name"><?php the_title() ?></h1>
                                <p class="text img-sumary pine-cone"><?php echo get_the_excerpt() ?></p>
                            </a>
                        </div>
                    <?php endwhile; // end of the loop. 
                    ?>
                    </div>

                    <!-- Controls -->
                    <?php if($showControl): ?>
                        <a class="left carousel-control" href="#carousel-vacations" role="button" data-slide="prev"><span>‹</span></a>
                        <a class="right carousel-control" href="#carousel-vacations" role="button" data-slide="next"><span >›</span></a>
                    <?php endif; ?>
                </div> <!-- Carousel -->
            </div>
        </div>

    </div>
</div>
<?php get_template_part('templates/moreservices'); ?>
