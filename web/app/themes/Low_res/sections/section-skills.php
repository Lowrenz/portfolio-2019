<?php
/*
  Template Name: Section Skills
*/
$page_id = get_the_ID();

$args = array( 
  'orderby' => 'title',
  'order' => 'ASC',
  'post_type' => 'skills'
  );

  $the_query = new WP_Query($args);

?>
<section id="skills" class="section section--skills">
  <div class="neon-circle" data-aos="fade-up">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/skills.svg" alt="Skills section">
    <!-- <div class="line">&nbsp;</div> -->
  </div>
  <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="small-12 medium-6 xxlarge-3 columns chart-item" data-aos="fade-up">
      <div class="title-area">
        <h3 class="text-center align-center">
          <?php the_title();  ?>
        </h3>
      </div>
      <figure class="chart chart-<?php the_field('chart'); ?>">
        <svg role="img" xmlns="http://www.w3.org/2000/svg">
          <title>
            <?php the_title();  ?>
          </title>
          <desc>
            <?php the_content();  ?>
          </desc>
          <circle class="circle-background" />
          <circle class="circle-foreground" />
        </svg>
        <figcaption>
          <?php the_field('procent'); ?>% on
          <?php the_title();  ?>
        </figcaption>
    </div>
    <?php endwhile; else: ?>
    <p>Sorry, there are no skills to display</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
  </div>
</section>