<?php 

// Theme css and js/jquery file calling
function arif_css_js_file_calling(){
    wp_enqueue_style( 'arif-style',get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css',array(),'5.3.3','all');
    wp_register_style(
      'bootstrap-icons', // Handle name
      'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css', // Bootstrap Icons CDN link
      array(),           // Dependencies
      '1.10.5'           // Version
  );
    wp_register_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css',array(),'2.3.4','all' );
    wp_register_style( 'owl.theme.default.min', get_template_directory_uri().'/css/owl.theme.default.min.css',array(),'2.3.4','all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default.min');
    wp_enqueue_style('custom');

     // jquery
     wp_enqueue_script('jquery');
     wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array(),'5.3.3','true');
     wp_enqueue_script('owl.carousel.min',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'2.3.4','true');
     wp_enqueue_script( 'main',get_template_directory_uri().'/js/main.js',array(),'1.0.0','true');
     wp_enqueue_script( 'purecounter', 'https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js">', array(), null, true );
  
}
add_action('wp_enqueue_scripts','arif_css_js_file_calling');




// Google Fonts Enqueue
function ali_add_google_fonts(){
  wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ali_add_google_fonts');

// Desicon Not Showing fixing
function deshicon_load_issue(){
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'deshicon_load_issue');