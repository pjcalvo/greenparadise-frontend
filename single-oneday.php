<?php
 global $wp_query;
 $wp_query->the_post();
?>

<div class="single">
    <div class="text-center singleHeader">
            <h1 class="title t4 text-center dark-green">ONE DAY <span> TOUR</span></h1>
            <p class="text t-paragraph text-center"><?php echo get_the_excerpt() ?></p>
    </div>
    <hr>
    <div class="content-medium">
        <div class="text-center">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
        </div>
        <div class="col-sm-12">
            <h1 class="title t4_1"><?php echo get_the_title() ?></h1>
            <p class"text t-paragraph"><?php echo get_the_content() ?></p>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-4">
                <h1 class="title t4_2 dark-green">AVALIABLE DATES:</h1>
                <br>
                <h1 class="title t5">AVALIABLE DATES:</h1>
                <p class="text t-paragraph">Del 16 al 19 de Abril</p>
                <p class="text t-paragraph">Del 16 al 19 de Abril</p>
                <p class="text t-paragraph">Del 16 al 19 de Abril</p>
            </div>
            <div class="col-sm-4">
                <h1 class="title t4_2 dark-green">PACKAGE DETAILS:</h1>
                <br>
                <h1 class="title t5">INCLUDES:</h1>
                <p class="text t-paragraph">Boletos aéreos</p>
                <p class="text t-paragraph">Vuelo directo </p>
                <p class="text t-paragraph">Traslados Hotel/Destino/Hotel</p>
            </div>
            <div class="col-sm-4">
                <h1 class="title t4_2 dark-green">PRICE:</h1>
                <br>
                </label>
                <h1 class="title t1_1 blue-cerulean"><span>$</span><?php echo get_field("oneday_price"); ?>
                    <sup class="t12">PER PERSON</sup>
                </h1>
                <button type="button" class="btn btn-green">BUY THIS TOUR</button>
            </div>
        </div>
        <div class="col-sm-12">
            <h1 class="title t4_3">MORE DESCRIPTION</h1>
            <div class="text t-paragraph text-justify"><?php echo the_field("description"); ?></div>
        </div>
    </div>
</div>
<?php get_template_part('templates/destinations', 'page'); ?>