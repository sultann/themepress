<?php
/**
 * @package themeeo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
        
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php themeeo_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>
        
	</header><!-- .entry-header -->

       <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
		<div class="entry-content">

	            <?php
	                the_excerpt();
	            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'themeeo' ),
					'after'  => '</div>',
				) );
			?>
	        
		</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php themeeo_entry_footer(); ?>
		
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->