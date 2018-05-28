<?php

function learnwp_customizer( $wp_customize ){

  //Copyright Information ...
  $wp_customize-> add_section( 'sec_copyright', array(
    'title' => 'Copyright',
    'description' => 'Please, type your copyright'
  ) );

  $wp_customize-> add_setting( 'set_copyright', array(
    'type' => 'theme_mod',
    'default' => 'Copyright X - All Rights Reserved',
    'sanitize_callback' => 'esc_attr'
  ) );

  $wp_customize-> add_control( 'ctrl_copyright', array(
    'label' => 'Copyright Information',
    'description' => 'Please, type your copyright here',
    'section' => 'sec_copyright',
    'settings' => 'set_copyright',
    'type' => 'text'
  ) );

  //Map
  $wp_customize-> add_section( 'sec_map', array(
    'title' => 'Map',
    'description' => 'The Map Section'
  ) );

  $wp_customize-> add_setting( 'set_map_apikey', array(
    'type' => 'theme_mod',
    'default' => '',
    'sanitize_callback' => 'esc_attr'
  ) );

  $wp_customize-> add_control( 'ctrl_map_apikey', array(
    'label' => 'Google Maps API Key',
    'description' => 'Get You API Key',
    'section' => 'sec_map',
    'settings' => 'set_map_apikey',
    'type' => 'text'
  ) );

  //Map Address

  $wp_customize-> add_setting( 'set_map_address', array(
    'type' => 'theme_mod',
    'default' => '',
    'sanitize_callback' => 'esc_textarea'
  ) );

  $wp_customize-> add_control( 'ctrl_map_address', array(
    'label' => 'Type your address here',
    'description' => 'Np special characters allowed',
    'section' => 'sec_map',
    'settings' => 'set_map_address',
    'type' => 'textarea'
  ) );


}

add_action( 'customize_register', 'learnwp_customizer');
