<?php
  while ( $the_query->have_posts() ) : 
    
    $the_query->the_post(); // run the loop
    $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); 
?>
  <section class="section section--post">
    <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
    <?php if ($post_number%2 == 0): ?>
    <div class="row section--post__item section--post__item__even ">
      <div class="small-order-1 medium-order-2 section--post__image medium-6 columns" style="background-image: url('<?php echo $post_thumb['0']; ?>')"></div>
      <div class="small-order-2 medium-order-1 small-12 medium-6 large-5 section--post__item__container large-offset-1 columns">
        <h1 class="section--post__title title title--stripe"><?php echo the_title(); ?></h1>
        <div class="section--post__excerpt"><?php the_excerpt(); ?></div>
        <div class="section--post__cta text-right">
          <a class=" link link--marker" href="<?php the_permalink(); ?>"><?php echo __("ontdek de case"); ?></a>
        </div>
      </div>
    </div>
    
    <?php else : ?>
    <div class="row section--post__item section--post__item__odd" >
      <div class="section--post__image medium-6 columns" style="background-image: url('<?php echo $post_thumb['0']; ?>')"></div>
      <div class="small-12 medium-6 large-5 section--post__item__container large-offset-6 columns">
        <h1 class="section--post__title title title--stripe"><?php echo the_title(); ?></h1>
        <div class="section--post__excerpt"><?php the_excerpt(); ?></div>
        <div class="section--post__cta text-right">
          <a class=" link link--marker" href="<?php the_permalink(); ?>"><?php echo __("ontdek de case"); ?></a>
        </div>
        
      </div>
    </div>
    
    <?php endif;
    $post_number++;
    ?>
  </section>
<?php endwhile; ?>