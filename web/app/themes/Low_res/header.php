<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Contribute Group - partner in innovatie | IT-specialist | expert in technologie
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Van innovatie tot implementatie, Contribute Group is je partner in IT. Samen zoeken we naar de beste IT-oplossing voor jouw bedrijf. Contacteer ons info@contribute-group.be.">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <script src="https://use.typekit.net/wal7ell.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.min.css"  /> -->
  <script>
    try {
      Typekit.load({
        async: true
      });
    } catch (e) {}
  </script>
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
      <div class="mobile-menu-container">
        <div id="hamburgler">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="fullpage-menu row hide align-center">
          <div class="small-12 large-10 xlarge-9 columns">
            <div class="row">
              <div class="small-12 columns">
                <div class="fullpage-logo">
                  <a href="<?php echo get_home_url(); ?>">
                    <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo_color.svg">
                  </a>
                </div>
              </div>
              <div class="small-12 columns">
                <ul id="mobile-menu" class="dropdown menu vertical" data-dropdown-menu>
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
                </ul>
              </div>
              <div class="small-12 columns menu-footer hide-for-small-only">
                <div class="row">
                  <div class="columns">
                    <h5 class="title title--stripe">get in touch.</h5>
                    <address class="communication">
                      <p>
                        <a href="mailto:info@contribute-group.be">info[at]contribute-group.be</a>
                      </p>
                      <p>03 485 15 57</p>
                    </address>
                  </div>
                  <div class="columns">
                    <h5 class="title title--stripe">adres.</h5>
                    <address class="location">
                      <p>Prins Boudewijnlaan 43</p>
                      <p>2650 Edegem</p>
                    </address>
                  </div>
                  <div class="columns">
                    <h5 class="title title--stripe">Volg ons.</h5>
                    <address class="social">
                      <p>
                        <a href="https://www.linkedin.com/company/contribute-group" target="_blank">
                          <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://twitter.com/ContributeGroup" target="_blank">
                          <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/contributegroup/" target="_blank">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="top-bar">
        <div class="top-bar-left">
          <a href="<?php echo get_home_url(); ?>">
            <span class="site-logo"></span>
          </a>
        </div>
      </div>
    </nav>
  </header>