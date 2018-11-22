<?php get_header();  ?>
  <?php $shareurl = urlencode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
  <?php if(have_posts()): while(have_posts()): the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  
?>

<section class="section section--empty">
</section>
<section class="section section--post-header">
  <div class="row">
    <div class="small-12 medium-5 align-self-center text-center ">
      <div class="post-header__image" style="background-image:url(<?php echo $thumb[0] ?>)"></div>
    </div>
    <div class="small-12 medium-7 columns post-header__content-container align-self-right">
      <div class="post-header__content ">
        <h1 class="post-header__content__title"><?php the_title(); ?></h1>
        <div class="row post-header__meta">
          <div class="small-6 medium-5 columns">
            <div class="post-header__published"><?php echo get_the_date(); ?></div>
          </div>
          <div class="small-6 medium-5 columns align-self-bottom ">
            <div class="post-header__read"><?php if(get_field('read')){echo get_field('read').' '.__("min read"); } ?></div>
          </div>
        </div>
        <div class="post-header__content__text"><?php the_field("intro"); ?></div>
      </div>
        
     <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
    </div>
  </div>
  
</section>

<section class="section section--post-detail">
  <div class="row post align-center">
    <div class="columns small-12 large-8">
      <div class="post__content"> <?php the_content(); ?></div>
    </div>
  </div>

  
</section>
<section class="section section--post-social">
  <div class="row align-center post__share">
    <div class="small-12 medium-8 large-6 columns">
      <h5 class="title title--stripe">Deel dit artikel</h5>
      <div class="row text-center">
        <div class="columns">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareurl ?>" class="link link--marker">Facebook</a>
        </div>
        <div class="columns">
          <a href="https://twitter.com/home?status=Mustread van @ContributeGroup - <?php the_title()?> - %20<?php echo $shareurl ?>"class="link link--marker">Twitter</a>  
        </div>
        <div class="columns">
          <a href="https://plus.google.com/share?url=<?php echo $shareurl ?>"class="link link--marker">Google</a>
        </div>
        <div class="columns">
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $shareurl ?>&title=<?php the_title()?>&summary=<?php the_field("intro"); ?>"class="link link--marker">LinkedIn</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--tag-filter ">
  
  <div class="row align-center tags">
    <div class="small-12 medium-8 large-6 columns">
      <div class="post-tags">
      <h3 class="title title--stripe">Zin om meer te lezen over: </h3>
        <?php
        $post_tags = get_the_tags();
        if ( $post_tags ) {
          foreach($post_tags as $tag){
            echo "<a href='/blog/?tag=$tag->slug' class='tag'>$tag->name</a>";
          }
        }?>
      </div>
    </div>  
  </div>
</section>
<section class="section section--readmore-posts">
<div class="row post__extra">
  <?php 
    $nextpost = get_next_post();
    $prevpost = get_previous_post();
  ?>   
  <div class="small-12 medium-6 columns relative">
  <?php if($nextpost): ?>
    <?php 
      $post = $nextpost;  setup_postdata( $post ); 
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
    <div class="next-post">
      <a href="<?php the_permalink();?>">
        <h6 class="title title--stripe next-post__next">Vorige</h6>
        <div class="next-post__background" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>
        <div class="post-grid__overlay"></div>
        <div class="next-post__info">
          <div class="next-post__published"><?php echo get_the_date(); ?></div>
          <h3 class="next-post__title"> <?php the_title(); ?></h3>
          <div class="next-post__tags">
            <?php $post_tags = get_the_tags();
            if ( $post_tags ) {
              foreach($post_tags as $tag){
                echo "<span href='/blog/?tag=$tag->name' class='tag'>$tag->name</span>";
              }
            }?>
          </div>
          <div class="next-post__read"> <?php echo get_field('read').' '.__("min read"); ?></div>
        </div>
      </a>
    </div>
   <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  </div>
  <div class="small-12 medium-6 columns relative">
  <?php if($prevpost): ?>
    
    <?php 
      $post = $prevpost;  setup_postdata( $post ); 
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
    <div class="prev-post">
      <a href="<?php the_permalink();?>">
        <h6 class="title title--stripe prev-post__prev text-right">Volgende</h6>
        <div class="prev-post__background" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>
        <div class="post-grid__overlay"></div>
        <div class="prev-post__info">
          <div class="prev-post__published"><?php echo get_the_date(); ?></div>
          <h3 class="prev-post__title"> <?php the_title(); ?></h3>
          <div class="prev-post__tags">
            <?php $post_tags = get_the_tags();
            if ( $post_tags ) {
              foreach($post_tags as $tag){
                echo "<span href='/blog/?tag=$tag->name' class='tag'>$tag->name</span>";
              }
            }?>
          </div>
          <div class="prev-post__read"> <?php echo get_field('read').' '.__("min read"); ?></div>
        </div>
      </a>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  </div>
</div>
  <div class="row back-to-overview">
    <div class="small-12 medium-6 columns text-center">
      <a class="link link--marker bigger " href="/blog">Overzicht blogpost</a>
    </div>
    <div class="small-12 medium-6 columns text-center">
      <a class="link link--marker bigger " href="/">Onze aanpak</a>
    </div>
  </div>
</section>


  <?php endwhile; endif; ?>

<?php get_footer();  ?>

