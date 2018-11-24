<?php
/*
  Template Name: Section Contact Form
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section class="section section--contact-form" data-aos="fade-up">
  <div class="row">
    <div class="small-12 columns">
      <div class="row">
        <h2 class="alien">
          <?php the_title(); ?>
        </h2>
      </div>
      <div class="row">
      <?php
            the_content();
      ?>
      </div>
    </div>
    <div class="small-12 medium-5 large-5 large-offset-1 columns contact-info hide-for-small-only">
      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>'); ?>
    </div>
  </div>

</section>