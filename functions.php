<?php

function awesome_script_enqueue() {
  //include scripts (js or css) in the resulting html doc.
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/css-main.css', array(), '1.0.0', 'all');
  //css
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/js-main.js', array(), '1.0.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
  wp_enqueue_script('jquery');
  //js
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');
//executes the script inclusion process

function awesome_theme_setup() {
  //adds the wp menu feature to the admin section and registers two nav menus that can be customised in the admin section.
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary header navigation');
  register_nav_menu('footer', 'Footer menu');
}

add_action('init', 'awesome_theme_setup');
//exectues the theme setup on initialization.

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5',array('search-form'));
//adds theme support for the listed functionalities.

function awesome_widget_setup() {
  register_sidebar(array(
    'name'=> 'Sidebar',
    'id'=> 'sidebar-1',
    'class'=> 'custom',
    'description'=> 'Standard sidebar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</li>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>' )

  );
}

add_action('widgets_init','awesome_widget_setup');

/*include walker file */
require get_template_directory() . '/inc/walker.php';

/*head functions */
function theme_remove_function() {
  return '';
}

add_filter('the_generator', 'theme_remove_function');

?>
