<?php

class Widgets {

  function __construct() {
    add_action( 'widgets_init', array($this,'menuwidget_widgets_init') );
  }
  function menuwidget_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Menu Sidebar', 'menuwidget' ),
        'id' => 'menu-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
  }

}

$widgets = new Widgets();

?>
