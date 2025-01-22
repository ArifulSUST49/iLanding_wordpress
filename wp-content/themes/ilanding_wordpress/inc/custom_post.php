
<?php

function custom_slider(){
  register_post_type ('slider',
    array(
      'labels' => array(
        'name' => ('Slider'),
        'singular_name' => ('Slider'),
        'add_new' => ('Add New Slider'),
        'add_new_item' => ('Add New Slider'),
        'edit_item' => ('Edit Slider'),
        'delete_item' =>('Delete Slider'),
        'new_item' => ('New Slider'),
        'view_item' => ('View Slider'),
        'not_found' => ('Sorry, we could not find the Slider you are looking for.'),
      ),
      'menu_icon' => 'dashicons-format-gallery',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'taxonomies' => array('category'),
      'rewrite' => array('slag' => 'slider'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_slider');


// hero section 
function custom_hero(){
  register_post_type ('hero',
    array(
      'labels' => array(
        'name' => ('Heros'),
        'singular_name' => ('Hero'),
        'add_new' => ('Add New Hero_content'),
        'add_new_item' => ('Add New Hero_content'),
        'edit_item' => ('Edit Hero_content'),
        'delete_item' =>('Delete Hero_content'),
        'new_item' => ('New Hero_content'),
        'view_item' => ('View Hero_content'),
        'not_found' => ('Sorry, we could not find the Hero_content you are looking for.'),
      ),
      'menu_icon' => 'dashicons-networking',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'taxonomies' => array('category'),
      'rewrite' => array('slag' => 'hero'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_hero');


// features cards section
function feature_card(){
    register_post_type ('features_cards',
      array(
        'labels' => array(
          'name' => ('Features cards'),
          'singular_name' => ('Feature'),
          'add_new' => ('Add New features_card'),
          'add_new_item' => ('Add New features_card'),
          'edit_item' => ('Edit features_card'),
          'delete_item' =>('Delete features_card'),
          'new_item' => ('New features_card'),
          'view_item' => ('View features_card'),
          'not_found' => ('Sorry, we could not find the features_cards that you are looking for.'),
        ),
        'menu_icon' => 'dashicons-calendar',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'features_cards'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );
      add_theme_support('post-thumbnails');
  }
  
  add_action('init', 'feature_card');
  function custom_service(){
    register_post_type ('service',
      array(
        'labels' => array(
          'name' => ('Services'),
          'singular_name' => ('Service'),
          'add_new' => ('Add New Service'),
          'add_new_item' => ('Add New Service'),
          'edit_item' => ('Edit Service'),
          'delete_item' =>('Delete Service'),
          'new_item' => ('New Service'),
          'view_item' => ('View Service'),
          'not_found' => ('Sorry, we could not find the service you are looking for.'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );
      add_theme_support('post-thumbnails');
  }
  
  add_action('init', 'custom_service');


  function custom_testimonial(){
    register_post_type ('testimonial',
      array(
        'labels' => array(
          'name' => ('Testimonial'),
          'singular_name' => ('Testimonial'),
          'add_new' => ('Add New Testimonial'),
          'add_new_item' => ('Add New Testimonial'),
          'edit_item' => ('Edit Testimonial'),
          'delete_item' =>('Delete Testimonial'),
          'new_item' => ('New Testimonial'),
          'view_item' => ('View Testimonial'),
          'not_found' => ('Sorry, we could not find the Testimonial you are looking for.'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'testimonial'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );
      add_theme_support('post-thumbnails');
  }

  add_action('init', 'custom_testimonial');

  function add_testimonial_meta_box() {
    add_meta_box(
        'testimonial_designation',
        'Testimonial Designation',
        'render_testimonial_designation_meta_box',
        'testimonial', // Change 'testimonial' to your post type if needed
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_box');

function render_testimonial_designation_meta_box($post) {
    // Use nonce for verification
    wp_nonce_field('save_testimonial_designation', 'testimonial_designation_nonce');
    
    // Get existing value
    $designation = get_post_meta($post->ID, '_testimonial_designation', true);
    
    // Render input
    echo '<p><label for="testimonial_designation">Designation</label></p>';
    echo '<input type="text" id="testimonial_designation" name="testimonial_designation" value="' . esc_attr($designation) . '" style="width: 100%;">';
}

function save_testimonial_designation($post_id) {
    // Verify nonce
    if (!isset($_POST['testimonial_designation_nonce']) || !wp_verify_nonce($_POST['testimonial_designation_nonce'], 'save_testimonial_designation')) {
        return;
    }
    
    // Save designation
    if (isset($_POST['testimonial_designation'])) {
        update_post_meta($post_id, '_testimonial_designation', sanitize_text_field($_POST['testimonial_designation']));
    }
}
add_action('save_post', 'save_testimonial_designation');
