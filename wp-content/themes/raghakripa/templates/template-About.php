<?php
/**
 * Template Name: About Us
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

		<?php 
			global $wpdb;
			$post = get_post(get_the_ID());  
			echo $the_content = apply_filters('the_content', $post->post_content);
			
/*
		?>
		
		<!--about-section-->
        <section class="cmt-row about-section clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-12">
                        <!-- cmt_single_image-wrapper -->
                        <div class="cmt_single_image-wrapper">
                            <img class="img-fluid" src="images/bg-image/col-bgimage-9.jpg" alt="">
                        </div><!-- cmt_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>ABOUT US</h5>
                                    <h2 class="title">Experience A Better Way To Build.</h2>
                                </div>
                            </div><!-- section title end -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing .</p>
                            <h5 class="font-sz-22">Meet With Our Mission</h5>
                            <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            <h5 class="font-sz-22">What Is Our Vision?</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy.</p>
                           
                        </div>
                    </div>
					
					 <div class="col-lg-12 col-sm-12">
                        <div class="res-991-mt-30">
                            <!-- section title --><br><br>
                          <h5 class="font-sz-22">What Is Our Vision?</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.Lorem Ipsum is simply dummy.</p>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--about-section end-->
        
		<?php */ ?>
		
		

    </div><!--site-main end-->


<?php get_footer(); ?>
