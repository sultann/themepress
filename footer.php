<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package themeeo
 */
 $the_theme = wp_get_theme();
?>

<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'themeeo' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'themeeo' ), 'WordPress' ); ?></a>
                        <span class="sep"> | </span>
                        <?php printf( __( 'Theme: %1$s by %2$s.', 'themeeo' ), $the_theme->get( 'Name' ), '<a href="http://themeeo.com/" rel="designer">themeeo.com</a>' ); ?>
                        (<?php printf( __( 'Version: %1$s', 'themeeo' ), $the_theme->get( 'Version' ) ); ?>)
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
