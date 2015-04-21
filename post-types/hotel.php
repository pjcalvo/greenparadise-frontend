<?php 
/* ==================================== Hotel =========================================*/

function hotel_post_type() {

	register_post_type( 'hotel',
					   array(
						   'labels' => array(
							   'name'               => 'Hotel',
							   'singular_name'      => 'Hotel',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Hotel',
							   'edit_item'          => 'Edit Hotel',
							   'new_item'           => 'New Hotel',
							   'all_items'          => 'All Hotels',
							   'view_item'          => 'View Hotel',
							   'search_items'       => 'Search Hotels',
							   'not_found'          => 'No hotel found',
							   'not_found_in_trash' => 'No hotel found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Hotel'
						   ),
                           'menu_icon' => 'dashicons-admin-home',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'hotel'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Hotel',
					   )
					  );
}

/**
 * Hotel Province taxonomy for Hotels post type.
 *
 */
function create_hotel_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => 'Province Category',
		'singular_name'     => 'Province Category',
		'search_items'      => 'Search Province Categories',
		'all_items'         => 'All Province Categorys',
		'parent_item'       => 'Parent Province Category',
		'parent_item_colon' => 'Parent Province Category:',
		'edit_item'         => 'Edit Province Category',
		'update_item'       => 'Update Province Category',
		'add_new_item'      => 'Add New Province Category',
		'new_item_name'     => 'New Province Category Name',
		'menu_name'         => 'Province Categories',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'hotel-province' ),
	);

	register_taxonomy( 'hotel_province', array( 'hotel' ), $args );
}

add_action( 'init', 'hotel_post_type' );
add_action( 'init', 'create_hotel_taxonomies', 0 );


function get_article_query($term_id) {
	$args = array(
		'hotel' => 'post',
		'tax_query' => array(
			array(
				'taxonomy' => 'hotel_province',
				'field' => 'term_id',
				'terms' => $term_id
			)
		)
	);
	return new WP_Query($args);
}

/* ============================== Hotel Custom Fields ===================================*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_hotel',
		'title' => 'Hotel',
		'fields' => array (	
			array (
				'key' => 'field_54h48e0cbed30',
				'label' => 'Price:',
				'name' => 'hotel_price',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotel',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'discussion',
				2 => 'comments',
				3 => 'author',
				4 => 'categories',
			),
		),
		'menu_order' => 0,
	));
}