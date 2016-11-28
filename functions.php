<?php
#-----------------------------------------------------------------#
# Theme constants
#-----------------------------------------------------------------#
define( 'THM_THEME_DIR', dirname( __FILE__ ) );
define( 'THM_THEME_VER', '0.01' );
define( 'THM_THEME_INC_DIR', dirname( __FILE__ ) . '/inc' );
define( 'THM_THEME_FRAMEWORK_DIR', dirname( __FILE__ ) . '/framework' );
define( 'THM_TEXT_DOMAIN', 'themeeo' );


#-----------------------------------------------------------------#
# Localization
#-----------------------------------------------------------------#
add_action( 'after_setup_theme', 'lang_setup' );
function lang_setup() {
    load_theme_textdomain( THM_TEXT_DOMAIN, get_template_directory() . '/lang' );
}

#-----------------------------------------------------------------#
# Add Theme supports
#-----------------------------------------------------------------#

if ( ! function_exists( 'themeeo_after_setup' ) ):
    function themeeo_after_setup() {
        if ( ! isset( $content_width ) ) $content_width = 750; // default content width

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_editor_style();

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( "post-thumbnails" );

        //register custom image sizes
        //add_image_size( 'thumbnail', 150, 125, true );

        add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
        ) );

    }
endif;
add_action( 'after_setup_theme', 'themeeo_after_setup' );


#-----------------------------------------------------------------#
# Menu
#-----------------------------------------------------------------#
if(!function_exists('published_main_menu')):
    function published_main_menu() {
        register_nav_menu('primary', __('Primary Navigation','published'));
    }
endif;
add_action('init', 'published_main_menu');
require_once (THM_THEME_INC_DIR.'/bootstrap-wp-navwalker.php');



#-----------------------------------------------------------------#
# Register/Enqueue JS
#-----------------------------------------------------------------#
function themeeo_scripts() {
    // Load stylesheets
    wp_register_style('theme-style', get_template_directory_uri() . '/css/style.css',array('bootstrap'));
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_register_style('tether', get_template_directory_uri() . '/css/tether.min.css');
    wp_register_style('responsive-styles', get_template_directory_uri() . '/css/responsive.css',array('bootstrap'));

    wp_enqueue_style('tether');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('style-dynamic');
    wp_enqueue_style('responsive-styles');
    wp_enqueue_style('theme-style');

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    // Load jQuery scripts
    wp_register_script('custom', get_template_directory_uri() . '/js/jquery.custom.js', array('jquery'));
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'));
    wp_register_script('tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'));
//    wp_register_script('wow-js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'));
//    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery') );


    wp_enqueue_script('jquery');
    wp_enqueue_script('tether');
    wp_enqueue_script('bootstrap', '', '', '', true);
    wp_enqueue_script('owl-carousel', '', '', '', true);
    wp_enqueue_script('tether', '', '', '', true);
    wp_enqueue_script('custom', '', '', '', true);

}

add_action( 'wp_enqueue_scripts', 'themeeo_scripts' );



#-----------------------------------------------------------------#
# Widgets
#-----------------------------------------------------------------#
if(!function_exists('themeeo_widget_init')):
    function themeeo_widget_init() {
        register_sidebar(array(
            'name' => __('Page Sidebar','published'),
            'id' => 'page_sidebar',
            'before_widget' => '<aside id="%1$s" class="widget side %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => __('Blog Sidebar','published'),
            'id' => 'blog_sidebar',
            'before_widget' => '<aside id="%1$s" class="widget side %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
        register_sidebar( array(
            'name'          => __( 'Footer Area 1', 'published' ),
            'id'            => 'footer-1',
            'description'   => 'Footer 1 Widget Area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Area 2', 'published' ),
            'id'            => 'footer-2',
            'description'   => 'Footer 2 Widget Area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Area 3', 'published' ),
            'id'            => 'footer-3',
            'description'   => 'Footer 3 Widget Area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );


        register_sidebar( array(
            'name'          => __( 'Footer Area 4', 'published' ),
            'id'            => 'footer-4',
            'description'   => 'Footer 4 Widget Area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );


    }
endif;
add_action( 'widgets_init', 'themeeo_widget_init' );
#-----------------------------------------------------------------#
# Shortcode support for widgets
#-----------------------------------------------------------------#
add_filter('widget_text', 'do_shortcode');

#-----------------------------------------------------------------#
# Required files
#-----------------------------------------------------------------#
require THM_THEME_INC_DIR.'/extra-functions.php';

