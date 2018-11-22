<?php
/*
  Template Name: Section Contact Form
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section class="section section--contact-form">
  <div class="row">
    <div class="small-12 medium-6 large-5 large-offset-1 columns">
      <div class="row">
        <?php the_title(); ?>
      </div>
      <div class="row">
        <?php
            the_content();
      ?>
      </div>
    </div>
    <div class="small-12 medium-5 large-5 large-offset-1 columns contact-info hide-for-small-only">
      <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
    </div>
  </div>

</section>