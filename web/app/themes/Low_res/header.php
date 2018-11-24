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
    $post_slug=$post->post_name;
    ?>
</head>

<body <?php body_class() ?>>
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <header>
    <nav class="top-nav">
      <a href="<?php echo get_home_url(); ?>">
        <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/lowres-logo.svg">
      </a>
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
    </nav>
  </header>