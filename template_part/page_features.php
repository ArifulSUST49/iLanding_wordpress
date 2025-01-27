  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
      
        <div class="d-flex justify-content-center">
     
          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
          <?php 
              query_posts('post_type=features&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('paged')); 
              
              if(have_posts()){
                $is_first_post = true;
                  while(have_posts()){
                      the_post(); 
                      
                      $current_tab_id = get_the_ID();    
          ?>
            <li class="nav-item">
              <a class="nav-link <?php if ( $is_first_post ) echo 'active show'; ?>" data-bs-toggle="tab" data-bs-target="#features-tab-<?php echo $current_tab_id; ?>">
                <h4><?php echo get_post_meta( $post->ID, '_title', true ); ?></h4>
              </a>
            </li><!-- End tab nav item -->
            <?php
             $is_first_post = false;
                  };
                }; 
          ?>
          </ul>
       
        </div>
      
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        <?php 
              query_posts('post_type=features&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('paged')); 
             
              if(have_posts()){
                $is_first_post = true;
                  while(have_posts()){
                      the_post(); 
                      
                      $current_tab_id = get_the_ID();    
          ?>
          <div class="tab-pane fade <?php if ( $is_first_post ) echo 'active show'; ?>" id="features-tab-<?php echo $current_tab_id; ?>">
            <div class="row"> 
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3><?php the_title(); ?></h3>
                <div>
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </div>
              
            </div>
            
          </div><!-- End tab content item -->
          <?php
           $is_first_post = false;
                  };
                }; 
              ?>
        </div>
      
      </div>