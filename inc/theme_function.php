<?php

function arif_customizar_register($wp_customize){

 
 // Footer Option
  $wp_customize->add_section('arif_footer_option', array(
    'title' => __('Footer Option', 'arifulislam'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('arif_copyright_section', array(
    'default' => '© Copyright Md Ariful Islam All Rights Reserved',
  ));

  $wp_customize-> add_control('arif_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'arif_copyright_section',
    'section' => 'arif_footer_option',
  ));

  // Hero image customize
  $wp_customize->add_section('arif_hero', array(
    'title' =>__('Hero Section', 'arifulislam'),
    'description' => 'If you interested to update your hero section image, you can do it here.'
  ));

  $wp_customize->add_setting('hero_image', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
    'label' => 'Image Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'hero_image',
    'section' => 'arif_hero',
  ) ));
  // avators
  $wp_customize->add_setting('avator1', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'avator1', array(
    'label' => 'avator1 Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'avator1',
    'section' => 'arif_hero',
  ) ));

  $wp_customize->add_setting('avator2', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'avator2', array(
    'label' => 'avator2 Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'avator2',
    'section' => 'arif_hero',
  ) ));

  $wp_customize->add_setting('avator3', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'avator3', array(
    'label' => 'avator3 Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'avator3',
    'section' => 'arif_hero',
  ) ));
  $wp_customize->add_setting('avator4', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'avator4', array(
    'label' => 'avator4 Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'avator4',
    'section' => 'arif_hero',
  ) ));
  $wp_customize->add_setting('avator5', array(
    'default' => get_bloginfo('template_directory') . '/img/features-illustration-2.jpg',
  ));
 
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'avator5', array(
    'label' => 'avator5 Upload',
    'description' => 'If you interested to change or update your hero section image, you can do it.',
    'setting' => 'avator5',
    'section' => 'arif_hero',
  ) ));

// theme background color
 // Theme color sections
 $wp_customize->add_section('arif_color', array(
  'title' => __('Theme colors', 'alihossain'),
  'description' => 'If you interested to change or update your theme color you can do it.'
));
//for backgroud color
$wp_customize->add_setting('arif_bg_color', array(
  'default' => '#ffffff', // Default color (white)
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'arif_bg_color', array(
'label' => 'Backgroud Color',
'section' => 'arif_color',
'settings' => 'arif_bg_color',
)));



}

function arif_theme_color_cus(){
  ?> 
  <style>
    body{background: <?php echo get_theme_mod('arif_bg_color');?>}
   
    </style>
  <?php
}
add_action('customize_register', 'arif_customizar_register');