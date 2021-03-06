<?php 

function set_excerpt_length(){
    return 25; //the number of words you want displayed
}
add_filter('excerpt_length','set_excerpt_length');

//damit fotos erstellt werden können
add_theme_support('post-thumbnails');

//Widget - erstellen
function wpb_init_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
         ));    
 }
 add_action('widgets_init', 'wpb_init_widgets');

function traveler_files(){

//register jQuery
wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.0.min.js', array(),'1.0', true);

// register bootstrap.css file
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
// register bootstrap.js file
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array(),'1.0', true);
// register style.css file
wp_enqueue_style('my-style-sheet', get_template_directory_uri().'/style.css');
}

//add the action of calling traveler_files when the scripts are loaded
add_action('wp_enqueue_scripts', 'traveler_files');

/**
* Register Custom Navigation Walker
*/
function register_navwalker(){

    // register the navwalker file
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
'navbar' => __( 'Navbar'),
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );

?>