
<?php 
add_theme_support('title-tag');

// Thumbnil Image Area
add_theme_support( 'post-thumbnails', array('page', 'post','service') );
add_image_size('post-thumbnails', 970, 300, true);
add_image_size('slider', 600, 600, true);
add_image_size('service', 900, 350, true);
add_image_size('project', 900, 350, true);

// Custom Post Type
function my_theme_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', ['aside ', 'gallery ', 'image', 'audio', 'video']);
}

add_action('after_setup_theme', 'my_theme_setup');

function ali_excerpt_more($more){
  global $post;
  return '<br> <br> <a class="redmore" href="'.get_permalink( $post->ID) . '">' . 'Read More -->' . '</a>';
}
add_filter('excerpt_more', 'ali_excerpt_more');

function ali_excerpt_lenght($length){
  return 15;
}
add_filter('excerpt_length', 'ali_excerpt_lenght', 999);