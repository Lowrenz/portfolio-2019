<?php
/*
  Template Name: Template Sectional
*/

get_header();

$parent_ID = get_the_id();

$args = array(
	'post_parent' => $parent_ID,
	'post_type'   => 'page',
	'post_status' => 'publish'
);

$children = get_children($args);

$page_includes = array();

if($children) {
  foreach($children as $child) {
    $page_includes[] = $child->ID;
  }
} else {
  //no children found, do nothing
}

$args = array(
  'post_type' => 'page',
  'post_status' => 'publish',
  'post__in' => $page_includes,
  'posts_per_page' => count($page_includes),
  'orderby' => 'menu_order',
  'order' => 'ASC'
);

$q = new WP_Query($args);

if($q->have_posts())
{
  while($q->have_posts())
  {
    $q->the_post();
    $template = preg_replace("/(.+)\.php$/", "$1", get_page_template_slug(get_the_id()));
    get_template_part($template);
  }
}

get_footer();

?>
