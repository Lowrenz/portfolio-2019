<?php
/*
  Template Name: Section Contact Form
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section id="contact" class="section section--contact-form" data-aos="fade-up">
  <div class="neon-circle">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/contact.svg" alt="Contact section">
    <!-- <div class="line">&nbsp;</div> -->
  </div>
  <div class="row">
    <div class="small-12 columns">
      <h2 class="alien">
        <?php the_title(); ?>
      </h2>
      <?php
            the_content();
      ?>
    </div>
    <div class="small-12 medium-5 large-5 large-offset-1 columns contact-info hide-for-small-only">
      <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>'); ?>
    </div>
  </div>

</section>