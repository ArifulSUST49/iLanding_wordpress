<div class="row g-4">  
          <?php
            
           query_posts('post_type=service&post_status=publish&order=ASC&paged='. get_query_var('post')); 
   
           if(have_posts()) :
             while(have_posts()) : the_post(); 
           ?>

           <!--  ilanding site code      -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="<?php echo esc_attr(get_post_meta(get_the_ID(), '_service_icon', true)); ?>"></i>
              </div>
              <div>
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>

              </div>
            </div>
          </div><!-- End Service Card -->





          <?php
           endwhile;
           endif;
          ?>
</div>