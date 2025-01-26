         <div class="row gy-4 align-items-center justify-content-between">
         <?php 
  
  query_posts('post_type=about&post_status=publish&order=ASC&paged='. get_query_var('post')); 

  if(have_posts()) :
    while(have_posts()) : the_post(); 
  ?>
         <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title"><?php the_title();?></h2>
            <p class="about-description"><?php the_content();?></p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i><?php echo esc_attr(get_post_meta(get_the_ID(), '_post1', true)); ?> </li>
                  <li><i class="bi bi-check-circle-fill"></i><?php echo esc_attr(get_post_meta(get_the_ID(), '_post2', true)); ?></li>
                  <li><i class="bi bi-check-circle-fill"></i> <?php echo esc_attr(get_post_meta(get_the_ID(), '_post3', true)); ?></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> <?php echo esc_attr(get_post_meta(get_the_ID(), '_post4', true)); ?></li>
                  <li><i class="bi bi-check-circle-fill"></i> <?php echo esc_attr(get_post_meta(get_the_ID(), '_post5', true)); ?></li>
                  <li><i class="bi bi-check-circle-fill"></i> <?php echo esc_attr(get_post_meta(get_the_ID(), '_post6', true)); ?></li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                  <?php the_post_thumbnail( '', array( 'class' => 'profile-image' ) ); ?>
                    <div>
                      <h4 class="profile-name"><?php echo esc_attr(get_post_meta(get_the_ID(), '_post7', true)); ?></h4>
                      <p class="profile-position"><?php echo esc_attr(get_post_meta(get_the_ID(), '_post8', true)); ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number"><?php echo esc_attr(get_post_meta(get_the_ID(), '_post9', true)); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            endwhile;
            endif;
            ?>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
          </div>