<?php
/**
 * Template Name: Home Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
            data-alias="classic4export" data-source="gallery">
            
            <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                <ul>
				<?php
					$loop = new WP_Query( array( 'post_type' => 'slider_type', 'category_name' => 'home-slider', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
					if ( $loop->have_posts() ) :
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li data-index="rs-1" data-transition="slotslide-horizontal" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<?php if ( has_post_thumbnail() ) { ?>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>"
                            data-bgposition="center center" data-bgfit="100%" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>  
										<!-- <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> -->
								<?php } ?>
								
							</li>
						<?php endwhile;
						 ?>
							
						<?php 	endif;
					wp_reset_postdata();
				?>
					
					
                </ul>
            </div>
        </div>

        <!--site-main start-->
		<div class="site-main">

            <!--project-section-->
            <section class="cmt-row project-section clearfix">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row no-gutters">
								<?php
									$loop = new WP_Query( array( 'post_type' => 'homepost_type', 'category_name' => 'home-post', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC','posts_per_page' => 4 ) );
									if ( $loop->have_posts() ) :
										while ( $loop->have_posts() ) : $loop->the_post(); ?>
											
											<div class="col-md-3">
												<div class="featured-icon-box style4 text-left <?php echo get_post_meta(get_the_ID(), 'extra_class', TRUE); ?>">
													<div class="featured-content">
														<div class="featured-title">
															<h5><a href="#"><?php echo get_the_title(); ?></a></h5>
														</div>
														<div class="featured-desc">
															<p><?php echo get_the_excerpt(); ?></p>
														</div>
													</div>
													
													<a class="cmt-btn cmt-btn-size-sm cmt-btn-color-darkgrey btn-inline mt-15 cmt-btn-underline"
														href="<?php the_permalink(); ?>">READ MORE</a>
												</div>
											</div>
											
										<?php endwhile;?>
											
										<?php endif;
									wp_reset_postdata();
								?>
								
                            </div>
                        </div>
                    </div><!-- row end-->
                    <!-- row-->

                </div>
            </section>
            <!--project-section-->
			
			<!-- **************************************  About Us ********************
            <!--broken-section-->
            <section class="cmt-row broken-section  res-991-mb-0 z-1 position-relative clearfix">
                <div class="container">
                    <div class="row no-gutters">
						<?php	
							global $wpdb;
							$page = get_page_by_path( 'home-about-us' );
							$post_id = $page->ID; // example post id
							$post_content = get_post($post_id);
							$content = $post_content->post_content;
							
							// img bg class: cmt-col-wrapper-bg-layer
							?>
					
                        <div class="col-lg-4 col-md-12">
                            
                            <div class="col-bg-img-nine cmt-col-bgimage-yes">
                                <img src="<?php echo get_the_post_thumbnail_url($post_id);?>" class="cmt-equal-height-image" alt="bg-image">
                            </div>
                            

                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12">
                            <div class="spacing-3 box-shadow cmt-bgcolor-white">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5><?php echo get_post_meta($post_id, 'home_about_title', TRUE); ?></h5>
                                        <h2 class="title"><?php echo get_post_meta($post_id, 'home_about_subtitle', TRUE); ?></h2>
                                    </div>
                                </div><!-- section title end -->
                                <?php echo apply_filters('the_content',$content); ?>
                                
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--broken-section end-->
			
			<!-- **************************************  Our Titles ********************
            <!--fid-left-section-->
            <section class="cmt-row service-section style2 bg-img6 clearfix">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
									<?php $catObj = get_category_by_slug('our-titles'); 
									
									?>
                                    <h5><?php echo $catObj->description; ?></h5>
                                    <h2 class="title"><?php echo $catObj->name; ?></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div><!-- row end -->
                    <div class="row">
                        <!-- row -->
                        <!-- services-slide -->
                        <div class="services-slide owl-carousel" data-item="3" data-nav="false" data-dots="false"
                            data-auto="true">
                            
							<?php
								$loop = new WP_Query( array( 'post_type' => 'outtitle_type', 'category_name' => 'our-titles', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC', 'posts_per_page' => 6 ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<!--featured-imagebox-->
                            <div class="featured-imagebox-services">
                                <div class="featured-thumbnail img-fluid">
									<?php if ( has_post_thumbnail() ) { ?>
										<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" style="height:234px;" alt="image">
									<?php } else{ ?>
										<iframe width="100%" height="240" src="<?php echo get_the_excerpt(); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<?php } ?>	
									<div class="featured-content text-center">
										<div class="featured-title pt-12 pb-15">
											<h5><a href="#"><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></a></h5>
										</div>
									</div>	
										
									
									<div class="post-meta pb-15 text-center">
										<!-- post-meta -->
										<span class="cmt-meta-line comments-link"><i
												class="fa fa-comments cmt-textcolor-skincolor"></i> Date :
											<?php echo get_post_meta(get_the_ID(), 'ourtitles_date', TRUE); ?></span>
										<span class="cmt-meta-line byline"><i
												class="fa fa-user cmt-textcolor-skincolor"></i> <?php echo get_post_meta(get_the_ID(), 'ourtitles_address', TRUE); ?></span>
									</div>
								</div>
                            </div><!-- featured-imagebox end-->
									<?php endwhile; ?>
										
									<?php 
								endif;
								wp_reset_postdata();
							?>
							
                        </div>
                    </div><!-- row end -->
                    <div class="row">
                        <div class="container text-center">
							<?php	$page_link = get_page_link(42);	?>
						
                            <br><a class="tp-caption cmt-btn cmt-btn-bgcolor-skincolor cmt-btn-size-sm" href="<?php echo $page_link; ?>">View
                                All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--fid-left-section-->
			
			<!-- **************************************  Our Videos ********************
            <!--service-section-->
            <section class="cmt-row service-section style2 clearfix">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
								<?php $catObj2 = get_category_by_slug('our-videos'); 
									
									?>
                                    <h5><?php echo $catObj2->description; ?></h5>
                                    <h2 class="title"><?php echo $catObj2->name; ?></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div><!-- row end -->
                    <div class="row">
                        <!-- row -->
                        <!-- services-slide -->
                        <div class="services-slide owl-carousel" data-item="3" data-nav="false" data-dots="false"
                            data-auto="true">
							<?php
								$loop = new WP_Query( array( 'post_type' => 'ourvideos_type', 'category_name' => 'our-videos', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC', 'posts_per_page' => 6 ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
							<!--featured-imagebox-->
							<div class="featured-imagebox-services">
								<div class="featured-thumbnail img-fluid">
									<?php if ( has_excerpt() ) { ?>
										<iframe width="100%" height="240" src="<?php echo get_the_excerpt();?>"
                                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										
									<?php } ?>
									<div class="ptitle">
										<h2 class="text-center"><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
									</div>
								</div>
                            </div>
							<!-- featured-imagebox end-->	
							
							<?php endwhile;
							endif;
								wp_reset_postdata();
									?>
														
                        </div>
                    </div><!-- row end -->
                    <div class="row">
                        <div class="container text-center">
							<?php	$page_link2 = get_page_link(40);	?>
							
                            <br><a class="tp-caption cmt-btn cmt-btn-bgcolor-skincolor cmt-btn-size-sm" href="<?php echo $page_link2; ?>">View
                                All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--service-section end-->
			<!-- **************************************  Life As Prayer ********************
            <!--row-title-section-->
				<?php global $wpdb;
					$page2 = get_page_by_path( 'home-page-life-as-prayer' );
					$post_id2 = $page2->ID; // example post id
					$post_content2 = get_post($post_id2);
					$content2 = $post_content2->post_content;
					?>
							
            <section class="cmt-row row-title-section style2 bg-img7 cmt-bgcolor-skincolor clearfix" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id2);?>');">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-sm-12 col-md-12 col-lg-7">
                            <div class="">
                                <!-- section title -->
                                <div class="section-title row-title clearfix">
                                    <div class="title-header">
                                        <h2 class="title"><?php echo get_post_meta($post_id2, 'life_pray_title', TRUE); ?></h2>
                                    </div>
                                    <div class="title-desc pr-30 res-991-pr-0">
                                        <?php echo get_post_meta($post_id2, 'life_pray_desc', TRUE); ?>
                                    </div>
                                </div><!-- section title end -->

                            </div>
                        </div>

                    </div><!-- row end -->
                </div>
            </section>
            <!--row-title-section END-->

            <!--team-section-->
            <section class="cmt-row team-section style1 clearfix">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>RAGHAV KRIPA</h5>
                                    <h2 class="title">Photo Gallery</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div><!-- row end -->
                    <!-- row -->
                    <div class="row multi-columns-row cmt-boxes-spacing-10px cmt-bgcolor-white">
                        <!-- row -->
                        
						<?php echo do_shortcode('[robo-gallery id=184]'); ?>
												
                    </div><!-- row end -->
                    <div class="row">
                        <div class="container text-center">
                            <br><a class="tp-caption cmt-btn cmt-btn-bgcolor-skincolor cmt-btn-size-sm" href="http://localhost:8080/wordpress-test/gallery/">View
                                All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--team-section end-->

            <!--contact-text-section-->
			
			<?php global $wpdb;
					$page3 = get_page_by_path( 'home-page-contact-us' );
					$post_id3 = $page3->ID; // example post id
					$post_content3 = get_post($post_id3);
					$content3 = $post_content3->post_content;
					?>
			
            <section class="cmt-row contact-text-section cmt-bg cmt-bgimage-yes bg-img8 clearfix" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id3);?>');">
                <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <?php echo apply_filters('the_content',$content3); ?>
                                </div>

								<?php 
								if( class_exists('Dynamic_Featured_Image') ) {
									 global $dynamic_featured_image;
									 $featured_images = $dynamic_featured_image->get_featured_images( $post_id3 );
									 
									//print_r($featured_images);
								 } ?>
								
                                <a href="<?php echo get_post_meta($post_id3, 'homeconatct_subscribelink', TRUE); ?>"><img src="<?php echo $featured_images[0]['full']; ?>" /></a>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div><!-- row end -->
                    <!-- row -->
                    <div class="row">
                    </div>
                </div>
            </section>
            <!--contact-text-section end-->
			
			
            <!--post-section-->
            <section class="cmt-row post-section style2 clearfix">
                <div class="container">
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-2 col-lg-3"></div>
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
								<?php $catObj3 = get_category_by_slug('latest-events'); 
									
									?>
                                    <h5><?php echo $catObj3->description; ?></h5>
                                    <h2 class="title"><?php echo $catObj3->name; ?></h2>
                                    
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div><!-- row end -->
                    <div class="row">
                        <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false"
                            data-dots="false" data-auto="false">
                            
							<?php
								$loop = new WP_Query( array( 'post_type' => 'event', 'category_name' => 'latest-events', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
									
							<!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post top-image style2 box-shadow">
                                <div class="featured-thumbnail">
                                    <!-- featured-image -->
								<?php if ( has_post_thumbnail() ) { ?>
                                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
                                    <div class="cmt-box-post-date">
                                        <!-- cmt-box-post-date -->
                                        <span class="cmt-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><?php echo get_the_date('j'); ?><span
                                                    class="entry-month entry-year"><?php echo get_the_date('M'); ?></span></time>
                                        </span>
                                    </div><!-- cmt-box-post-date end -->
                                </div>
                                <div class="featured-content text-left box-shadow">
                                    <!-- featured-content -->
                                    <div class="post-title featured-title">
                                        <h5><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                    </div>
                                    <div class="post-meta pb-15">
                                        <!-- post-meta -->
                                        <span class="cmt-meta-line comments-link"><i
                                                class="fa fa-comments cmt-textcolor-skincolor"></i> Comments</span>
                                        <span class="cmt-meta-line byline"><i
                                                class="fa fa-user cmt-textcolor-skincolor"></i> Alex</span>
                                    </div><!-- post-meta end -->
                                    <div class="post-desc featured-desc">
                                        <p class="pt-12"><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-right cmt-btn-color-darkgrey btn-inline"
                                        href="<?php the_permalink(); ?>">Read More<i class="ti ti-angle-right"></i></a>
                                </div><!-- featured-content end -->
                            </div><!-- featured-imagebox-post end -->		
										
							<?php endwhile;
							endif;
							wp_reset_postdata();
						?>
						

                        </div>
                    </div>

                    <div class="row">
                        <div class="container text-center">
							<?php	$page_link3 = get_page_link(34);	?>
                            <br><a class="tp-caption cmt-btn cmt-btn-bgcolor-skincolor cmt-btn-size-sm" href="<?php echo $page_link3; ?>">View
                                All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--post-section end-->

        </div>
        <!--site-main end-->




<?php get_footer(); ?>
