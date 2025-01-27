<div class="row gy-4">
      
       <?php 
  
            query_posts('post_type=stats&post_status=publish&order=ASC&paged='. get_query_var('post')); 

               if(have_posts()) :
                 while(have_posts()) : the_post(); 
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo esc_attr(get_post_meta(get_the_ID(), '_stats', true));  ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><?php  the_title(); ?></p>
            </div>
          </div><!-- End Stats Item -->

         <?php 
         endwhile; 
         endif; 
         ?> 

</div>
