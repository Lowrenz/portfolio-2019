<?php

class assetLoader {

  function __construct() {
    //include CSS files
    add_action( 'wp_enqueue_scripts', array($this, 'include_CSS'));
    //include JS files
    add_action( 'wp_enqueue_scripts', array($this, 'include_JS'));
  }

  function include_CSS() {

    $path = '/dist/css/';

    //load includes
    wp_enqueue_style('carousel-css', get_template_directory_uri() . "/bower_components/owl.carousel/dist/assets/owl.carousel.min.css");
    wp_enqueue_style('include-css', get_template_directory_uri() . $path . "config.css");
    
  }

  function include_JS() {

    $path = '/dist/js/';

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

    //vendor specific javascripts
    wp_enqueue_script('vendor', get_template_directory_uri() . $path . "plugins.min.js", false, '1.0', true);

    //load main file in footer
    wp_enqueue_script('main', get_template_directory_uri() . $path . "app.min.js", false, '1.0', true);

  }

}

$assetLoader = new assetLoader();

?>