<div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success
              </div>

              <h1 class="mb-4">
                Maecenas Vitae <br>
                Consectetur Led <br>
                <span class="accent-text">Vestibulum Ante</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
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
              <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.webp" alt="Customer 1" class="avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-2.webp" alt="Customer 2" class="avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-3.webp" alt="Customer 3" class="avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-4.webp" alt="Customer 4" class="avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-5.webp" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
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
                <i class="bi bi-trophy"></i>
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