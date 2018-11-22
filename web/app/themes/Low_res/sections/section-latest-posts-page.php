<?php
/*
  Template Name: Section Latest Posts Fullscreen
*/
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$page_id = get_the_ID();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'full' );
$post_type = get_field("post_type");
$template = get_field("post_style");
$posts_per_page = get_field("posts_per_page");
$post_number = 0;
 $args = array(
      'posts_per_page' => $posts_per_page,
      'post_type' => $post_type,
      'orderby' => 'most_recent',
      'paged' => $paged
    );

  $the_query = new WP_Query( $args );
?>
<section class="section section--hero">
  <div class="hero-background" style="background-image: url('<?php echo $thumb['0']; ?>')">
  </div>
  <div class="hero-content hero-content--left">
      <?php
      the_content();
      ?>
    <?php if(current_user_can('administrator')) edit_post_link('edit page', '<p>', '</p>'); ?>
  </div>
  
</section>
<?php if ( $the_query->have_posts() ) : 
  
  include(locate_template("sections/partial/posts-".$template."column.php"));
  
  if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts row">
    
    <div class="next-posts-link medium-6 columns">
      <?php echo get_previous_posts_link( 'Vorige cases' ); // display newer posts link ?>
    </div>
    <div class="prev-posts-link medium-6 columns text-right">
      <?php echo get_next_posts_link( 'Volgende cases', $the_query->max_num_pages ); // display older posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>

