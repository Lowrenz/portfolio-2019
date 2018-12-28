<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Low_res | User Experience Design & Design Systems
  </title>
  <meta name="description" content="In need of usable and modern app & web designs that are crafted with attention to detail? Low_res can provide you with innovative user interfaces to elevate your business and brand image.">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
  <?php
    global $post;
    if(isset($post)){
      $post_slug=$post->post_name;
    }
    ?>
</head>

<body <?php body_class() ?>>
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <header>
    <nav class="top-nav hidden-soft">
      <div class="branding">
        <a href="<?php echo get_home_url(); ?>">
          <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/lowres-logo.svg">
        </a>
      </div>
      <div class="menu">
        <a href="#" target="_self" class="button alien">
          Menu
        </a>
      </div>
      <div class="social">
        <div class="row">
          <a class="item" href="https://www.facebook.com/lorenz.gillisjans" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/facebook.svg" alt="Facebook">
          </a>
          <a class="item" href="https://twitter.com/Low_res" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter.svg" alt="Twitter">
          </a>
          <a class="item" href="https://www.linkedin.com/in/lorenzgillisjans/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/linkedin.svg" alt="LinkedIn">
          </a>
          <a class="item" href="tel:+32479486532" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/phone.svg" alt="Phone">
          </a>
        </div>
      </div>
    </nav>
    <div class="nav-detail hidden-soft">
      <?php
                    $config = array(
                    'menu'            => "main-menu",
                    'container'       => false,
                    'echo'            => true,
                    'fallback_cb'     => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => '',
                    );
                    ?>
      <?php wp_nav_menu( $config ); ?>
    </div>
  </header>