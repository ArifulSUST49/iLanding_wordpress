
<div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">

       <?php 
  
         query_posts('post_type=features_cards2&post_status=publish&order=ASC&paged='. get_query_var('post')); 

          if(have_posts()) :
           while(have_posts()) : the_post(); 
       ?>
           <div class="col-lg-4">

            <div class="feature-item text-end mb-5" data-aos-delay="200">
             
            <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_content()?></p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="<?php echo get_post_meta(get_the_ID(), '_feature_icon_class', true); ?>"></i>
                </div>
              </div>
              <br>
              <?php 
             endwhile;
            endif;
            ?>
            </div><!-- End .feature-item -->
            
            
          </div>

         
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="phone-mockup text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/phone-app-screen.webp" alt="Phone Mockup" class="img-fluid">
            </div>
          </div><!-- End Phone Mockup -->

          </div>

</div>