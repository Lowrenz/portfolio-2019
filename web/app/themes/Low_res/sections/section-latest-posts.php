<?php
/*
Template Name: Section Latest Posts
*/
$page_id = get_the_ID();
$post_type = get_field("post_type");
$posts_per_page = get_field("posts_per_page");
$args = array(
'posts_per_page' => $posts_per_page,
'post_type' => $post_type,
'orderby' => 'most_recent'
);
$the_query = new WP_Query( $args );
$filter = new Filters();
?>
<section class="section section--latest-posts">
  <div class="row">
    <div class="small-12 text-center">
      <h2 class="title title--stripe">#CTBGblogt.</h2>
    </div>

  </div>
  <div class="row medium-unstack align-center">
    <?php if ( have_posts()) { while ( $the_query->have_posts() ){
    $the_query->the_post();
    $content = $filter->teaserContent(get_the_content(),100);
    if(get_the_excerpt()){
    $content = get_the_excerpt();
    }
    ?>
    
    <div class="medium-4 columns post-teaser">
     <div class="post-teaser__wrapper">
    <a class="post-teaser__overlay" href="<?php the_permalink() ?>"> </a>
      <div class="post-teaser__image">
        <a class="link" href="<?php the_permalink() ?>"> <?php the_post_thumbnail('landscape-teaser'); ?> </a>
      </div>
      <div class="post-teaser__data">
        <div class="post-teaser__published"><?php echo get_the_date(); ?></div>
        <h3 class="post-teaser__title"> <a class="link" href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h3>
        <div class="post-teaser__tags">
          <?php
          $post_tags = get_the_tags();
          if ( $post_tags ) {
          foreach($post_tags as $tag){
          echo "<a href='/blog/?tag=$tag->slug' class='tag'>$tag->name</a>";
          }
          }?>
        </div>
        <div class="post-teaser__excerpt"><a class="link" href="<?php the_permalink() ?>"> <?php echo $content= $filter->teaserContent(get_the_excerpt(),450); ?></a></div>
        <div class="post-teaser__read"> <a class="link link--grey" href="<?php the_permalink() ?>"> <?php echo get_field('read').' '.__("min read"); ?></a></div>
        
      </div>
      </div>
    </div>
    <?php }} wp_reset_postdata(); ?>
    
    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
  </div>
</section>