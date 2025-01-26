<?php 
function arif_widgets_register(){
    register_sidebar(array(
        'name' => __('Footer Address', 'arifulislam'),
        'id'   => 'footer-address',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'arifulislam'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
        ));
    register_sidebar(array(
      'name' => __('Footer 1', 'arifulislam'),
      'id'   => 'footer-1',
      'description' => __('Apperas in the sidebar in blog page and also other page', 'arifulislam'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
      ));
    register_sidebar(array(
      'name' => __('Footer 2', 'arifulislam'),
      'id'   => 'footer-2',
      'description' => __('Apperas in the sidebar in blog page and also other page', 'arifulislam'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
      ));
    register_sidebar(array(
      'name' => __('Footer 3', 'arifulislam'),
      'id'   => 'footer-3',
      'description' => __('Apperas in the sidebar in blog page and also other page', 'arifulislam'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
      'after_title' => '</h2>',
      ));
  
      register_sidebar(array(
        'name' => __('Footer 4', 'arifulislam'),
        'id'   => 'footer-4',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'arifulislam'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
        ));
        
        
  }
  
  add_action('widgets_init', 'arif_widgets_register');
  
  
  