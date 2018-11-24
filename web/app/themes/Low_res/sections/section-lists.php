<?php
/*
  Template Name: Section Lists
*/
$page_id = get_the_ID();

$args = array( 
  'orderby' => 'title',
  'order' => 'ASC',
  'post_type' => 'lists'
  );

  $the_query = new WP_Query($args);

?>

  <section id="lists" class="section section--lists">
    <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="small-12 columns">
        <?php the_title( '<h2 class="title title--stripe banner__title">', '</h2>' );  ?>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?> <p>Sorry, there are no lists to display</p> <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
    </div>
  </section>