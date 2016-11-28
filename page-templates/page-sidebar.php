<?php
/**
 * Template Name: Page with sidebar
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package themeeo
 */

get_header(); ?>

    <div class="wrapper" id="page-wrapper">

        <div  id="content" class="container mt100">

            <div class="row">

                <div id="primary" class="<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>col-sm-12 col-md-8 col-lg-9<?php else : ?>col-md-12<?php endif; ?> content-area">

                    <main id="main" class="site-main" role="main">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php endwhile; // end of the loop. ?>

                    </main><!-- #main -->

                </div><!-- #primary -->

                <?php get_sidebar(); ?>

            </div><!-- .row -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>