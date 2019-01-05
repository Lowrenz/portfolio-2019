<?php get_header();  ?>
<section class="section row" id="404">
  <div class="row align-middle medium-12 ">
    <div class="small-12 columns">
      <h1><span class="pink">404</span> - Space Invadors destroyed this page.</h1>
      <p class="small">
        Take revenge on them or <a href="<?php echo get_home_url() ?>" class="link">return to the homepage</a>
      </p><br>
      <canvas id="space-invaders" />
    </div>
    <div class="small-12 columns m-hide">
      <p class="small">
        Use <span class="game-button">Space</span> to shoot and <span class="game-button">←</span>&#160;<span class="game-button">→</span>
        to move!
      </p>
      <p class="small"><button class="button" id="restart">Restart</button></p>
    </div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/space-invadors.min.js"></script>
<script>
  document.querySelector('nav.top-nav').className = ('top-nav visible-soft');
  document.querySelector('header').className = ('purple-bg');
</script>