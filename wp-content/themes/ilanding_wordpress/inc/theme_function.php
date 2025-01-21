<?php

function arif_customizar_register($wp_customize){

 
 // Footer Option
  $wp_customize->add_section('arif_footer_option', array(
    'title' => __('Footer Option', 'alihossain'),
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



}
add_action('customize_register', 'arif_customizar_register');

