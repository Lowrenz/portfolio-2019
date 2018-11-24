<?php
/*
  Template Name: Section Hero
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>

<section id="home" class="section section--hero">
  <div class="hero-background" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>
  <div class="hero-content">
      <?php
      the_content();
      ?>
   <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>'); ?>
  </div>
</section>
