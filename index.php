<?php 
 get_header();
?>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <?php get_template_part('template_part/page_hero'); ?>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <?php get_template_part('template_part/page_about'); ?>
  
      </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <?php get_template_part('template_part/page_features'); ?>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

        <?php get_template_part('template_part/page_features_cards'); ?>

        </div>

      </div>

    </section><!-- /Features Cards Section -->

    <section id="features-2" class="features-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <?php get_template_part('template_part/page_features_2'); ?>
        </div>

      </div>

    </section><!-- /Features 2 Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row content justify-content-center align-items-center position-relative">
        <?php get_template_part('template_part/page_call_to_action'); ?>
        </div>

      </div>

    </section><!-- /Call To Action Section -->


    
     <!-- Clients Section -->
     <section id="clients" class="clients section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <?php get_template_part('template_part/page_clients'); ?>

        </div>
      </div>

    </section><!-- /Clients Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

        <?php get_template_part('template_part/page_testimonials'); ?>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <?php get_template_part('template_part/page_stats'); ?>
      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <?php get_template_part('template_part/page_services'); ?>

      </div>

    </section><!-- /Services Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <!-- Basic Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>Basic Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">9.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Duis aute irure dolor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Excepteur sint occaecat
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nemo enim ipsam voluptatem
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Standard Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">Most Popular</div>
              <h3>Standard Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">19.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Lorem ipsum dolor sit amet
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Consectetur adipiscing elit
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Sed do eiusmod tempor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Ut labore et dolore magna
                </li>
              </ul>

              <a href="#" class="btn btn-light">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>Premium Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">39.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Temporibus autem quibusdam
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Saepe eveniet ut et voluptates
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nam libero tempore soluta
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Cumque nihil impedit quo
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Maxime placeat facere possimus
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
       
      <?php get_template_part('template_part/page_faq'); ?>

      </div>
    </section><!-- /Faq Section -->

    <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section dark-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          
        <?php get_template_part('template_part/page_contact'); ?>
      </div>

    </section><!-- /Contact Section -->

  </main>
<?php get_footer();?>


