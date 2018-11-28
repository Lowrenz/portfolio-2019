<div class="fixed-area">
  <div class="bottom-nav">
    <div class="social-mobile">
      <div class="row">
        <a class="column item" href="https://www.facebook.com/lorenz.gillisjans" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/facebook.svg" alt="Facebook">
        </a>
        <a class="column item" href="https://twitter.com/Low_res" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter.svg" alt="Twitter">
        </a>
        <a class="column item" href="https://www.linkedin.com/in/lorenzgillisjans/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/linkedin.svg" alt="LinkedIn">
        </a>
        <a class="column item" href="tel:+32479486532" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/phone.svg" alt="Phone">
        </a>
      </div>
    </div>
  </div>
</div>
<footer>
  <section class="section section--footer">
    <div class="row align-center text-center">
      <h4>Made with <span class="pink">❤</span> by <a class="pink" href="lorenzgillisjans.com" target="_self">Low_res</a>
        | &copy;
        <?php echo date("Y"); ?> - All rights reserved</h4>
    </div>
  </section>
</footer>
<?php if ( !is_user_logged_in() ): ?>
<script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
<script>
  var galite = galite || {};
  galite.UA = 'UA-50259733-3';
</script>
<?php endif; ?>
<?php echo wp_footer(); ?>
</body>

</html>