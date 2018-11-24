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

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="row list-item" data-aos="fade-up">
    <div class="small-3 columns align-self-middle">
      <span class="material-icons pink big">done</span>
    </div>
    <div class="small-9 columns align-self-middle list-text">
      <p>
        <?php the_title();  ?>
      </p>
    </div>
  </div>
  <?php endwhile; else: ?>
  <p>Sorry, there are no lists to display</p>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>

</section>