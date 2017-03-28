<?php
/**
 * Template Name: Home Page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package themeeo
 */

get_header('home'); ?>
    <div class="wrapper" id="full-width-page-wrapper">

        <div  id="content" class="">

            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">



                    <div class="three-steps section text-xs-center">

                        <div class="container">
                          <div class="row">
                              <h2>Katong Maid Agency</h2>
                              <h3 class="font-weight-light">Source your maid in these 3 steps</h3>
                          </div>
                            <div class="row mt-30">
                                <div class="col-md-4">
                                    <h4>Free Call Back</h4>
                                    <img src="<?php echo get_stylesheet_directory_uri().'/images/call-back.png';?>" alt="call back" class="img-responsive">
                                    <p>Through our call back service, Katong Maid Agency will understand your needs and preferences for a maid.</p>
                                </div>
                                <div class="col-md-4">
                                    <h4>Search</h4>
                                    <img src="<?php echo get_stylesheet_directory_uri().'/images/search.png';?>" alt="call back" class="img-responsive">
                                    <p>Katong maid agency is equipped with the expertise and the experience to find you the most suitable maid. </p>
                                </div>
                                <div class="col-md-4">
                                    <h4>Hire</h4>
                                    <img src="<?php echo get_stylesheet_directory_uri().'/images/hire.png';?>" alt="call back" class="img-responsive">
                                    <p>After satisfactory interview, Katong Maid Agency will handle all the administrative process application, including work permit applications, etc. </p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">Free Call Back Now</a>
                        </div>
                    </div>


                    <div class="in-house section text-xs-center">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="in-house-content">
                                        <h2>In house cleanliness and hygiene test</h2>
                                        <p>Basic cleanliness and hygiene is something Katong maid agency is extremely fussy about. Hence we designed an in house cleanliness and hygiene test which all our maids have to qualify before entering your home.</p>
                                        <a href="#" class="btn btn-primary transparent">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="slider-section section text-xs-center">
                        <div class="container">
                            <h2>What our community says about us</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed eros vestibulum tortor mattis faucibus. Maecenas arcu sem, egestas quis quam in, gravida feugiat arcu. Maecenas scelerisque ante arcu, eget vulputate odio aliquet efficitur. Nulla facilisi. Quisque hendrerit ante orci, ultricies dapibus massa condimentum nec. Sed varius porttitor enim, non ultricies ante placerat id. Suspendisse at placerat urna, quis dapibus lacus.</p>
                                    <p class="p bold red">
                                        Bernanad Watson, Businessman
                                    </p>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                    </div>

                    <div class="double-sections text-xs-center">
                        <div class="col-lg-6 no-gutter">
                            <div class="image-text-section">
                                <img class="width100" src="<?php echo get_stylesheet_directory_uri().'/images/sd-bg-1.jpg';?>" alt="">
                                <div class="overlay"></div>
                                <div class="img-text-inner">
                                    <h2>Our Guarantee </h2>
                                    <p>Hiring a suitable maid is like building a relationship, take a month to care and love, our maids will reciprocate. Other wise, Katong maid agency will step in to do everything we can to make things right.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 no-gutter">
                            <div class="image-text-section">
                                <img class="width100" src="<?php echo get_stylesheet_directory_uri().'/images/sd-bg-2.jpg';?>" alt="">
                                <div class="overlay"></div>
                                <div class="img-text-inner">
                                        <h3>Ready To Meet Your Maid from Katong Maid Agency?</h3>
                                    <a href="#" class="btn btn-primary transparent">Get Your Free Call Back Now</a>

                                </div>
                            </div>
                        </div>
                    </div>


<!--                    --><?php //while ( have_posts() ) : the_post(); ?>
<!---->
<!--                        --><?php //get_template_part( 'loop-templates/content', 'page' ); ?>
<!---->
<!--                    --><?php //endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>