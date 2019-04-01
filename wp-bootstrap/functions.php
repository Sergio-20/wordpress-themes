 <?php

 //Register Nav Walker Class_Alias
 require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

 //Theme Support
 function wpb_theme_support()
 {

   add_theme_support("post-thumbnails");

   register_nav_menus( array(
     'primary' => __( 'Primary Menu', 'wp-bootstrap' ),
   ) );

   //Post Formats
   add_theme_support('post-formats', array('aside', 'gallery') );

 }

 add_action("after_setup_theme", "wpb_theme_support");
 //add_action() is used to create something.
 //add_filter() is used to edit something.

 //Set the amount of words the excerpt will display.
 function set_excerpt_length()
 {
   return 40;
 }

 add_filter("excerpt_length", "set_excerpt_length");

 //Widget Locations
 function wpb_init_widgets($id) {
  register_sidebar(array(
    'name' => 'sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Box1',
    'id' => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'Box2',
    'id' => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'Box3',
    'id' => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

 }

 add_action('widgets_init', 'wpb_init_widgets');

 //Customizer File
 require get_template_directory() . '/inc/customizer.php';
