<?php
/*
  Template Name: Section Skills
*/
$page_id = get_the_ID();
?>

  <section class="section section--skills">
    <div class="row">
      <div class="small-12 columns">
        <?php the_title( '<h2 class="title title--stripe banner__title">', '</h2>' );  ?>
        <?php the_field('procent'); ?>
        <?php the_content(); ?>
      </div>
      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
    </div>
  </section>