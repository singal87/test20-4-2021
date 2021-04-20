<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
?>
   

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer cmt-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="footer-logo" style="font-size: 30px;color:#fff;">
                                <?php dynamic_sidebar( 'sidebar-10' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="cmt-footer-cta-wrapper cmt-bgcolor-skincolor box-shadow2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 widget-area">
                                        <div
                                            class="featured-icon-box iconalign-before-heading cmt-icon_element-size-lg">
                                            <div class="featured-content">
                                                <div class="featured-icon">
                                                    <div
                                                        class="cmt-icon cmt-icon_element-color-white cmt-icon_element-size-lg">
                                                        <i class="flaticon flaticon-email"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <?php dynamic_sidebar( 'sidebar-11' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="#"
                                            data-mailchimp="true">
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                                <p><input type="email" name="email" placeholder="Email Address.."
                                                        required="">

                                                </p>
                                                <p><button class="btn" type="submit" value=""><i
                                                            class="fa fa-envelope"></i></button></p>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer cmt-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
							
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
							
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text cmt-bgcolor-darkgrey cmt-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-8 cmt-footer2-left">
							<?php dynamic_sidebar( 'sidebar-8' ); ?>
                            
                        </div>
                        <div class="col-md-4 cmt-footer2-right">
                            <div class="social-icons">
							
								<?php dynamic_sidebar( 'sidebar-9' ); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        <!-- Color Palate / Color Switcher -->

    </div><!-- page end -->


    <!-- Javascript -->

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/tether.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-waypoints.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-validate.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/numinate.min6959.js?ver=4.9.3"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

    <!-- Revolution Slider -->
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/slider.js"></script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Javascript end-->
<?php wp_footer(); ?>

</body>
</html>
