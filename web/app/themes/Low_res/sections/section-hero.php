<?php
/*
  Template Name: Section Hero
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>

<section id="home" class="section section--hero fullpage" data-aos="fade-up" data-aos-duration="1500">
  <div class="hero-background" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>
  <div class="row">
    <div class="column algin-self-middle align-center">
      <div class="row">
        <div class="small-12 columns">
          <div class="logo-wrapper">
            <img class="site-logo pulsate-fwd" src="<?php echo get_template_directory_uri(); ?>/dist/img/lowres-logo.svg">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <div class="hero-content">
            <h2 class="alien align-self-center text-center">
              <?php the_content(); ?>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>'); ?>
</section>