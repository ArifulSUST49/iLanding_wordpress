<div class="row align-items-center">
<?php 
  
  query_posts('post_type=hero_des&post_status=publish&order=ASC&paged='. get_query_var('post')); 

  if(have_posts()) :
    while(have_posts()) : the_post(); 
  ?>
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success 
              </div>

              <h1 class="mb-4">
              <?php the_title(); ?>
                <span class="accent-text">
                  <?php 
                  echo get_post_meta(get_the_ID(), '_meta_box_one_key', true);
                 ?>
                </span>
              </h1>

              <p class="mb-4 mb-md-5">
              <?php the_content(); ?>
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="<?php echo get_theme_mod('hero_image'); ?>" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="<?php echo get_theme_mod('avator1'); ?>" alt="Customer 1" class="avatar">
                  <img src="<?php echo get_theme_mod('avator2'); ?>" alt="Customer 2" class="avatar">
                  <img src="<?php echo get_theme_mod('avator3'); ?>" alt="Customer 3" class="avatar">
                  <img src="<?php echo get_theme_mod('avator4'); ?>" alt="Customer 4" class="avatar">
                  <img src="<?php echo get_theme_mod('avator5'); ?>" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2"> <?php 
                  echo get_post_meta(get_the_ID(), '_meta_box_two_key', true);
                 ?></p>
              </div>
            </div>
          </div>
          <?php 
             endwhile;
            endif;
          ?>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
        <?php 
        query_posts('post_type=hero&post_status=publish&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class=" <?php echo get_post_meta(get_the_ID(), '_hero_icon', true);?>"></i>
              </div>
              <div class="stat-content">
                <h4><?php the_title(); ?></h4>
                <p class="mb-0"><?php the_content(); ?></p>
              </div>
            </div>
          </div>
          
          
         
          <?php 
          endwhile;
          endif;
        ?>
        </div>