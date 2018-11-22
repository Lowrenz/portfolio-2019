<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_case-fields',
		'title' => 'Case fields',
		'fields' => array (
			array (
				'key' => 'field_58ca7f6a42c66',
				'label' => 'intro',
				'name' => 'intro',
				'type' => 'textarea',
				'instructions' => 'the intro text to be shown at the top of the detail page of the case',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'case',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
