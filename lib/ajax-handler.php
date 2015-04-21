<?php

add_action('wp_ajax_nopriv_get_featured_destinations', 'ajax_get_featured_destinations');
add_action('wp_ajax_get_featured_destinations', 'ajax_get_featured_destinations');


add_action('wp_ajax_nopriv_get_map_location', 'ajax_get_map_location');
add_action('wp_ajax_get_map_location', 'ajax_get_map_location');

add_action('wp_ajax_nopriv_get_featured_hotels', 'ajax_get_featured_hotels');
add_action('wp_ajax_get_featured_hotels', 'ajax_get_featured_hotels');

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
            $description = substr(get_field('destination_description'),0,110) . '...';
            $thumbnail = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            $link = get_permalink();
            
            $item = array(
                'title' => $title,
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
};

/******************************* Location Map *******************************/

function ajax_get_map_location() {
    $nonce = $_POST['nonce'];

    if (!wp_verify_nonce($nonce,'myajax-post-comment-nonce')) {
        die(); 
    }
    
    $result = array();

    $args = $args = array(
        'post_type' => 'page',//it is a Page right?
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'template-contactUs.php', // template name as stored in the dB
            )
        )
    );

    $query = new WP_Query($args);

    if ( $query->have_posts() ){
        while ( $query->have_posts() ){
            $query->the_post();

            $latitude = get_field('latitud');
            $longitude = get_field('longitud');
            
            $item = array(
                'latitud' => $latitude,
                'longitud' => $longitude,
            );

            array_push($result, $item);
        }

        wp_reset_postdata();
    }
    
    echo json_encode($result);
    exit;
}

/******************************* Featured Hotels Filter *******************************/

function ajax_get_featured_hotels() {
    $nonce = $_POST['nonce'];
    $categoryId =  $_POST['category_id'];

    if (!wp_verify_nonce($nonce,'myajax-post-comment-nonce')) {
        die(); 
    }

    $result = array();

    $args = array(
        'order'    => 'DESC',
        'post_status' => 'publish',
        'post_type' => array('hotel'),
        'posts_per_page' => -1,
    );


    if($categoryId != -1){
        $args["tax_query"] = array(
            array(
                'taxonomy' => 'hotel_province',
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
            $permalink = get_permalink();
            $thumbnail = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            
            $item = array(
                'title' => $title,
                'thumbnail' => $thumbnail,
                'permalink' => $permalink
            );

            array_push($result, $item);
        }

        wp_reset_postdata();
    }
    
    echo json_encode($result);
    exit;
};

?>