<?php

class Blocks {
  function __construct(){
        add_action( 'init', array($this,'Blocks_post_type'), 0 );
  }
  // Register Custom Post Type
  function Blocks_post_type() {

      $labels = array(
          'name'                  => _x( 'Blocks', 'Post Type General Name', 'text_domain' ),
          'singular_name'         => _x( 'Block', 'Post Type Singular Name', 'text_domain' ),
          'menu_name'             => __( 'Blocks', 'text_domain' ),
          'name_admin_bar'        => __( 'Blocks', 'text_domain' ),
          'archives'              => __( 'Item Archives', 'text_domain' ),
          'attributes'            => __( 'Item Attributes', 'text_domain' ),
          'parent_item_colon'     => __( 'Parent Blocks:', 'text_domain' ),
          'all_items'             => __( 'All Blocks', 'text_domain' ),
          'add_new_item'          => __( 'Add New Block', 'text_domain' ),
          'add_new'               => __( 'New Block', 'text_domain' ),
          'new_item'              => __( 'New Item', 'text_domain' ),
          'edit_item'             => __( 'Edit Block', 'text_domain' ),
          'update_item'           => __( 'Update Block', 'text_domain' ),
          'view_item'             => __( 'View Blocks', 'text_domain' ),
          'view_items'            => __( 'View Items', 'text_domain' ),
          'search_items'          => __( 'Search Blocks', 'text_domain' ),
          'not_found'             => __( 'No Blocks found', 'text_domain' ),
          'not_found_in_trash'    => __( 'No Blocks found in Trash', 'text_domain' ),
          'featured_image'        => __( 'Featured Image', 'text_domain' ),
          'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
          'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
          'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
          'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
          'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
          'items_list'            => __( 'Items list', 'text_domain' ),
          'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
          'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
      $args = array(
          'label'                 => __( 'Blocks', 'text_domain' ),
          'description'           => __( 'Blocks information pages.', 'text_domain' ),
          'labels'                => $labels,
          'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
          'taxonomies'            => array( 'post_tag' ),
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 5,
          'menu_icon'             => 'dashicons-networking',
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,		
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          'capability_type'       => 'page',
      );
      register_post_type( 'Blocks', $args );

  }

}
$Blocks_post_type = new Blocks();
?>