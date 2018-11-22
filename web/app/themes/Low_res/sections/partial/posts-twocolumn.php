<section class="section section--post">
  <div class="row section--post__item">
<?php
  while ( $the_query->have_posts() ) : 
    
    $the_query->the_post(); // run the loop
    $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); 
?>
      <div class="small-12 medium-6 columns" style="background-image: url('<?php echo $post_thumb['0']; ?>')" >
        <div class="section--post__container"  >
          <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
          <h1 class="section--post__title"><?php echo the_title(); ?></h1>
          <div class="section--post__excerpt"><?php the_excerpt(); ?></div>
          <a class="section--post__cta link" href="<?php the_permalink(); ?>"><?php echo __("read more"); ?></a>
        </div>
        <div class="section--post__overlay"></div>
      </div>
  
<?php endwhile; ?>
  </div>
</section>