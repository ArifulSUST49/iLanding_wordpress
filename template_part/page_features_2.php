<!-- page_features_2.php -->


  <!-- Left Column with 3 Posts -->
  <div class="col-lg-4">
    <?php 
      // WP_Query to fetch the first 3 posts for the left column
      $args_left = array(
        'post_type' => 'features_cards2',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'paged' => get_query_var('paged', 1)
      );
      $query_left = new WP_Query($args_left);
      
      if ($query_left->have_posts()) :
        while ($query_left->have_posts()) : $query_left->the_post();
    ?>
      <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
        <div class="d-flex align-items-center justify-content-end gap-4">
          <div class="feature-content">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
          <div class="feature-icon flex-shrink-0">
            <i class="<?php echo esc_attr(get_post_meta(get_the_ID(), '_feature_icon_class', true)); ?>"></i>
          </div>
        </div>
      </div><!-- End .feature-item -->  
      
    <?php endwhile;wp_reset_postdata(); endif;  ?>
  </div>

  <!-- Middle Column with Image -->
  <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
    <div class="phone-mockup text-center">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone-app-screen.webp" alt="Phone Mockup" class="img-fluid">
    </div>
  </div><!-- End Phone Mockup -->

  <!-- Right Column with 3 Posts -->
  <div class="col-lg-4">
    <?php 
      // WP_Query to fetch the next 3 posts for the right column
      $args_right = array(
        'post_type' => 'features_cards2',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'offset' => 3, // Skip the first 3 posts
        'order' => 'ASC',
        'paged' => get_query_var('paged', 1)
      );
      $query_right = new WP_Query($args_right);
      
      if ($query_right->have_posts()) :
        while ($query_right->have_posts()) : $query_right->the_post();
    ?>
      <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
        <div class="d-flex align-items-center gap-4">
          <div class="feature-icon flex-shrink-0">
            <i class="<?php echo esc_attr(get_post_meta(get_the_ID(), '_feature_icon_class', true)); ?>"></i>
          </div>
          <div class="feature-content">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div><!-- End .feature-item -->
    <?php endwhile;wp_reset_postdata(); endif;  ?>
  </div>

