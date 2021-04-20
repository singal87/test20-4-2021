<?php
/**
 * Template Name: Contact Us
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

	<!-- page-title -->
	<div class="cmt-page-title-row" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>')">
		<div class="container">
			<div class="row">
				<div class="col-md-12"> 
					<div class="title-box">
						<div class="page-title-heading">
							<h1 class="title"><?php echo get_the_title(); ?></h1>
						</div><!-- /.page-title-captions -->
						<div class="breadcrumb-wrapper">
							<span>
								<a title="Homepage" href="<?php echo get_site_url(); ?>"><i class="ti ti-home"></i> Home</a>
							</span>
							<span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
							<span><span><?php echo get_the_title(); ?></span></span>
						</div>
					</div>
				</div><!-- /.col-md-12 -->  
			</div><!-- /.row -->  
		</div><!-- /.container -->
	</div><!-- page-title end-->

	<!--site-main start-->
    <div class="site-main">

        <!--about-section-->
		
		<?php 
			global $wpdb;
			$post = get_post(get_the_ID());  
			echo $the_content = apply_filters('the_content', $post->post_content);
			
/*
		?>
		
		
        <section class="cmt-row contact-box-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Visit Our Place</h5>
                            <span>Raghav Kripa, Delhi , India</span>
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                                <span>Phone: +91 981837118, 9015126104</span>
                                <span>Email: <a href="mailto=info@raghavkripa.com">info@raghavkripa.com</a></span>
                                <h6><a href="#">Locate us on map</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Quick Contact</h5>
                            <span>Get Quick Touch With Us</span>
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                        <i class="flaticon flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <span>Flat A, 20/7, Reynolds Neck Str Helenaville, FV77 8WS</span>
                                <h6><a href="#">Get call back</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Visit Bitween</h5>
                            <span>Business Hours For Only Office</span>
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                        <i class="flaticon flaticon-clock"></i>
                                    </div>
                                </div>
                                <span>Mon - Satday: 9.00am to 6.00pm Sunday: Holiday</span>
                                <h6><a href="#">Make an appointment</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--about-section end-->
		<div class="cmt-row map-section cmt-bgcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="map-wrapper">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.73916900356!2d76.81306174251878!3d28.646677236767324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1582910897201!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="spacing-12 box-shadow cmt-bgcolor-white">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h4 class="title">Call us or fill the Form</h4>
                                </div>
                            </div><!-- section title end -->
                            <form id="cmt-quote-form" class="cmt-quote-form clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" value="" placeholder="Full Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="address" type="text" value="" placeholder="Email Address" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" value="" placeholder="Phone Number" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="3" placeholder="Message" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-left">
                                            <button type="submit" id="submit" class="cmt-btn cmt-btn-size-md cmt-btn-bgcolor-skincolor w-100" value="">
                                                Submit quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php */ ?>
		
		

    </div><!--site-main end-->


<?php get_footer(); ?>
