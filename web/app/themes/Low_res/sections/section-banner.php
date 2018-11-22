<?php
/*
  Template Name: Section Banner
*/
$page_id = get_the_ID();
?>

<section class="section section--banner">
  <div class="row">
    <div class="small-12 medium-7 columns banner">
      <?php the_title( '<h2 class="title title--stripe banner__title">', '</h2>' );  ?>
      <div class="banner__content"><?php the_content(); ?></div>
    </div>
    <div class="small-12 medium-5 columns banner--red align-self-bottom">
      <p class="banner__extra">Doorbreek de status quo, start een innovatietraject.</p>
      <a class="link link--white banner__cta" href="http://www.sameninnoveren.be/"><?php echo __( 'Innoveer' ); ?></a>
    </div>
    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit-post">', '</p>',$page_id); ?>
  </div>
</section>
