<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_services',
		'title' => 'Services',
		'fields' => array (
			array (
				'key' => 'field_550e3c9b3dbd6',
				'label' => 'One Day Tour Excerpt',
				'name' => 'one_day_tour_excerpt',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_550e3d593dbd7',
				'label' => 'Vacation Package Excerpt',
				'name' => 'vacation_package_excerpt',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '108',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'author',
				6 => 'format',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
