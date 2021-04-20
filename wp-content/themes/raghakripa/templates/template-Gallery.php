<?php
/**
 * Template Name: Gallery
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
        <section class="cmt-row portfolio-style-2-section clearfix">
            <div class="container">
                <div class="row multi-columns-row cmt-boxes-spacing-10px cmt-bgcolor-white"><!-- row -->

				<?php 
					global $wpdb;
					$post = get_post(get_the_ID());  
					echo $the_content = apply_filters('the_content', $post->post_content);
					?>
			
				</div><!-- row end -->
            </div>
        </section>  <!--about-section end-->
		
		
		
		<?php 			
/*
		?>
		
		<!--about-section-->
        <section class="cmt-row portfolio-style-2-section clearfix">
            <div class="container">
                <div class="row multi-columns-row cmt-boxes-spacing-10px cmt-bgcolor-white"><!-- row -->
                    
					
                </div><!-- row end -->
            </div>
        </section>
        <!--about-section end-->
		        
		<?php */ ?>
		
		

    </div><!--site-main end-->


<?php get_footer(); ?>
