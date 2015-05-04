<?php
$args = array( 'post_type' => 'OneDay', 'posts_per_page' => -1);
$loop = new WP_Query( $args );

$vacationArgs = array( 'post_type' => 'vacationPackage', 'posts_per_page' => -1);
$vacationLoop = new WP_Query( $vacationArgs );

$moreServicesArgs = array( 'post_type' => 'otherService', 'posts_per_page' => -1);
$moreServicesLoop = new WP_Query( $moreServicesArgs );


?>

<div class="container ourServicesSection" id="ourServices">
    <div class="content content-medium center">
        <div class="center ourServicesHeader">
            <h1 class="title t2 dark-green center">OUR <span class="pine-cone">SERVICES</span></h1>
            <p class="resume text-center pine-cone"></p>
        </div>
        <!--One Day Content-->
        <div class="oneDayContent">
            <div class="col-sm-3">
                <h1 class="title t4 dark-green">ONE DAY <span class="green">TOURS</span></h1>
                <p class="one-resume"></p>
            </div>
            <!-- Wrapper for slides -->
            <div id="carousel-oneDay" class="row col-sm-9 carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $count = 0 ?>
                    <div class="item active">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                         
                        if($count >= 3):
                        $count = 0;
                        ?>
                        </div><div class="item">
                        <?php endif;?>
                        <div class="col-sm-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <h1 class="title t5 black tour-name"><?php the_title() ?></h1>
                                <p class="text img-sumary dark-green"><?php echo get_the_excerpt() ?></p>
                            </a>
                        </div>
                    <?php $count++; endwhile; // end of the loop. 
                    ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-oneDay" role="button" data-slide="prev"><span>‹</span></a>
                    <a class="right carousel-control" href="#carousel-oneDay" role="button" data-slide="next"><span >›</span></a>
                </div> <!-- Carousel -->
            </div>
        </div>
        
        <!--Vacation Content-->
        <div class="vacationPackContent">
            <div class="col-sm-3">
                <h1 class="title t4 blue-cerulean">VACATION <span class="blue-cerulean">PACKAGES</span></h1>
            </div>
            <!-- Wrapper for slides -->
            <div id="carousel-vacations" class="row col-sm-9 carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $count = 0 ?>
                    <div class="item active">
                        <?php while ( $vacationLoop->have_posts() ) : $vacationLoop->the_post(); 
                        
                        if($count >= 3):
                        $count = 0;
                        ?>
                        </div><div class="item">
                        <?php endif;?>    
                        <div class="col-sm-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="imgServCarousel" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
                                <h1 class="title t5 black"><?php the_title() ?></h1>
                                <p class="text img-sumary dark-green"><?php echo get_the_excerpt() ?></p>
                            </a>
                        </div>
                    <?php $count++;  endwhile; // end of the loop. 
                    ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-vacations" role="button" data-slide="prev"><span>‹</span></a>
                    <a class="right carousel-control" href="#carousel-vacations" role="button" data-slide="next"><span >›</span></a>
                </div> <!-- Carousel -->
            </div>
        </div>  
            </div>
        </div>
    </div>
</div>