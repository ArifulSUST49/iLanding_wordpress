<?php 
 get_header();

?>
  <main class="main">
  <!-- #region -->
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Service Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Services List</h4>
              <div class="services-list">
                
                <!-- <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product Management</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a> -->

              <?php dynamic_sidebar('service') ?> 
              
              </div>
            </div><!-- End Services List -->
          
                 
            <div class="service-box">
              <h4>Download Catalog</h4>
              <div class="download-catalog">
                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
          <?php 
  
  query_posts('post_type=service_details&post_status=publish&order=ASC&paged='. get_query_var('post')); 

  if(have_posts()) :
    while(have_posts()) : the_post(); 
  ?>

            <?php echo the_post_thumbnail('service_details'); ?>
            <h3><?php the_title(); ?></h3>
            <p>
              <?php the_content();?>
            </p>
            

          </div>
          <?php
           endwhile;
           endif;
          ?>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>



</body>

</html>

<?php 
 get_footer();

?>
