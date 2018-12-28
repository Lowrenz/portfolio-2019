<?php get_header();  ?>
<div class="fullpage row align-middle">
  <div class="row align-middle medium-12 ">
    <div class="small-12 columns">
      <h1><span class="pink">404</span> - Space Invadors destroyed this page.</h1><br><br>
      <canvas id="space-invaders" />
    </div>
    <div class="small-12 columns">
    <p class="small">
        Use <span class="label label-danger">Space</span> to shoot and <span class="label label-danger">←</span>&#160;<span
          class="label label-danger">→</span> to move!&#160;&#160;&#160;<button class="btn btn-default btn-xs" id="restart">Restart</button>
      </p>
      <p>
        Take revenge on them or try finding the page you were looking for from the <a href="<?php echo get_home_url() ?>"
          class="link">homepage</a>
      </p>
    </div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/space-invadors.min.js"></script>