<?php
/*
  Template Name: Section Shortcode
*/

$page_id = get_the_ID();
$dir = get_stylesheet_directory_uri();

?>
    <section class="section section--shortcode">
        <div class="row">
            <div class="small-12 columns">
                <?php the_content(); ?>
            </div>
            <?php if(current_user_can('administrator')) edit_post_link('edit section', '<p class="edit_post">', '</p>',$page_id); ?>
        </div>
    </section>