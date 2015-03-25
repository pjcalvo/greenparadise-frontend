<?php
$args = array( 'post_type' => 'ourTeam', 'posts_per_page' => -1);
$loop = new WP_Query( $args );
?>
<div class="content ourTeam">
    <div class="ourTeam-content content-medium white">
        <h1 class="title t2 white text-center">OUR <span class="white"> TEAM</span></h1>
        <p class="text t-paragraph"></p>
        <div class="team-content col-sm-12">
            <?php 
                $count = 0;
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $count++; 
                    if($count >= 4){
                        break;
                    }
                    else{
            ?>
            <div class="col-sm-4">
                <img src="" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>')">
                <h1 class="title t5 text-center"><?php the_title(); ?></h1>
                <p class="text t-paragraph text-center"><?php echo get_the_content(); ?></p>
            </div>
            <?php } endwhile; ?>
        </div>
    </div>
</div>