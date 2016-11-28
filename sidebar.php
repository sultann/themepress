<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themeeo
 */

if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="ol-sm-12 col-md-4 col-lg-3 widget-area" role="complementary">

	<?php dynamic_sidebar( 'blog_sidebar' ); ?>
	
</div><!-- #secondary -->
