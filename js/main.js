jQuery(document).ready(function ($) {
    jQuery('.owl-carousel').owlCarousel({
      loop: true, // Equivalent to Swiper's "loop"
      autoplay: true, // Equivalent to Swiper's "autoplay"
      autoplayTimeout: 5000, // Swiper's "autoplay.delay"
      autoplaySpeed: 600, // Swiper's "speed"
      margin: 40, // Default space between items
      responsive: {
        0: {
          items: 2, // Equivalent to Swiper's "slidesPerView" for 320px breakpoint
          margin: 40, // Space between items for this breakpoint
        },
        480: {
          items: 3, // Equivalent to Swiper's "slidesPerView" for 480px breakpoint
          margin: 60, // Space between items for this breakpoint
        },
        640: {
          items: 4, // Equivalent to Swiper's "slidesPerView" for 640px breakpoint
          margin: 80, // Space between items for this breakpoint
        },
        992: {
          items: 6, // Equivalent to Swiper's "slidesPerView" for 992px breakpoint
          margin: 120, // Space between items for this breakpoint
        }
      },
      dots: true, // Equivalent to Swiper's "pagination.type: bullets"
      nav: false, // Add navigation arrows if needed
      dotsEach: true, // Ensure dots are clickable (like Swiper's clickable pagination)
    });
  });

  // for FAQ iLanding js
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  new PureCounter();