<?php
 global $wp_query;
 $wp_query->the_post();
$oneDayTours = get_field('one_day_tour');
$packages = get_field('vacation_package');
$moreDescription = get_field("destination_description");

?>

<div class="single content-medium">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-justify dark-green">DESTINATIONS</h1>
            <br>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
    </div>
    <div>
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
     <!-- One Day Carousel -->
    <?php if($oneDayTours): ?>
    <div class="oneDayHeader">
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
                        <?php foreach( $oneDayTours as $oneDayTour): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($oneDayTour); 
                        $post = get_post($oneDayTour->ID);
                        
                        if($count >= 3):
                        $count = 0;
                        $showControl = true;
                        ?>
                        </div><div class="item">
                        <?php endif;?>
                        <div class="subItem col-sm-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <h1 class="title t6 dark-green tour-name"><?php print_r($oneDayTour->post_title) ?></h1>
                                
                            </a>
                        </div>
                    <?php $count++; endforeach; // end of the loop. 
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
        <?php endif; ?>
        <!-- Vacation Package -->
        <?php if($packages): ?>
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
                        <?php foreach( $packages as $package): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($package); 
                        $post = get_post($package->ID);
                         
                        if($count >= 3):
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
                    <?php $count++; endforeach; // end of the loop. 
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
        <?php endif ?>
        <br><br>
        <div class="col-sm-12">
            <h1 class="title t4_3">MORE DESCRIPTION</h1>
            <div class="text t-paragraph text-justify"><?php echo $moreDescription ?></div>
        </div>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>