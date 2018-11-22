<?php
/*
  Template Name: Section Grid
*/
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$page_id = get_the_ID();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'full' );
//needed for 2nd only
$extra = "";
$current_tag = "";
//$post_number = 0;
$tag = ( get_query_var('tag') ) ? get_query_var('tag') : "";
 $args = array(
      'posts_per_page' => 7,
      'post_type' => 'post',
      'orderby' => 'most_recent',
      'tag' => $tag,
      //'paged' => $paged
    );

  $the_query = new WP_Query( $args );
  $blog_posts = $the_query->posts;
  $amount = $the_query->post_count;
?>
<section class="section section--grid-intro">
  <div class="row grid-intro__content align-center text-center">
    <div class="small-12 medium-10 large-8 columns">
      <?php the_content() ?>
    </div>
  </div>
</section>
<section class="section section--tag-filter text-center ">
  <div class="row align-center">
    <div class="medium-10 large-8  small-12 columns tags">
    <?php 
      echo "<a class='tag' href='/blog'>Alles</a> ";
      $terms = get_terms('post_tag');
        //Loop through each term
      foreach($terms as $term):
        if($term->count > 0){
          if($term->slug == $tag){
            $current_tag = "current";
          }else{
              $current_tag = "";
          }
          echo "<a class='tag $current_tag' href='?tag=$term->slug'>".$term->name."</a> ";
        }
      endforeach;
    ?>
    </div>
  </div>
</section>
<?php if ( $the_query->have_posts() ) :  ?>
  <?php $more = true; $end = '</div>'?>
  <section class="section section--grid-posts">
    <div class="row grid-posts">
      <div class="small-12 columns">
      
    <div class="row medium-unstack ">
      <?php while($the_query->have_posts()):
      $the_query->the_post();
      if($the_query->current_post == 0){ ?>
      <div class="columns ">
        <div class="row relative" style="height:100%">
          <div class="columns align-self-bottom">
            <?php include(locate_template("sections/partial/posts-grid.php")); ?>
          </div>
        </div>
      </div>
      <?php } else if($the_query->current_post == 1) { ?>
        <div class="columns">
          <div class="row relative">
            <?php 
              $extra = "small-12 columns";
              include(locate_template("sections/partial/posts-grid.php")); 
              $extra = "";
              $end .='</div></div>'; //add the ends for this column and row to add at the end if there are no more posts
            ?>
          </div>
          <div class="row medium-unstack ">
      <?php } else if($the_query->current_post > 1 && $the_query->current_post < 4 ){ ?>
          <div class="columns relative">
          <?php include(locate_template("sections/partial/posts-grid.php")); ?>
          </div>
          
      <?php } else {
        if($more){ 
        echo $end;$more= false;?>
        <div class="row medium-unstack">
      <?php } ?>
      <?php if($the_query->current_post %2 == 0){?>
        <div class="columns relative">
          <?php include(locate_template("sections/partial/posts-grid.php")); ?>
        </div>
      <?php }else{ ?>
        <div class="columns relative">
          <?php include(locate_template("sections/partial/posts-grid.php")); ?>
        </div>
      <?php }}
        
        endwhile;
        echo $end;
        wp_reset_postdata();
      ?>
          </div>
    </div>
  </section>
  
  <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts row">
    
    <div class="next-posts-link medium-6 columns">
      <?php echo get_previous_posts_link( 'Nieuwe posts' ); // display newer posts link ?>
    </div>
    <div class="prev-posts-link medium-6 columns text-right">
      <?php echo get_next_posts_link( 'Oudere posts', $the_query->max_num_pages ); // display older posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>

