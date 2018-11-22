<footer>
  <section class="section section--footer">
    <div class="row">
      <div class="small-12 medium-6 small-order-2 medium-order-1 columns footer footer--left">
        <h4 class="footer__title">Meer weten? Shoot.</h4>
        <div class="row footer__contact">
          <div class="small-12 medium-6 columns">
            <address class="address__contact">
              <p class="address__telephone">
                <a href="tel:034431216">Tel 03/443.12.16</a>
              </p>
              <p class="address__mail">
                <a href="mailto:info@contribute-group.be">info@contribute-group.be</a>
              </p>
            </address>
          </div>
          <div class="small-12 medium-6 columns">
            <address class="address__location">
              <p>Prins Boudewijnlaan 43 </p>
              <p>2650 Edegem </p>
              <p>België</p>
            </address>
          </div>
        </div>

        <div class="footer__logo">
          <a href="<?php echo get_home_url(); ?>">
            <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg">
          </a>
        </div>

        <p class="footer__copyright">Alle rechten voorbehouden 2017 &copy; Contribute Group</p>

      </div>

      <div class="small-12 medium-6 small-order-1 medium-order-2 columns footer footer--right">
        <h4 class="footer__title">Schrijf je in op onze Nieuwsbrief</h4>
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="//contribute-group.us11.list-manage.com/subscribe/post?u=78c49676654b8e31e1958c21f&amp;id=eaa0ff6cd6" method="post"
            id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">

              <div class="mc-field-group">
                <input type="email" value="" name="EMAIL" placeholder="E-mailadres *" class="required email" id="mce-EMAIL">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_78c49676654b8e31e1958c21f_eaa0ff6cd6" tabindex="-1" value="">
              </div>
              <div class="clear">
                <div class="footer__signup_btn">
                  <button type="submit" value="Inschrijven" name="subscribe" id="mc-embedded-subscribe">inschrijven</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
          (function ($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
            $.extend($.validator.messages, {
              required: "Dit is een verplicht veld.",
              remote: "Controleer dit veld.",
              email: "Vul hier een geldig e-mailadres in."
            });
          }(jQuery));
          var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->
        <div class="align-self-bottom">
          <h5 class="footer__subtitle">Op de hoogte blijven? Volg ons.</h5>
          <p class="social-options">
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
        </div>
      </div>
    </div>
  </section>
</footer>
<?php if ( !is_user_logged_in() ): ?>

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-98140038-1', 'auto');
  ga('send', 'pageview');
</script>
<?php endif; ?>
<?php echo wp_footer(); ?>
</body>
</html>