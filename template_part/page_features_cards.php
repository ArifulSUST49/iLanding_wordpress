        
 <div class="row gy-4 align-items-center justify-content-between">

       <?php 
        query_posts('post_type=features_cards&post_status=publish&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          
            <div class="feature-box <?php echo get_post_meta(get_the_ID(), '_feature_background_color', true); ?>">
              <i class="<?php echo get_post_meta(get_the_ID(), '_feature_icon_class', true); ?>"></i>
              <h4><?php the_title();?></h4>
              <p><?php the_content();?></p>
            </div>
          </div><!-- End Feature Borx-->

          <?php
          endwhile;
          endif;
          ?>
          
</div>