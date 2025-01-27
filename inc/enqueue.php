<?php 

// Theme css and js/jquery file calling
function arif_css_js_file_calling(){
    wp_enqueue_style( 'arif-style',get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css',array(),'5.3.3','all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '8.0.0');
    wp_register_style( 'bootstrap-icons', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css', array(), '1.10.5', 'all' );
    // wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css', array(), '3.0.0');
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/css/glightbox.min.css', array(), '3.2.0');
    wp_register_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css',array(),'2.3.4','all' );
    wp_register_style( 'owl.theme.default.min', get_template_directory_uri().'/css/owl.theme.default.min.css',array(),'2.3.4','all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('swiper-css');
    wp_enqueue_style( 'bootstrap-icons' );
    // wp_enqueue_style( 'aos-css' );
    wp_enqueue_style( 'glightbox-css' );
    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default.min');
    wp_enqueue_style('custom');

     // jquery
     wp_enqueue_script('jquery');
     wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array(),'5.3.3','true');
     wp_enqueue_script('owl.carousel.min',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'2.3.4','true');
     wp_enqueue_script( 'main',get_template_directory_uri().'/js/main.js',array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts','arif_css_js_file_calling');