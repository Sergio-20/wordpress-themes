<?php
 function wpb_customize_register($wp_customize)
 {
   //Showcase Section
   $wp_customize->add_section('showcase', array(
     'title' => __('Showcase', 'wp-bootstrap'),
     'description' => sprintf( __('Options for showcase', 'wpbootstrap') ),
     'priority' => 130
   ));

   $wp_customize->add_setting('showcase_image', array(
     'default' => _x(get_bloginfo('template_directory').'/img/showcase.jpg', 'wp-bootstrap'),
     'type' => 'theme_mod'
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image',array(
     'label' => __('Showcase Image', 'wp-bootstrap'),
     'section' => 'showcase',
     'settings' => 'showcase_image',
     'priority' => 1
   )));

   $wp_customize->add_setting('showcase_heading', array(
     'default' => _x('Custom Bootstrap WordPress Theme', 'wp-bootstrap'),
     'type' => 'theme_mod'
   ));

   $wp_customize->add_control('showcase_heading', array(
     'label' => __('Heading', 'wp-bootstrap'),
     'section' => 'showcase',
     'priority' => 2
   ));

   $wp_customize->add_setting('showcase_text', array(
     'default' => _x('Simple, yet elegant.', 'wp-bootstrap'),
     'type' => 'theme_mod'
   ));

   $wp_customize->add_control('showcase_text', array(
     'label' => __('Text', 'wp-bootstrap'),
     'section' => 'showcase',
     'priority' => 3
   ));

   $wp_customize->add_setting('button_url', array(
     'default' => _x('https://www.google.com', 'wp-bootstrap'),
     'type' => 'theme_mod'
   ));

   $wp_customize->add_control('button_url', array(
     'label' => __('Button URL', 'wp-bootstrap'),
     'section' => 'showcase',
     'priority' => 4
   ));

   $wp_customize->add_setting('button_text', array(
     'default' => _x('Read More', 'wp-bootstrap'),
     'type' => 'theme_mod'
   ));

   $wp_customize->add_control('button_text', array(
     'label' => __('Button Text', 'wp-bootstrap'),
     'section' => 'showcase',
     'priority' => 5
   ));

 }

 add_action('customize_register', 'wpb_customize_register');
