
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

// hero description section 
function custom_hero_des(){
  register_post_type ('hero_des',
    array(
      'labels' => array(
        'name' => ('Heros_des'),
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
      'rewrite' => array('slag' => 'hero_des'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_hero_des');

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


// hero icon metabox add
function add_hero_meta_box() {
  add_meta_box(
      'hero_icon',
      'Hero icon',
      'render_hero_icon_meta_box',
      'hero', // Change 'hero' to your post type if needed
      'side',
      'default'
  );
}
add_action('add_meta_boxes', 'add_hero_meta_box');

function render_hero_icon_meta_box($post) {
  // Use nonce for verification
  wp_nonce_field('save_hero_icon_meta', 'hero_icon_meta_nonce');
  
  // Get existing value
  $icon = get_post_meta($post->ID, '_hero_icon', true);
  
  // Render input
  echo '<p><label for="hero_icon">Icon_title</label></p>';
  echo '<input type="text" id="hero_icon" name="hero_icon" value="' . esc_attr($icon) . '" style="width: 100%;">';
}

function save_hero_icon($post_id) {
  // Verify nonce
  if (!isset($_POST['hero_icon_meta_nonce']) || !wp_verify_nonce($_POST['hero_icon_meta_nonce'], 'save_hero_icon_meta')) {
      return;
  }
  
  // Save designation
  if (isset($_POST['hero_icon'])) {
      update_post_meta($post_id, '_hero_icon', sanitize_text_field($_POST['hero_icon']));
  }
}
add_action('save_post', 'save_hero_icon');



/// about section 
function custom_about(){
  register_post_type ('about',
    array(
      'labels' => array(
        'name' => ('About Section'),
        'singular_name' => ('Action'),
        'add_new' => ('Add New About_content'),
        'add_new_item' => ('Add New About_content'),
        'edit_item' => ('Edit About_content'),
        'delete_item' =>('Delete About_content'),
        'new_item' => ('New About_content'),
        'view_item' => ('View About_content'),
        'not_found' => ('Sorry, we could not find the About_content you are looking for.'),
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
      'rewrite' => array('slag' => 'about'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_about');



function about_box_meta_boxes() {
  add_meta_box(
      'about_box_details',           // Meta box ID
      'About Box Details',           // Meta box title
      'render_about_box_meta_box',   // Callback function to render the box
      'about',                   // Post type
      'normal',                        // Context (normal, side, or advanced)
      'high'                           // Priority
  );
}
add_action('add_meta_boxes', 'about_box_meta_boxes');


// Render Meta Box feature cards
function render_about_box_meta_box($post) {
  // Retrieve current values for the fields (if they exist)
  $post1 = get_post_meta($post->ID, '_post1', true);
  $post2 = get_post_meta($post->ID, '_post2', true);
  $post3 = get_post_meta($post->ID, '_post3', true);
  $post4 = get_post_meta($post->ID, '_post4', true);
  $post5 = get_post_meta($post->ID, '_post5', true);
  $post6 = get_post_meta($post->ID, '_post6', true);
  $post7 = get_post_meta($post->ID, '_post7', true);
  
  $post8 = get_post_meta($post->ID, '_post8', true);
  
  $post9 = get_post_meta($post->ID, '_post9', true);
  

 

  // $background_colo = get_post_meta($post->ID, '_about_background_color', true);
  // $icon_class = get_post_meta($post->ID, '_about_icon_class', true);
  // $background_color = get_post_meta($post->ID, '_about_background_color', true);


  // $animation_delay = get_post_meta($post->ID, '_feature_animation_delay', true);

  // Security nonce for saving
  wp_nonce_field('save_about_box_meta', 'about_box_meta_nonce');

  ?>
  <p>
      <label for="post1">post1</label><br>
      <input type="text" id="post1" name="post1" value="<?php echo esc_attr($post1); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post2">post2</label><br>
      <input type="text" id="post2" name="post2" value="<?php echo esc_attr($post2); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post3">post3</label><br>
      <input type="text" id="post3" name="post3" value="<?php echo esc_attr($post3); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post4">post4</label><br>
      <input type="text" id="post4" name="post4" value="<?php echo esc_attr($post4); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post5">post5</label><br>
      <input type="text" id="post5" name="post5" value="<?php echo esc_attr($post5); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post6">post6</label><br>
      <input type="text" id="post6" name="post6" value="<?php echo esc_attr($post6); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post7">post7</label><br>
      <input type="text" id="post7" name="post7" value="<?php echo esc_attr($post7); ?>" style="width: 100%;">
  </p>
 
  <p>
      <label for="post8">Ceo_Designation</label><br>
      <input type="text" id="post8" name="post8" value="<?php echo esc_attr($post8); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="post9">Contact No</label><br>
      <input type="text" id="post9" name="post9" value="<?php echo esc_attr($post9); ?>" style="width: 100%;">
  </p>

  <?php
}

// Save Meta Box
function save_about_box_meta($post_id) {
  // Check for nonce security
  if (!isset($_POST['about_box_meta_nonce']) || !wp_verify_nonce($_POST['about_box_meta_nonce'], 'save_about_box_meta')) {
      return;
  }

  // Prevent auto-save from overwriting
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  // Ensure user has permission to edit
  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  // Sanitize and save the icon class
  if (isset($_POST['post1'])) {
      update_post_meta($post_id, '_post1', sanitize_text_field($_POST['post1']));
  }
  
  if (isset($_POST['post2'])) {
    update_post_meta($post_id, '_post2', sanitize_text_field($_POST['post2']));
}

if (isset($_POST['post3'])) {
  update_post_meta($post_id, '_post3', sanitize_text_field($_POST['post3']));
}

if (isset($_POST['post4'])) {
  update_post_meta($post_id, '_post4', sanitize_text_field($_POST['post4']));
}

if (isset($_POST['post5'])) {
  update_post_meta($post_id, '_post5', sanitize_text_field($_POST['post5']));
}
if (isset($_POST['post6'])) {
  update_post_meta($post_id, '_post6', sanitize_text_field($_POST['post6']));
}
if (isset($_POST['post7'])) {
  update_post_meta($post_id, '_post7', sanitize_text_field($_POST['post7']));
}
if (isset($_POST['post8'])) {
  update_post_meta($post_id, '_post8', sanitize_text_field($_POST['post8']));
}
if (isset($_POST['post9'])) {
  update_post_meta($post_id, '_post9', sanitize_text_field($_POST['post9']));
}

  // Sanitize and save the background color
  // if (isset($_POST['about_background_color'])) {
  //     update_post_meta($post_id, '_about_background_color', sanitize_text_field($_POST['about_background_color']));
  // }

  // Sanitize and save the animation delay
  // if (isset($_POST['feature_animation_delay'])) {
  //     update_post_meta($post_id, '_feature_animation_delay', intval($_POST['feature_animation_delay']));
  // }
}
add_action('save_post', 'save_about_box_meta');

/// about section end

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




// features  section
function feature(){
    register_post_type ('features',
      array(
        'labels' => array(
          'name' => ('Features'),
          'singular_name' => ('Features'),
          'add_new' => ('Add New features'),
          'add_new_item' => ('Add New features'),
          'edit_item' => ('Edit features'),
          'delete_item' =>('Delete features'),
          'new_item' => ('New features'),
          'view_item' => ('View features'),
          'not_found' => ('Sorry, we could not find the features that you are looking for.'),
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
        'rewrite' => array('slag' => 'features'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );
      add_theme_support('post-thumbnails');
  }
  
  add_action('init', 'feature');


  function feature_meta_boxes() {
    add_meta_box(
        'feature_box',           // Meta box ID
        'Feature Box ',           // Meta box title
        'render_feature_meta_box',   // Callback function to render the box
        'features',                   // Post type
        'normal',                        // Context (normal, side, or advanced)
        'high'                           // Priority
    );
}
add_action('add_meta_boxes', 'feature_meta_boxes');


// Render Meta Box feature cards
function render_feature_meta_box($post) {
    // Retrieve current values for the fields (if they exist)
    $title = get_post_meta($post->ID, '_title', true);
    
    // $animation_delay = get_post_meta($post->ID, '_feature_animation_delay', true);

    // Security nonce for saving
    wp_nonce_field('save_feature_meta', 'feature_meta_nonce');

    ?>
    <p>
        <label for="title">title</label><br>
        <input type="text" id="title" name="title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    </p>
    
    <!-- <p>
        <label for="feature_animation_delay">Animation Delay (in ms, e.g., "100"):</label><br>
        <input type="number" id="feature_animation_delay" name="feature_animation_delay" value="<?php //echo esc_attr($animation_delay); ?>" style="width: 100%;">
    </p> -->
    <?php
}

// Save Meta Box
function save_feature_meta($post_id) {
    // Check for nonce security
    if (!isset($_POST['feature_meta_nonce']) || !wp_verify_nonce($_POST['feature_meta_nonce'], 'save_feature_meta')) {
        return;
    }

    // Prevent auto-save from overwriting
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Ensure user has permission to edit
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sanitize and save the icon class
    if (isset($_POST['title'])) {
        update_post_meta($post_id, '_title', sanitize_text_field($_POST['title']));
    }

    // Sanitize and save the animation delay
    // if (isset($_POST['feature_animation_delay'])) {
    //     update_post_meta($post_id, '_feature_animation_delay', intval($_POST['feature_animation_delay']));
    // }
}
add_action('save_post', 'save_feature_meta');




  function feature_box_meta_boxes() {
    add_meta_box(
        'feature_box_details',           // Meta box ID
        'Feature Box Details',           // Meta box title
        'render_feature_box_meta_box',   // Callback function to render the box
        'features_cards',                   // Post type
        'normal',                        // Context (normal, side, or advanced)
        'high'                           // Priority
    );
}
add_action('add_meta_boxes', 'feature_box_meta_boxes');


// Render Meta Box feature cards
function render_feature_box_meta_box($post) {
    // Retrieve current values for the fields (if they exist)
    $icon_class = get_post_meta($post->ID, '_feature_icon_class', true);
    $background_color = get_post_meta($post->ID, '_feature_background_color', true);
    // $animation_delay = get_post_meta($post->ID, '_feature_animation_delay', true);

    // Security nonce for saving
    wp_nonce_field('save_feature_box_meta', 'feature_box_meta_nonce');

    ?>
    <p>
        <label for="feature_icon_class">Icon Class (e.g., "bi bi-award"):</label><br>
        <input type="text" id="feature_icon_class" name="feature_icon_class" value="<?php echo esc_attr($icon_class); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="feature_background_color">Background Color (e.g., "orange"):</label><br>
        <input type="text" id="feature_background_color" name="feature_background_color" value="<?php echo esc_attr($background_color); ?>" style="width: 100%;">
    </p>
    <!-- <p>
        <label for="feature_animation_delay">Animation Delay (in ms, e.g., "100"):</label><br>
        <input type="number" id="feature_animation_delay" name="feature_animation_delay" value="<?php //echo esc_attr($animation_delay); ?>" style="width: 100%;">
    </p> -->
    <?php
}

// Save Meta Box
function save_feature_box_meta($post_id) {
    // Check for nonce security
    if (!isset($_POST['feature_box_meta_nonce']) || !wp_verify_nonce($_POST['feature_box_meta_nonce'], 'save_feature_box_meta')) {
        return;
    }

    // Prevent auto-save from overwriting
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Ensure user has permission to edit
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sanitize and save the icon class
    if (isset($_POST['feature_icon_class'])) {
        update_post_meta($post_id, '_feature_icon_class', sanitize_text_field($_POST['feature_icon_class']));
    }

    // Sanitize and save the background color
    if (isset($_POST['feature_background_color'])) {
        update_post_meta($post_id, '_feature_background_color', sanitize_text_field($_POST['feature_background_color']));
    }

    // Sanitize and save the animation delay
    // if (isset($_POST['feature_animation_delay'])) {
    //     update_post_meta($post_id, '_feature_animation_delay', intval($_POST['feature_animation_delay']));
    // }
}
add_action('save_post', 'save_feature_box_meta');






// feature cards2 section  with icon meta box

// features cards section
function feature_card2(){
  register_post_type ('features_cards2',
    array(
      'labels' => array(
        'name' => ('Features cards-2'),
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
      'rewrite' => array('slag' => 'features_cards2'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'feature_card2');


function feature2_box_meta_boxes() {
  add_meta_box(
      'feature2_box_details',           // Meta box ID
      'Feature2 Box Details',           // Meta box title
      'render_feature2_box_meta_box',   // Callback function to render the box
      'features_cards2',                   // Post type
      'normal',                        // Context (normal, side, or advanced)
      'high'                           // Priority
  );
}
add_action('add_meta_boxes', 'feature2_box_meta_boxes');


// Render Meta Box feature cards
function render_feature2_box_meta_box($post) {
  // Retrieve current values for the fields (if they exist)
  $icon_class = get_post_meta($post->ID, '_feature_icon_class', true);
  
  // $animation_delay = get_post_meta($post->ID, '_feature_animation_delay', true);

  // Security nonce for saving
  wp_nonce_field('save_feature2_box_meta', 'feature2_box_meta_nonce');

  ?>
  <p>
      <label for="feature_icon_class">Icon Class (e.g., "bi bi-award"):</label><br>
      <input type="text" id="feature_icon_class" name="feature_icon_class" value="<?php echo esc_attr($icon_class); ?>" style="width: 100%;">
  </p>
 
  <!-- <p>
      <label for="feature_animation_delay">Animation Delay (in ms, e.g., "100"):</label><br>
      <input type="number" id="feature_animation_delay" name="feature_animation_delay" value="<?php //echo esc_attr($animation_delay); ?>" style="width: 100%;">
  </p> -->
  <?php
}

// Save Meta Box
function save_feature2_box_meta($post_id) {
  // Check for nonce security
  if (!isset($_POST['feature2_box_meta_nonce']) || !wp_verify_nonce($_POST['feature2_box_meta_nonce'], 'save_feature2_box_meta')) {
      return;
  }

  // Prevent auto-save from overwriting
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  // Ensure user has permission to edit
  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  // Sanitize and save the icon class
  if (isset($_POST['feature_icon_class'])) {
      update_post_meta($post_id, '_feature_icon_class', sanitize_text_field($_POST['feature_icon_class']));
  }

 

  // Sanitize and save the animation delay
  // if (isset($_POST['feature_animation_delay'])) {
  //     update_post_meta($post_id, '_feature_animation_delay', intval($_POST['feature_animation_delay']));
  // }
}
add_action('save_post', 'save_feature2_box_meta');

//end of feature cards-2 section with meta box




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



  
// service icon metabox add
function add_service_meta_box() {
  add_meta_box(
      'service_icon',
      'Service icon',
      'render_service_icon_meta_box',
      'service', // Change 'hero' to your post type if needed
      'side',
      'default'
  );
}
add_action('add_meta_boxes', 'add_service_meta_box');

function render_service_icon_meta_box($post) {
  // Use nonce for verification
  wp_nonce_field('save_service_icon_meta', 'service_icon_meta_nonce');
  
  // Get existing value
  $icon = get_post_meta($post->ID, '_service_icon', true);
  
  // Render input
  echo '<p><label for="service_icon">service_title</label></p>';
  echo '<input type="text" id="service_icon" name="service_icon" value="' . esc_attr($icon) . '" style="width: 100%;">';
}

function save_service_icon($post_id) {
  // Verify nonce
  if (!isset($_POST['service_icon_meta_nonce']) || !wp_verify_nonce($_POST['service_icon_meta_nonce'], 'save_service_icon_meta')) {
      return;
  }
  
  // Save designation
  if (isset($_POST['service_icon'])) {
      update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
  }
}
add_action('save_post', 'save_service_icon');

// service details
function custom_service_details(){
  register_post_type ('service_details',
    array(
      'labels' => array(
        'name' => ('Services_details'),
        'singular_name' => ('Service_details'),
        'add_new' => ('Add New Service_details'),
        'add_new_item' => ('Add New Service_details'),
        'edit_item' => ('Edit Service_details'),
        'delete_item' =>('Delete Service_details'),
        'new_item' => ('New Service_details'),
        'view_item' => ('View Service_details'),
        'not_found' => ('Sorry, we could not find the Service_details you are looking for.'),
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
      'rewrite' => array('slag' => 'service_details'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_service_details');


// stats section 

function custom_stats(){
  register_post_type ('stats',
    array(
      'labels' => array(
        'name' => ('stats'),
        'singular_name' => ('stats'),
        'add_new' => ('Add New stats'),
        'add_new_item' => ('Add New stats'),
        'edit_item' => ('Edit stats'),
        'delete_item' =>('Delete stats'),
        'new_item' => ('New stats'),
        'view_item' => ('View stats'),
        'not_found' => ('Sorry, we could not find the stats you are looking for.'),
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
      'rewrite' => array('slag' => 'stats'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_stats');


function add_stats_meta_box() {
  add_meta_box(
      'stats',
      'stats',
      'render_stats_meta_box',
      'stats', // Change 'stats' to your post type if needed
      'side',
      'default'
  );
}
add_action('add_meta_boxes', 'add_stats_meta_box');

function render_stats_meta_box($post) {
  // Use nonce for verification
  wp_nonce_field('save_stats', 'stats_nonce');
  
  // Get existing value
  $stats = get_post_meta($post->ID, '_stats', true);
  
  // Render input
  echo '<p><label for="stats">data-purecounter-end</label></p>';
  echo '<input type="number" id="stats" name="stats" value="' . esc_attr($stats) . '" style="width: 100%;">';
}

function save_stats($post_id) {
  // Verify nonce
  if (!isset($_POST['stats_nonce']) || !wp_verify_nonce($_POST['stats_nonce'], 'save_stats')) {
      return;
  }
  
  // Save designation
  if (isset($_POST['stats'])) {
      update_post_meta($post_id, '_stats', sanitize_text_field($_POST['stats']));
  }
}
add_action('save_post', 'save_stats');




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
  // Retrieve current values for the fields (if they exist)
  $designation = get_post_meta($post->ID, '_testimonial_designation', true);
  $stars = get_post_meta($post->ID, '_testimonial_stars', true);
  // $animation_delay = get_post_meta($post->ID, '_feature_animation_delay', true);

  // Security nonce for saving
  wp_nonce_field('save_testimonial_designation','testimonial_designation_nonce');

  ?>
  <p>
      <label for="testimonial_designation">Designation</label><br>
      <input type="text" id="testimonial_designation" name="testimonial_designation" value="<?php echo esc_attr($designation); ?>" style="width: 100%;">
  </p>
  <p>
      <label for="testimonial_stars">Testimonial_stars Num : </label><br>
      <input type="number" id="testimonial_stars" name="testimonial_stars" value="<?php echo esc_attr($stars); ?>" style="width: 100%;">
  </p>
  <!-- <p>
      <label for="feature_animation_delay">Animation Delay (in ms, e.g., "100"):</label><br>
      <input type="number" id="feature_animation_delay" name="feature_animation_delay" value="<?php //echo esc_attr($animation_delay); ?>" style="width: 100%;">
  </p> -->
  <?php
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
    // Save designation
    if (isset($_POST['testimonial_stars'])) {
      update_post_meta($post_id, '_testimonial_stars', sanitize_text_field($_POST['testimonial_stars']));
  }
}
add_action('save_post', 'save_testimonial_designation');



// hero des multiple meta box settings
function add_multiple_meta_boxes_hero_des() {
  // First Meta Box
  add_meta_box(
      'meta_box_one',              // Unique ID for the first meta box
      'Hero description',              // Title of the meta box
      'meta_box_one_callback',     // Callback function to display the field
      'hero_des',                  // Post type (use 'post', 'page', or custom post type slug)
      'normal',                    // Context ('normal', 'side', or 'advanced')
      'high'                       // Priority
  );

  // Second Meta Box
  add_meta_box(
      'meta_box_two',              // Unique ID for the second meta box
      'Clients des:  ',              // Title of the meta box
      'meta_box_two_callback',     // Callback function to display the field
      'hero_des',                  // Post type (use 'post', 'page', or custom post type slug)
      'normal',                    // Context ('normal', 'side', or 'advanced')
      'high'                       // Priority
  );
}
add_action('add_meta_boxes', 'add_multiple_meta_boxes_hero_des');


function meta_box_one_callback($post) {
  // Retrieve existing value (if any)
  $value_one = get_post_meta($post->ID, '_meta_box_one_key', true);

  // Display the field
  ?>
  <label for="meta_box_one_field">Field One:</label>
  <input type="text" id="meta_box_one_field" name="meta_box_one_field" value="<?php echo esc_attr($value_one); ?>" style="width:100%;">
  <?php
}


function meta_box_two_callback($post) {
  // Retrieve existing value (if any)
  $value_two = get_post_meta($post->ID, '_meta_box_two_key', true);

  // Display the field
  ?>
  <label for="meta_box_two_field">Field Two:</label>
  <textarea id="meta_box_two_field" name="meta_box_two_field" rows="4" style="width:100%;"><?php echo esc_textarea($value_two); ?></textarea>
  <?php
}

function save_meta_boxes_data($post_id) {
  // Save data for Meta Box One
  if (isset($_POST['meta_box_one_field'])) {
      $value_one = sanitize_text_field($_POST['meta_box_one_field']);
      update_post_meta($post_id, '_meta_box_one_key', $value_one);
  }

  // Save data for Meta Box Two
  if (isset($_POST['meta_box_two_field'])) {
      $value_two = sanitize_textarea_field($_POST['meta_box_two_field']);
      update_post_meta($post_id, '_meta_box_two_key', $value_two);
  }
}
add_action('save_post', 'save_meta_boxes_data');


// for faq section custom post
function faq(){
  register_post_type ('faq',
    array(
      'labels' => array(
        'name' => ('FAQ'),
        'singular_name' => ('FAQ'),
        'add_new' => ('Add New FAQ'),
        'add_new_item' => ('Add New FAQ'),
        'edit_item' => ('Edit FAQ'),
        'delete_item' =>('Delete FAQ'),
        'new_item' => ('New FAQ'),
        'view_item' => ('View FAQ'),
        'not_found' => ('Sorry, we could not find the FAQ that you are looking for.'),
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
      'rewrite' => array('slag' => 'faq'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'faq');


