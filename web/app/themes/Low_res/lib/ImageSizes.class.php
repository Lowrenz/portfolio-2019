<?php

class ImageSizes {

  function __construct() {
    add_image_size( 'landscape-teaser', 400, 250, true );
    add_image_size( 'portrait-teaser', 250, 400, true );
    add_filter( 'image_size_names_choose', array($this,'custom_sizes') );
  }
  
  function custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
    'landscape-teaser' => __( 'Post Teaser' ),
    'portrait-teaser' => __( 'Testimonial Portret' ),
    ) );
  }

}

$imageSizes = new ImageSizes();

?>