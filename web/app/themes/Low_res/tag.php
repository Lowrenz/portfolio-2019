<?php get_header();  ?>
<?php 

global $wp_query;
$args = array_merge( $wp_query->query, array( 'post_type' => array('post','case' )) );
query_posts( $args );
?>
<section class="section section--hero">
  <div class="hero-background" style="background-image: url('https://unsplash.it/1800/600')">
  </div>
  <div class="hero-content hero-content--left">
    <h1><?php single_tag_title(); ?></h1>
  </div>
  
</section>
<section class="section section--posts">
  <div class="row section--post__item">
<?php
if ( have_posts() ) : 
  while ( have_posts() ) :  the_post();
  $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); 
?>
      <div class="small-12 medium-6 columns post" style="background-image: url('<?php echo $post_thumb['0']; ?>')" >
        <div class="post__container"  >
          <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
          <h1 class="post__title"><?php echo the_title(); ?></h1>
          <div class="post__excerpt"><?php the_excerpt(); ?></div>
          <a class="post__cta link link--white" href="<?php the_permalink(); ?>"><?php echo __("read more"); ?></a>
        </div>
        <div class="section--post__overlay"></div>
      </div>
<?php
  endwhile;
  wp_reset_query(); ?>
    
  </div>
</section>
<?php else :?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();  ?>