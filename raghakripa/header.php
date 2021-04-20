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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fassetsontello.css" />
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
                                                            <span class="time">15 Days</span>
                                                            <span class="time">30 Hours</span>
                                                            <span class="time">07 Minutes</span>
                                                            <span class="time">22 Seconds</span>
                                                        </li>
                                                        
                                                        <li><!-- <i class="fa fa-envelope-o text-white"></i><a
                                                                href="mailto:info@raghavkripa.com">info@raghavkripa.com</a> -->
															<?php dynamic_sidebar( 'sidebar-4' ); ?>
                                                        </li>
                                                        <li><!-- <i class="fa fa-phone text-white"></i>+91 981837118,
                                                            9015126104 --> <?php dynamic_sidebar( 'sidebar-5' ); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- cmt-topbar-wrapper end -->
                                        <!-- site-branding -->
                                        <div class="site-branding">
                                            <a class="home-link" href="<?php echo get_site_url(); ?>" title="Raghav Kripa Logo " rel="home">
                                                <img id="logo-img" class="img-center" src="<?php bloginfo('template_directory'); ?>/images/logo-img.png"
                                                    alt="logo-img">
                                            </a>
                                        </div><!-- site-branding end -->
                                        <!--site-navigation -->
                                        <div id="site-navigation" class="site-navigation cmt-textcolor-white">
                                            <!-- social-links-wrapper -->
                                            <div class="cmt-social-links-wrapper list-inline">
                                                <ul class="social-icons square">
                                                    <li><a href="#"><i class="ti ti-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-youtube"></i></a>
                                                    </li>
                                                   
                                                </ul>
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
                                                <!-- <ul class="dropdown">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li class="active"><a href="about-us.html">About</a></li>
                                                    <li><a href="#">Title</a>
                                                        <ul>
                                                            <li><a href="event.html">Event</a></li>
                                                            <li><a href="#">News</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="video.html">Videos</a></li>
                                                    <li><a href="event.html">Events</a>
                                                        
                                                    </li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="contact-us.html">Contact</a></li>
                                                </ul> -->
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

        <!-- END REVOLUTION SLIDER -->
        <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
            data-alias="classic4export" data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
            <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                <ul>

                    <li data-index="rs-1" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="<?php bloginfo('template_directory'); ?>/images/slides/slider-mainbg-001.jpg" alt="" title="slider-mainbg-001"
                            data-bgposition="center center" data-bgfit="100%" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>



                        <!-- LAYER NR. 1 -->
                        <!-- <div class="tp-caption tp-shape tp-shapewrapper cmt-bgcolor-skincolor" 

                            id="slide-1-layer-1" 
                            data-x="['center','center','left','center']" data-hoffset="['-87','-179','233','-120']" 
                            data-y="['top','top','middle','middle']" data-voffset="['189','174','-133','-101']" 
                            
                            data-width="3"
                            data-height="['25','25','20','20']"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="shape" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1560,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            > 
                        </div> -->

                        <!-- layer-2 -->
                        <!-- <div class="tp-caption" 

                            id="slide-1-layer-2" 
                            data-x="['center','center','right','center']" data-hoffset="['53','-24','293','5']" 
                            data-y="['top','top','middle','middle']" data-voffset="['190','178','-133','-101']"

                            data-fontsize="['18','18','16','16']"
                            data-lineheight="['23','23','20','18']"
                            data-fontweight="['400','400','400','400']"
                            data-color="['rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":190,"speed":400,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">WE ARE EXPERIENCE COMPANY
                        </div> -->

                        <!-- layer-3 -->
                        <!-- <div class="tp-caption head-font" 

                            id="slide-1-layer-3" 
                            data-x="['right','right','right','center']" data-hoffset="['50','28','74','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['229','209','-70','-51']"

                            data-fontsize="['70','70','50','40']"
                            data-lineheight="['90','90','60','50']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":430,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">Perfection is Always
                        </div> -->

                        <!-- layer-4 -->
                        <!--  <div class="tp-caption head-font" 

                            id="slide-1-layer-4" 
                            data-x="['right','right','right','center']" data-hoffset="['65','43','84','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['304','292','-20','-10']"

                            data-fontsize="['70','70','50','40']"
                            data-lineheight="['90','90','60','50']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":760,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"> Under <strong class="cmt-textcolor-skincolor">Construction</strong> 
                        </div> -->

                        <!-- layer-5 -->
                        <!-- <div class="tp-caption" 

                            id="slide-1-layer-5" 
                            data-x="['center','center','center','right']" data-hoffset="['205','114','90','-500']" 
                            data-y="['top','top','middle','middle']" data-voffset="['393','385','30','25']"

                            data-fontsize="['17','17','14','12']"
                            data-lineheight="['27','27','20','18']"
                            data-fontweight="['300','300','300','300']"
                            data-color="['rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1210,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We offer the most complete house renovating services in the country,<br> from kitchen design to bathroom remodeling 
                        </div> -->

                        <!-- layer-6 -->
                        <!-- <a class="tp-caption cmt-btn cmt-btn-style-border cmt-btn-color-darkgrey cmt-btn-size-sm" href="#" target="_self" 

                            id="slide-1-layer-6" 
                            data-x="['center','center','center','center']" data-hoffset="['0','-100','-90','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['487','476','94','95']"

                            data-fontsize="['16','15','12','11']"
                            data-lineheight="['18','18','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-actions=''
                            data-responsive_offset="on"
                            data-frames='[{"delay":1360,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[14,14,10,10]"
                            data-paddingright="[35,30,25,20]"
                            data-paddingbottom="[10,10,9,9]"
                            data-paddingleft="[35,30,25,20]">Our Portfolio
                        </a> -->

                        <!-- layer-7 -->
                        <!-- <a class="tp-caption tp-cmt-video-play-btn round-btn ttm_prettyphoto" href="https://youtu.be/7e90gBu4pas" target="_self" 

                            id="slide-1-layer-7" 
                            data-x="['center','center','center','center']" data-hoffset="['138','30','30','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['484','473','94','40']" 
                            
                            data-fontsize="['14','14','14','12']"
                            data-lineheight="['50','50','50','40']"
                            data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                            data-width="['50','50','50','40']"
                            data-height="['50','50','50','40']"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-actions=''
                            data-responsive_offset="on" 
                           data-frames='[{"delay":1380,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            ><div class="cmt-popup-video"><i class="fa fa-play"></i></div>
                        </a>  -->

                        <!-- layer-8 -->
                        <!-- <div class="tp-caption head-font" 

                            id="slide-1-layer-8" 
                            data-x="['center','center','center','center']" data-hoffset="['241','130','120','-375']" 
                            data-y="['top','top','middle','middle']" data-voffset="['471','458','94','45']" 

                            data-fontsize="['16','16','14','12']"
                            data-lineheight="['50','50','50','40']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-actions=''
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1380,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[14,14,10,10]"
                            data-paddingright="[30,30,25,20]"
                            data-paddingbottom="[14,14,10,10]"
                            data-paddingleft="[30,30,25,20]"> See How It Works 
                        </div> -->

                    </li>

                    <li data-index="rs-2" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="<?php bloginfo('template_directory'); ?>/images/slides/slider-mainbg-002.jpg" alt="" title="slider-mainbg-002"
                            data-bgposition="center center" data-bgfit="100%" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <!--   <div class="tp-caption tp-shape tp-shapewrapper cmt-bgcolor-skincolor" 

                            id="slide-2-layer-1" 
                            data-x="['left','left','left','center']" data-hoffset="['53','20','20','-120']" 
                            data-y="['top','top','middle','middle']" data-voffset="['189','174','-133','-85']" 

                            data-width="3"
                            data-height="['25','25','20','20']"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="shape" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1560,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            > 
                        </div>

                        
                        <div class="tp-caption cmt-textcolor-skincolor" 

                            id="slide-2-layer-2" 
                            data-x="['left','left','left','center']" data-hoffset="['67','30','30','5']" 
                            data-y="['top','top','middle','middle']" data-voffset="['189','178','-133','-85']"

                            data-fontsize="['18','18','16','16']"
                            data-lineheight="['23','23','20','18']"
                            data-fontweight="['400','400','400','400']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1200,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">WE ARE EXPERIENCE COMPANY
                        </div>

                       
                        <div class="tp-caption head-font" 

                            id="slide-2-layer-3" 
                            data-x="['left','left','left','center']" data-hoffset="['47','15','15','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['235','219','-70','-31']"

                            data-fontsize="['70','70','50','40']"
                            data-lineheight="['75','75','60','50']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1200,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">Build A Better
                        </div>

                        
                        <div class="tp-caption head-font" 

                            id="slide-2-layer-4" 
                            data-x="['left','left','left','center']" data-hoffset="['47','15','15','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['309','292','-20','10']"

                            data-fontsize="['70','70','50','40']"
                            data-lineheight="['75','75','60','50']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)','rgb(8, 21, 40)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1200,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"> Modern Company 
                        </div>

                      
                        <div class="tp-caption" 

                            id="slide-2-layer-5" 
                            data-x="['left','left','left','right']" data-hoffset="['53','20','20','-500']" 
                            data-y="['top','top','middle','middle']" data-voffset="['394','385','30','25']"

                            data-fontsize="['17','17','14','12']"
                            data-lineheight="['27','27','20','18']"
                            data-fontweight="['300','300','300','300']"
                            data-color="['rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)','rgb(74, 74, 74)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1560,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We offer the most complete house renovating services in the country,<br> from kitchen design to bathroom remodeling 
                        </div>

                        
                        <a class="tp-caption cmt-btn cmt-btn-style-border cmt-btn-color-darkgrey cmt-btn-size-sm" href="#" target="_self" 

                            id="slide-2-layer-6" 
                            data-x="['left','left','left','center']" data-hoffset="['53','20','20','-75']" 
                            data-y="['top','top','middle','middle']" data-voffset="['488','476','94','70']"

                            data-fontsize="['16','15','12','11']"
                            data-lineheight="['18','18','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-actions=''
                            data-responsive_offset="on"
                            data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[14,14,10,10]"
                            data-paddingright="[30,30,25,20]"
                            data-paddingbottom="[10,10,9,9]"
                            data-paddingleft="[30,30,25,20]">Our Portfolio
                        </a>

                       
                        <a class="tp-caption cmt-btn cmt-btn-style-fill cmt-btn-bgcolor-skincolor cmt-btn-size-sm" href="#" target="_self" 

                            id="slide-2-layer-7" 
                            data-x="['left','left','left','center']" data-hoffset="['244','200','170','65']" 
                            data-y="['top','top','middle','middle']" data-voffset="['488','476','94','70']"

                            data-fontsize="['16','15','12','11']"
                            data-lineheight="['18','18','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-actions=''
                            data-responsive_offset="on"
                            data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[14,14,10,10]"
                            data-paddingright="[30,30,25,20]"
                            data-paddingbottom="[10,10,9,9]"
                            data-paddingleft="[30,30,25,20]">See How It Work
                        </a> -->

                    </li>
                    <li data-index="rs-3" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="<?php bloginfo('template_directory'); ?>/images/slides/slider-mainbg-003.jpg" alt="" title="slider-mainbg-003"
                            data-bgposition="center center" data-bgfit="100%" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
            </div>
        </div>
        



        