<?php
/**
 * Theme Footer Section
 * It will be visible on everypage
 */

?>
<footer id="footer" class="footer">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <div class="footer-contact">
      <?php dynamic_sidebar( 'footer-address'); ?>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <?php dynamic_sidebar( 'footer-1'); ?>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
    <?php dynamic_sidebar( 'footer-2'); ?>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
    <?php dynamic_sidebar( 'footer-3'); ?>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
    <?php dynamic_sidebar( 'footer-4'); ?>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <!-- <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span></p> -->
  <p><?php echo get_theme_mod('arif_copyright_section'); ?></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<?php wp_footer();?>
</body>

