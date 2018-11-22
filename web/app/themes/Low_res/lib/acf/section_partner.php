<?php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_section-partners',
		'title' => 'Section Partners',
		'fields' => array (
			array (
				'key' => 'field_58c661bd601e7',
				'label' => 'Partner',
				'name' => 'partner',
				'type' => 'post_object',
				'required' => 1,
				'post_type' => array (
					0 => 'partner',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 1,
			),
			array (
				'key' => 'field_597861382b260',
				'label' => 'link',
				'name' => 'link',
				'type' => 'text',
				'instructions' => 'add a link to the bottom of your partner sections
	eq: https://www.google.com 
	
	',
				'default_value' => '',
				'placeholder' => 'http://www.google.com',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_597861902b261',
				'label' => 'link text',
				'name' => 'link_text',
				'type' => 'text',
				'instructions' => 'the text shown for the link you provived',
				'default_value' => '',
				'placeholder' => 'link',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'sections/section-partners.php',
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
