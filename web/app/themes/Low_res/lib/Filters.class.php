<?php

class Filters {

  function __construct() {
    //Toggle Maintenance Mode
    //add_action('get_header', array($this, 'wp_maintenance_mode'));
  }

  function wp_maintenance_mode(){
    if(!current_user_can('edit_themes') || !is_user_logged_in()){
      wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance. We                 will be back on-line shortly!');
    }
  }
  
  function teaserContent($content, $length){
    // Take the existing content and return a subset of it
    return substr($content, 0, $length) . "...";
  }
  
}

$filters = new Filters();

