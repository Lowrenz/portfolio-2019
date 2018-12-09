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
  <div class="neon-circle" data-aos="fade-up">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/services.svg" alt="Services section">
    <!-- <div class="line">&nbsp;</div> -->
  </div>
  <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="small-12 columns pink-after box" data-category="<?php the_field('category'); ?>" data-aos="fade-up">
      <span class="hidden">
        <?php the_title();  ?></span>
      <span class="material-icons white text-shadow big">
        <?php the_field('icon'); ?></span>
      <p>
        <?php the_content(); ?>
      </p>
    </div>
    <?php endwhile; else: ?>
    <p>Sorry, there are no grouped blocks to display</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
  </div>
</section>