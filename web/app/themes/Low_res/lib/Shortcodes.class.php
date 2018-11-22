<?php

class Shortcodes {

  function __construct() {
    add_shortcode('shortcode-wp-trigger-name', array($this, 'shortcode_function_name'));
    add_shortcode( 'columns', array($this,'columns_shortcode'));
  }

  // [COLUMNS][/COLUMNS]
  function columns_shortcode( $atts , $content = null ) {
      // Attributes
    $atts = shortcode_atts(
          array(
              'amount' => '',
          ),
          $atts
      );
    // get all images and ignore other content
    preg_match_all('/(<img .*>)/iU', $content, $matches);
    $images = $matches[0];
    $imageContent = "";
    foreach($images as $image){
      //create a column for each image
      $imageContent .= '<div class="columns medium-3 small-12 medium-expand text-center">'.$image.'</div>';
    }
      //return a row with columns of images
      return '<div class="row align-center">' . $imageContent . '</div>';
  }

  function shortcode_function_name($atts) {
    extract(shortcode_atts(array(
      'shortcode_attr' => "",
    ), $atts));

    return '<a class="'. $class .' item" href="'. $imgurl .'"><img src="'. $imgurl .'" alt="'. $imgtitle .'"/></a>';
  }

}


$shortcodes = new Shortcodes();


?>
