<?php get_header();  ?>
<?php $shareurl = urlencode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
<?php if(have_posts()): while(have_posts()): the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  
?>

<section class="section section--post-header section--job-listing-detail">
  <div class="row">
    <div class="small-12 columns">
      <div class="grey-bg">
        <div class="row">
          <div class="small-12 medium-7 columns">
            <div class="post-header__content ">
              <h1 class="post-header__content__title">
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
          <div class="small-6 medium-5 columns">
            <div class="row post-header__meta">
              <div class="post-header__published">
                <?php echo get_the_date(); ?>
              </div>
            </div>
          </div>
          <?php if(current_user_can('administrator')) edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <div class="post-header__content__text">
              <?php the_field("intro"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--post-detail section--job-listing-detail">
  <div class="row post align-center">
    <div class="columns small-12 large-8">
      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>


</section>
<section class="section section--post-social section--job-listing-detail">
  <div class="row align-center post__share">
    <div class="small-12 medium-8 large-6 columns">
      <h5 class="title title--stripe">Deel deze job</h5>
      <div class="row text-center">
        <div class="columns small-12 medium-3 mob-top">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareurl ?>" class="link link--marker">Facebook</a>
        </div>
        <div class="columns small-12 medium-3 mob-top">
          <a href="https://twitter.com/home?status=Mustread van @ContributeGroup - <?php the_title()?> - %20<?php echo $shareurl ?>"
            class="link link--marker">Twitter</a>
        </div>
        <div class="columns small-12 medium-3 mob-top">
          <a href="https://plus.google.com/share?url=<?php echo $shareurl ?>" class="link link--marker">Google</a>
        </div>
        <div class="columns small-12 medium-3 mob-top">
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $shareurl ?>&title=<?php the_title()?>&summary=<?php the_field("
            intro "); ?>"class="link link--marker">LinkedIn</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section--readmore-posts section--job-listing-detail">
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
        <a class="row" href="<?php the_permalink();?>">
          <div class="next-post__info small-12 large-8 columns small-order-2 large-order-2">
            <div class="next-post__published">
              <?php echo get_the_date(); ?>
            </div>
            <h3 class="next-post__title">
              <?php the_title(); ?>
            </h3>
          </div>
          <h6 class="title title--stripe next-post__next small-12 large-4 columns align-self-top small-order-1 large-order-1">Vorige</h6>
        </a>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <div class="small-12 medium-6 columns relative mob-top">
      <?php if($prevpost): ?>

      <?php 
      $post = $prevpost;  setup_postdata( $post ); 
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
      <div class="prev-post">
        <a class="row" href="<?php the_permalink();?>">
          <div class="prev-post__info small-12 large-8 columns small-order-2 large-order-1">
            <div class="prev-post__published">
              <?php echo get_the_date(); ?>
            </div>
            <h3 class="prev-post__title">
              <?php the_title(); ?>
            </h3>
          </div>
          <h6 class="title title--stripe prev-post__prev text-right small-12 large-4 columns align-self-top small-order-1 large-order-2">Volgende</h6>
        </a>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();  ?>