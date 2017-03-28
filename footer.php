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
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/logo-white.png'; ?>" alt="">
                    <p>Vivamus sollicitudin molestie nunc, vulputate lobortis eros efficitur quis. Curabitur vel laoreet nisi. Integer eu quam consectetur, cursus nisl id, cursus nisi. Duis interdum, massa id pharetra sodales, justo nibh auctor urna, vel semper urna odio quis orci. Sed consectetur feugiat eleifend.</p>
                </div>
                <div class="col-md-4"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                <div class="col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <footer id="colophon" class="site-footer" role="contentinfo">
                        <div class="site-info">
                            <p class="text-xs-center">&copy copyright 2017. All right reserved.</p>
                        </div><!-- .site-info -->

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->

        </div><!-- container end -->
    </div>

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
