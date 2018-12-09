<?php
/*
  Template Name: Section Portfolios
*/
$page_id = get_the_ID();

$args = array( 
  'orderby' => 'title',
  'order' => 'ASC',
  'post_type' => 'Portfolios'
  );

  $the_query = new WP_Query($args);

?>

<section id="work" class="section section--portfolios">
  <div class="neon-circle">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/work.svg" alt="Work / Portfolio section">
    <!-- <div class="line">&nbsp;</div> -->
  </div>
  <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="small-12 columns" data-aos="fade-up">
      <?php the_title( '<h2 class="title title--stripe banner__title">', '</h2>' );  ?>
      <?php the_content(); ?>
    </div>
    <?php endwhile; else: ?>
    <p>Sorry, there are no portfolio items to display</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
  </div>
</section>