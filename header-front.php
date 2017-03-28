<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package themeeo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title"
          content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

    <div class="home-nav">
        <img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png';?>" alt="">
	    <?php wp_nav_menu(
		    array(
			    'theme_location'  => 'primary',
			    'container_class' => 'container home-menu',
			    'menu_class'      => 'nav navbar-nav',
			    'fallback_cb'     => '',
			    'menu_id'         => 'main-menu',
			    'walker'          => new wp_bootstrap_navwalker()
		    )
	    ); ?>
        <div class="form">

            <div class="home-solo">
                <h3>Katong Maid Agency services the community in
                    Katong with the right maid for 20 years</h3>
            </div>
		    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
        </div>
        <img class="width100" src="<?php echo get_stylesheet_directory_uri().'/images/main.jpg';?>" alt="">

    </div>




