<?php 
/* ==================================== Vacation Package =========================================*/

function custom_post_type() {

	register_post_type( 'vacationPackage',
					   array(
						   'labels' => array(
							   'name'               => 'Vacation Package',
							   'singular_name'      => 'Package',
							   'add_new'            => 'Add New',
							   'add_new_item'       => 'Add New Package',
							   'edit_item'          => 'Edit Package',
							   'new_item'           => 'New Package',
							   'all_items'          => 'All Packages',
							   'view_item'          => 'View Package',
							   'search_items'       => 'Search Packages',
							   'not_found'          => 'No packages found',
							   'not_found_in_trash' => 'No packages found in Trash',
							   'parent_item_colon'  => '',
							   'menu_name'          => 'Packages'
						   ),
                           'menu_icon' => 'dashicons-palmtree',
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'vacation-package'),
						   'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments' ),
						   'add_new' => 'Add Package',
					   )
					  );
}

add_action( 'init', 'custom_post_type' );

/* ============================ Vacation Package Custome Field =================================*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_vacation-packages',
		'title' => 'Vacation Packages',
		'fields' => array (
			array (
				'key' => 'field_54c480c762fea',
				'label' => 'Price from:',
				'name' => 'price_from',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '$',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c4816d62feb',
				'label' => 'Number of nights:',
				'name' => 'number_nights',
				'type' => 'number',
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '-4',
				'max' => '',
				'step' => '',
			),
            array (
				'key' => 'field_55172d174cfa7',
				'label' => 'Hotels',
				'name' => 'vacation_hotels',
				'type' => 'relationship',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'hotel',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => '',
			),
			array (
				'key' => 'field_54c481b562fec',
				'label' => 'Includes:',
				'name' => 'includes',
				'type' => 'wp_wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'vacationpackage',
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
				3 => 'revisions',
				4 => 'author',
				5 => 'categories',
			),
		),
		'menu_order' => 0,
	));
}
