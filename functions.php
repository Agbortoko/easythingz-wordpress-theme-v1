<?php

/**
 * @since easythingz v1.0
 * Including Easythingz Styles and Scripts
    Stylesheet
    Font
    JavaScript
 */

function easythingz_assets_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/assets/dist/style.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800;900&display=swap', array(), '1.0.0','all');

   //  wp_enqueue_script('customjs', get_template_directory_uri().'/assets/app/js/app.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'easythingz_assets_enqueue');


/**
 * @since easythingz v1.0
 * Activate theme support
    Activate Menus Section
    Register Menus

    Custom Background
    Custom Header
    Custom Post thumbnails
    Custom logo
    Post formats
    Widgets Registration

 */

 function easythingz_theme_setup(){

    add_theme_support('menus');
    register_nav_menu( 'primary', 'Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
 }

 add_action('init', 'easythingz_theme_setup');

 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('post-thumbnails');


function easythingz_custom_logo() {
	
	add_theme_support( 'custom-logo', array(
		'height' => 100,
	   'width'  => 200,
	) );

}
add_action( 'init', 'easythingz_custom_logo' );

add_theme_support('post-formats', ['aside', 'image', 'video']);
add_theme_support('html5',  ['search-form']);

function easythingz_widget_setup(){

   register_sidebar( [
      'name' => 'Newsletter Sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => __('Newsletter sidebar section'),
      'before_widget' => '<section id="%1$s" class="sidebar__widget-content %2$s">',
		'after_widget'  => '</section>',
      'before_title'  => '<header><h3 class="widget-title">',
		'after_title'   => '</h3></header>',
		
   ] );


   register_sidebar( [
      'name' => 'Social Sidebar',
      'id' => 'sidebar-2',
      'class' => 'custom',
      'description' => __('Sidebar for social icons'),
      'before_widget' => '<section id="%1$s" class="sidebar__widget-content %2$s">',
		'after_widget'  => '</section>',
      'before_title'  => '<header><h3 class="widget-title">',
		'after_title'   => '</h3></header>',
		
   ] );



   register_sidebar( [
      'name' => 'Disclaimer Sidebar',
      'id' => 'sidebar-3',
      'class' => 'custom',
      'description' => __('sidebar for disclaimer'),
      'before_widget' => '<section id="%1$s" class="sidebar__widget-content %2$s">',
		'after_widget'  => '</section>',
      'before_title'  => '<header><h3 class="widget-title">',
		'after_title'   => '</h3></header>',
		
   ] );




   register_sidebar( [
      'name' => 'Ads Sidebar 1',
      'id' => 'sidebar-4',
      'class' => 'custom',
      'description' => __('Sidebar for ads'),
      'before_widget' => '<section id="%1$s" class="sidebar__widget-content %2$s">',
		'after_widget'  => '</section>',
      'before_title'  => '<header><h3 class="widget-title">',
		'after_title'   => '</h3></header>',
		
   ] );

}

add_action('widgets_init', 'easythingz_widget_setup');


/**
 * ===========================================
 *      Include Walker File
 * ===========================================
 */

 require get_template_directory() . '/inc/class-nav-walker.php';


 /**
 * ===========================================
 *      Head Function
 *    remove version generator meta tag
 * ===========================================
 */

 function easythingz_remove_version(){
      return '';
 }

 add_filter('the_generator', 'easythingz_remove_version');


  /**
 * ===========================================
 *  Custom Post type
 * ===========================================
 */


 function easythingz_custom_post_type(){

   $labels = [
      'name' => 'Courses',
      'singular_name' => 'Course',
      'add_new' => 'Add Course',
      'all_items' => 'All Courses',
      'add_new_item' => 'Add Course',
      'edit_item' => 'Edit Course',
      'new_item' => 'New Course',
      'view_item' => 'View Course',
      'search_item' => 'Search Course',
      'not_found' => 'No Course Found',
      'not_found_in_trash' => 'No Course found in trash',
      'parent_item_colon' => 'Parent Course'
   ];

   
   $args = [

      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'show_in_nav_menus' => true,
      'show_in_admin_bar',

      'supports' => [
         'title',
         'editor',
         'excerpt',
         'thumbnail',
         'revisions',
         'custom-fields',
         'trackbacks'
      ],

      'menu_position' => 5,
      'exclude_from_search' => false

   ];



   register_post_type( 'course', $args );

 }


 add_action('init', 'easythingz_custom_post_type');














