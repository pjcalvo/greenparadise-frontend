<?php 
/* ========================== Location Custom Fields ===============================*/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_location',
		'title' => 'Location',
		'fields' => array (
			array (
				'key' => 'field_550dc4e956f09',
				'label' => 'Latitud',
				'name' => 'latitud',
				'type' => 'text',
				'instructions' => 'Latitud para el GoogleMap 
	Ejemplo: 9.902042',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_550dc57056f0a',
				'label' => 'Longitud',
				'name' => 'longitud',
				'type' => 'text',
				'instructions' => 'Longitud para el GoogleMap 
	Ejemplo: -83.994452',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '105',
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
