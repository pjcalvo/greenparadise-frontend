<?php

add_action('wp_ajax_nopriv_get_featured_destinations', 'ajax_get_featured_destinations');
add_action('wp_ajax_get_featured_destinations', 'ajax_get_featured_destinations');


/******************************* Featured Destination Filter *******************************/

function ajax_get_featured_destinations() {
    $nonce = $_POST['nonce'];
    $categoryId =  $_POST['category_id'];

    if (!wp_verify_nonce($nonce,'myajax-post-comment-nonce')) {
        die(); 
    }

    $result = array();

    $args = array(
        'order'    => 'DESC',
        'post_status' => 'publish',
        'post_type' => array('destination'),
        'posts_per_page' => -1,
    );


    if($categoryId != -1){
        $args["tax_query"] = array(
            array(
                'taxonomy' => 'destination_category',
                'field' => 'id',
                'terms' => array($categoryId)
            )
        );
    }

    $query = new WP_Query($args);

    if ( $query->have_posts() ){
        while ( $query->have_posts() ){
            $query->the_post();

            $title = get_the_title();
            $price = get_field('destination_price');
            $description = get_field('destination_description');
            $thumbnail = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            $link = get_permalink();
            
            $item = array(
                'title' => $title,
                'price' => $price,
                'description' => $description,
                'thumbnail' => $thumbnail,
                'link' => $link,
            );

            array_push($result, $item);
        }

        wp_reset_postdata();
    }
    
    echo json_encode($result);
    exit;
}

?>