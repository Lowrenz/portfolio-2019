<footer>
  <section class="section section--footer">
    <div class="row align-center text-center">
      <h4>Made with <span class="pink">❤</span> by <a class="pink" href="lorenzgillisjans.com" target="_self">Low_res</a> | &copy; <?php echo date("Y"); ?> - All rights reserved</h4>
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