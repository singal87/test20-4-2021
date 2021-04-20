<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <title> Raghav Kripa </title>
    <!-- favicon icon -->

    <link rel="shortcut icon" href="<?php  bloginfo('template_directory'); ?>/images/favicon.png" />
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_directory'); ?>/css/animate.css" />
    <!-- owl-carousel -->
     <link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_directory'); ?>/css/owl.carousel.css">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_directory'); ?>/css/font-awesome.css" />
    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_directory'); ?>/css/themify-icons.css" />
    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/flaticon.css" />
    <!-- fontello -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fontello.css" />
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/revolution/css/settings.css">
    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css">
    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/shortcodes.css" />
    <!-- main -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" />
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/color-switcher.css">
    <!--Color Themes-->
    <link id="switcher-color" href="<?php bloginfo('template_directory'); ?>/css/colors/default-color.css" rel="stylesheet">
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" />
</head>
<div class="page">
       
        <!-- preloader end -->
        <!--header start-->
        <header id="masthead" class="header cmt-header-style-01">
            <!-- cmt-header-wrap -->
            <div class="cmt-header-wrap">
                <!-- cmt-stickable-header-w -->
                <div id="cmt-stickable-header-w" class="cmt-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner cmt-stickable-header visible-title">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <!-- cmt-topbar-wrapper -->
                                        <div
                                            class="cmt-topbar-wrapper cmt-bgcolor-darkgrey cmt-textcolor-white clearfix">
                                            <div class="cmt-topbar-content">

                                                <div class="topbar-right text-right">
                                                    <ul class="top-contact">
                                                        <li class="text-white"><b><i
                                                                    class="fa fa-clock-o text-white"></i>Upcoming Events
                                                                |</b>
																
																<?php
																
																	$loop = new WP_Query( array( 'post_type' => 'event', 'category_name' => 'latest-events', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC' ) );
																	if ( $loop->have_posts() ) :
																		while ( $loop->have_posts() ) : $loop->the_post(); 
																		
																		$ptdate = get_post_meta(get_the_ID(), 'latestevent_date', TRUE);
																		
																		$date_now = date("d-m-Y"); 
																		if ($date_now < $ptdate) 
																		{	
																			//echo 'greater than'; 
																			$date=date_create($ptdate);
																			$dateFormate = date_format($date,"M d, Y H:i:s");
																		}
																		
																		//else{  echo 'Less than';}
																	
																	
																
																
																		endwhile;
																			endif;
																		wp_reset_postdata();
																		
																		//echo $dateFormate;
																	?>
																
																
																<?php
																	//$date=date_create("13-03-2015");
																	//echo date_format($date,"M d, Y H:i:s");
																	?>
																<!-- <p id="demo"></p> -->

															<script>
															// Set the date we're counting down to
															//var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
															
															var countDownDate = new Date("<?php echo $dateFormate;?>").getTime();

															// Update the count down every 1 second
															var x = setInterval(function() {

															  // Get today's date and time
															  var now = new Date().getTime();
																
															  // Find the distance between now and the count down date
															  var distance = countDownDate - now;
																
															  // Time calculations for days, hours, minutes and seconds
															  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
															  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
															  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
															  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
																
															  // Output the result in an element with id="demo"
															  //document.getElementById("demo").innerHTML = days + "d " + hours + "h "
															  //+ minutes + "m " + seconds + "s ";
																	
															document.getElementById("days").innerHTML = days+' Days';
															document.getElementById("hours").innerHTML = hours+' Hours';
															document.getElementById("minutes").innerHTML = minutes+' Minutes';
															document.getElementById("seconds").innerHTML = seconds+' Seconds';															
																	
																	
																	
															  // If the count down is over, write some text 
															  if (distance < 0) {
																clearInterval(x);
																document.getElementById("demo").innerHTML = "EXPIRED";
															  }
															}, 1000);
															</script>
                                                            <span id="days" class="time"></span>
                                                            <span id="hours" class="time"></span>
                                                            <span id="minutes" class="time"></span>
                                                            <span id="seconds" class="time"></span>
                                                        </li>
                                                        
                                                        <li><!-- <i class="fa fa-envelope-o text-white"></i><a
                                                                href="mailto:info@raghavkripa.com">info@raghavkripa.com</a> -->
															<?php dynamic_sidebar( 'sidebar-6' ); ?>
                                                        </li>
                                                        <li><!-- <i class="fa fa-phone text-white"></i>+91 981837118,
                                                            9015126104 --> <?php dynamic_sidebar( 'sidebar-7' ); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- cmt-topbar-wrapper end -->
                                        <!-- site-branding -->
                                        <div class="site-branding">
                                            <a class="home-link" href="<?php echo get_site_url(); ?>" title="Raghav Kripa Logo " rel="home">
												<?php the_custom_logo(); ?>
                                            </a>
                                        </div><!-- site-branding end -->
                                        <!--site-navigation -->
                                        <div id="site-navigation" class="site-navigation cmt-textcolor-white">
                                            <!-- social-links-wrapper -->
                                            <div class="cmt-social-links-wrapper list-inline">
                                                
												<?php dynamic_sidebar( 'sidebar-13' ); ?>
												<!-- <ul class="social-icons square">
                                                    <li><a href="#"><i class="ti ti-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-youtube"></i></a>
                                                    </li>
                                                </ul> -->
												
                                            </div><!-- social-links-wrapper -->

                                            <div class="cmt-menu-toggle">
                                                <input type="checkbox" id="menu-toggle-form" />
                                                <label for="menu-toggle-form" class="cmt-menu-toggle-block">
                                                    <span class="toggle-block toggle-blocks-1"></span>
                                                    <span class="toggle-block toggle-blocks-2"></span>
                                                    <span class="toggle-block toggle-blocks-3"></span>
                                                </label>
                                            </div>
                                            <!-- nav -->
                                            <nav id="menu" class="menu">
		<?php wp_nav_menu( array( 'theme_location' => 'top','menu_class' => 'dropdown', 'menu_id' => '', ) ); ?>
                                                
                                            </nav><!-- nav end-->
                                        </div><!-- site-navigation end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- cmt-stickable-header-w end-->
            </div>
            <!--cmt-header-wrap end -->
        </header>
        <!--header end-->
