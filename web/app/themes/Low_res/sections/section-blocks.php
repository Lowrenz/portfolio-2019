<?php
/*
  Template Name: Section Blocks
*/
$page_id = get_the_ID();

$args = array( 
  'orderby' => 'title',
  'order' => 'ASC',
  'post_type' => 'Blocks'
  );

  $the_query = new WP_Query($args);

?>

  <section id="about" class="section section--blocks">
    <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="small-12 columns pink-bg box-shadow box" data-aos="fade-up">
        <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; else: ?> <p>Sorry, there are no blocks to display</p> <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
    </div>
  </section>