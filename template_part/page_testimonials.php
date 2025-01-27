
<?php   
   query_posts('post_type=testimonial&post_status=publish&order=ASC&paged='. get_query_var('post')); 

   if(have_posts()) :
     while(have_posts()) : the_post(); 
   ?>
         <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'); ?>" class="testimonial-img" alt="">
              <h3><?php the_title();?></h3>

              <h4> <?php 
                 echo get_post_meta(get_the_ID(), '_testimonial_designation', true);
                 ?></h4>
                
              <div class="stars">
              
              <?php
                 $i = 0;
                 $rating = get_post_meta(get_the_ID(), '_testimonial_stars', true);
                 for($i = 0; $i < $rating; $i++) {
              ?>
                <i class="bi bi-star-fill"></i>
                <?php 
                 }
                ?>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span><?php the_content();?></span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <?php 
           endwhile;
          endif;

          ?>

         