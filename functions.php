<?php
/*-----------------------------------------------------------------------------------*/
/* Options Framework Functions
/*-----------------------------------------------------------------------------------*/
/* Set the file path based on whether the Options Framework is in a parent theme or child theme */
if ( STYLESHEETPATH == TEMPLATEPATH ) {
	define('OF_FILEPATH', TEMPLATEPATH);
	define('OF_DIRECTORY', get_bloginfo('template_directory'));

} else {
	define('OF_FILEPATH', STYLESHEETPATH);
	define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}
/* These files build out the options interface.  Likely won't need to edit these. */

//require_once (OF_FILEPATH . '/admin/admin-functions.php');		// Custom functions and plugins
//require_once (OF_FILEPATH . '/admin/admin-interface.php');		// Admin Interfaces (options,framework, seo)

/* These files build out the theme specific options and associated functions. */
//require_once (OF_FILEPATH . '/admin/theme-options.php'); 		// Options panel settings and custom settings
//require_once (OF_FILEPATH . '/theme-options/themeoptions.php'); 	// Theme actions based on options settings

function tutsplus_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Top Text Area', 'tutsplus' ),
        'id' => 'header-area',
        'description' => __( 'The Header area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Top Flag Area', 'tutsplus' ),
        'id' => 'top-flag-area',
        'description' => __( 'The Top flag area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Top Search Area', 'tutsplus' ),
        'id' => 'search-area',
        'description' => __( 'The Search area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Top Login & Donate Area', 'tutsplus' ),
        'id' => 'login-donate-area',
        'description' => __( 'The Login & Donate link area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	
	 register_sidebar( array(
        'name' => __( 'Header Logo Area', 'tutsplus' ),
        'id' => 'header-logo-area',
        'description' => __( 'The Header Logo area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	 register_sidebar( array(
        'name' => __( 'Footer Area - 1', 'tutsplus' ),
        'id' => 'footer-area-1',
        'description' => __( 'The Footer area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	 register_sidebar( array(
        'name' => __( 'Footer Area - 2', 'tutsplus' ),
        'id' => 'footer-area-2',
        'description' => __( 'The Footer area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	 register_sidebar( array(
        'name' => __( 'Footer Area - 3', 'tutsplus' ),
        'id' => 'footer-area-3',
        'description' => __( 'The Footer area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	 register_sidebar( array(
        'name' => __( 'Copyright Area', 'tutsplus' ),
        'id' => 'copyright-area',
        'description' => __( 'The Copyright Text area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	 register_sidebar( array(
        'name' => __( 'Slider Area', 'tutsplus' ),
        'id' => 'slider-area',
        'description' => __( 'The Slider Widget area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	 register_sidebar( array(
        'name' => __( 'Donate Text & Button Area', 'tutsplus' ),
        'id' => 'donate-text-area',
        'description' => __( 'The Donate text area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Services Area', 'tutsplus' ),
        'id' => 'services-area',
        'description' => __( 'The Services area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	register_sidebar( array(
        'name' => __( 'News Title Area', 'tutsplus' ),
        'id' => 'news-title-area',
        'description' => __( 'The Just World News Title Area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Background Section - 4 Area', 'tutsplus' ),
        'id' => 'background-section4-area',
        'description' => __( 'The Background for section - 4 area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Social Area', 'tutsplus' ),
        'id' => 'social-area',
        'description' => __( 'The social area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	register_sidebar( array(
        'name' => __( 'Email News Latter Area', 'tutsplus' ),
        'id' => 'news-latter-area',
        'description' => __( 'The News Latter area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Right Sidebar Just World Area', 'tutsplus' ),
        'id' => 'right-sidebar-justworld',
        'description' => __( 'The Just World area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	 register_sidebar( array(
        'name' => __( 'Right Sidebar News Latter Area', 'tutsplus' ),
        'id' => 'right-sidebar-newslatter',
        'description' => __( 'The Right Sidebar News Letter area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Right Sidebar Map Area', 'tutsplus' ),
        'id' => 'right-sidebar-map',
        'description' => __( 'The Right Sidebar Map Image area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	
	
	register_sidebar( array(
        'name' => __( 'Right Sidebar Video Area', 'tutsplus' ),
        'id' => 'right-sidebar-video',
        'description' => __( 'The Right Sidebar video area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

	
	register_sidebar( array(
        'name' => __( 'Right Sidebar Categories Area', 'tutsplus' ),
        'id' => 'right-sidebar-category',
        'description' => __( 'The Right Sidebar Categories area', 'tutsplus' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
         
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'tutsplus_widgets_init' );
//add dynamic menu
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(180);

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
/* ---------- For Home Page class in Body ---------- */
add_filter('body_class', 'multisite_body_classes');
function multisite_body_classes($classes) {
    if((is_front_page()) || (is_page('landing-page'))){
        $classes[] = 'landing-page';
    } elseif(is_page('home')){
        $classes[] = 'home-only';
    } else {
        $classes[] = 'innter-page';
    }
     return $classes;
}
/* ----------- End ---------- */