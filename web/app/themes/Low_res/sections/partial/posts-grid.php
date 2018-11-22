<?php $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
<div class="post-grid <?php echo $extra ?>" id="grid-post-<?php echo $the_query->current_post?>">
  <div class="post-grid__background" style="background-image: url('<?php echo $post_thumb['0']; ?>')">
    <a class="post-grid__overlay" href="<?php the_permalink() ?>"></a>
  </div>
  <div class="post-grid__info">
    <div class="post-grid__published"><?php echo get_the_date(); ?></div>
    <h3 class="post-grid__title"> <a class="link link--white" href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h3>
    <div class="post-grid__tags">
      <?php
        $post_tags = get_the_tags();
        if ( $post_tags ) {
          foreach($post_tags as $tag){
            echo "<a href='/blog/?tag=$tag->slug' class='tag'>$tag->name</a>";
          }
        }?>
    </div>
    <div class="post-grid__read"> <a class="link link--white" href="<?php the_permalink() ?>"> <?php echo get_field('read').' '.__("min read"); ?></a></div>
  </div>
</div>