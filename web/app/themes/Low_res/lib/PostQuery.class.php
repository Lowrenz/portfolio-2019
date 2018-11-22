<?php

class PostQuery {

  function __construct() {
    add_action('pre_get_posts',array($this,'post_queries'));
  }

  function post_queries($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_search()) {
        $query->set('post_type', array('post', 'case'));
      }
    }
  }


}

$postquery = new PostQuery();

?>
