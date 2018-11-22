<?php
/*
  Template Name: Section Blog Header
*/
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>

<section class="section section--blog-header">
 
  <div class="row">
    <div class="small-12  medium-5 align-self-center text-center align-self-middle ">
      <h2 class="blog-header__title"><?php echo the_title() ?></h2>
    </div>
    <div class="small-12 medium-7 columns blog-header__content-container align-self-right">
      <div class=" blog-header__content ">
        <?php the_content(); ?>
      </div>
        
     <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
    </div>
  </div>
  
</section>
