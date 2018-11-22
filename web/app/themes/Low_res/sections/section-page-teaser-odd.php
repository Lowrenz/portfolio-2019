<?php
/*
  Template Name: Section Page teaser (odd)
*/
$page_id = get_the_ID();
$filter = new Filters();
?>

<section class="section section--page-teaser section--page-teaser--odd">
  <div class="row row-odd">
    
    <div class="small-12 medium-5 columns hide-for-small-only page-teaser">
      <?php 
      $post_object = get_field('reference_case');
      
      if( $post_object ) : 
          // override $post
          $post = $post_object;
          setup_postdata( $post ); 
      ?>
      <div class="refcase">
          <a class="link refcase__link" href="<?php the_permalink() ?>"> 
            <div class="refcase__image text-right"> 
              <figure>
                <?php the_post_thumbnail( 'landscape-teaser' ); ?> 
                <div class="refcase__pre-title"><?php the_title(); ?></div>
                <figcaption class="refcase__info">
                  <div class="refcase__title"><?php the_title(); ?></div>
                  <?php if(has_excerpt()){ ?>
                    <div class="refcase__content text-right"> <?php echo $filter->teaserContent(get_the_excerpt(),100); ?> </div>
                  <?php }else{ ?>
                    <div class="refcase__content text-right"> <?php echo $filter->teaserContent(get_the_content(),100); ?> </div>
                  <?php } ?>
                  
                </figcaption>
              </figure>
            </div>
            
          </a>
      </div>
      <?php 
      wp_reset_postdata();
      setup_postdata( $page_id ); 
      ?>
      
      <?php  else : ?>
      <div class="page-teaser__image">
        <?php the_post_thumbnail( 'landscape-teaser' ); ?>
      </div>
      <?php  endif; ?>
    </div>
    <?php ?>
    <div class="small-12 medium-7 columns">
      <?php echo '<h2 class="title title--stripe page-teaser__title">' . get_the_title( $page_id  ) . '</h2>'; ?>
      <div class="page-teaser__content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit_post">', '</p>',$page_id); ?>
  </div>
</section>
