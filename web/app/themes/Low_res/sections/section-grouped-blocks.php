<?php
/*
  Template Name: Section Grouped Blocks
*/
$page_id = get_the_ID();

$args = array( 
  'orderby' => '[category, title]',
  'order' => 'ASC',
  'post_type' => 'GroupedBlocks'
  );

  $the_query = new WP_Query($args);

?>

  <section id="services" class="section section--grouped-blocks">
    <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="small-12 columns">
        <?php the_title( '<h2 class="title title--stripe banner__title">', '</h2>' );  ?>
        <?php the_field('icon'); ?>
        <?php the_field('category'); ?>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?> <p>Sorry, there are no grouped blocks to display</p> <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
    </div>
  </section>