<?php
// Creating the widget 
class lpd_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'wpb_widget', 

    // Widget name will appear in UI
    __('Latest Posts Delux Widget', 'wpb_widget_domain'), 

    // Widget description
    array( 'description' => __( 'Widget to use all post types for latest posts', 'wpb_widget_domain' ), ) 
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $post_type = $instance['post_type'] ;
    $posts_per_page = $instance['amount'] ;
    $args = array(
      'posts_per_page' => $posts_per_page,
      'post_type' => $post_type,
      'orderby' => 'most_recent'
    );
    $the_query = new WP_Query( $args );
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    ?>
    <div class="row">
      <h5 class='columns'>In de kijker</h5>
    </div>
    <div class="row medium-unstack">
    <?php if ( have_posts()) { while ( $the_query->have_posts() ){ 
     $the_query->the_post();
     $post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
    ?>
    <div class="columns post-teaser post-teaser--widget">
      <div class="post-teaser__data">
        <a class="post-teaser__image" style="background-image: url('<?php echo $post_thumb['0']; ?>');" href="<?php the_permalink() ?>"></a>
        <div class="post-teaser__published"><?php echo get_the_date(); ?></div>
        <h3 class="post-teaser__title"> <a class="link" href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h3>
        
          <!--<div class="post-teaser__excerpt"><a class="link" href="<?php the_permalink() ?>"> <?php the_excerpt(); ?></a></div>-->
        <div class="post-teaser__read row"> <div class="text-left columns post-teaser__time"><?php if(get_field('read')){echo get_field('read').' '.__("min read"); } ?></div><div class="columns text-left" ><a href="<?php the_permalink() ?>" class="link link--marker">Lees meer</a> </div></div>
      </div>
    </div>
    <?php }} wp_reset_postdata(); ?>
  </div>
    <?php echo $args['after_widget'];
  }

  // Widget Backend 
  public function form( $instance ) {
    $types = get_post_types();
    $unused_types = ["custom_css","customize_changeset","revision","attachment","nav_menu_item","acf"];
    foreach($unused_types as $unused_type) 
      unset($types[$unused_type]);
    if ( isset( $instance[ 'post_type' ] ) ) {
      $post_type = $instance[ 'post_type' ];
    }
    if ( isset( $instance[ 'amount' ] ) ) {
      $amount = $instance[ 'amount' ];
    }
  else {
    $amount = 5;
  }
  // Widget admin form
  ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'post_type' ); ?>">
        <?php _e( 'Post Type:' ); ?>
      </label>
      <select class="widefat" id="<?php echo $this->get_field_id( 'post_type' ); ?>" name="<?php echo $this->get_field_name( 'post_type' ); ?>" type="text">
        <?php 
        foreach($types as $key => $post){
          $selected = '';
          if($post_type && $post_type == $key){ $selected='selected';};
          echo '<option '.$selected.' name="'.$key.'">'.$post.'</option>';
        }
        ?>
      </select></p>
    <p>
      <label for="<?php echo $this->get_field_id( 'amount' ); ?>">
        <?php _e( 'Amount:' ); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'amount' ); ?>" name="<?php echo $this->get_field_name( 'amount' ); ?>" type="number" value="<?php echo esc_attr( $amount ); ?>" /> </p>
    <?php 
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['post_type'] = ( ! empty( $new_instance['post_type'] ) ) ? strip_tags( $new_instance['post_type'] ) : '';
    $instance['amount'] = ( ! empty( $new_instance['amount'] ) ) ? strip_tags( $new_instance['amount'] ) : '';
    return $instance;
  }
} // Class wpb_widget ends here

// Register and load the widget
function lpd_load_widget() {
	register_widget( 'lpd_widget' );
}
add_action( 'widgets_init', 'lpd_load_widget' );

?>