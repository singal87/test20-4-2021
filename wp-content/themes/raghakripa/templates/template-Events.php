<?php
/**
 * Template Name: Events
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

					global $paged, $wp_query;
						
					$term = get_queried_object();
					$slug = $term->slug;

					//print_r($wp_query);
					?>
					
					<?php
						$loop = new WP_Query( array('post_type' => 'event','category_name' => $slug, 'ignore_sticky_posts' => 1, 'paged' => $paged, 'order' => 'ASC', 'posts_per_page' => 12 ) );
						
						//print_r($loop);
						
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post(); 
							
							?>
						<div class="col-md-4">	
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
							
							
						</div>	
							
						<?php endwhile;
						
								if (  $loop->max_num_pages > 1 ) : ?>
								
								<nav class="col-md-12 pagination clearfix">
									 <?php
									 $big = 999999999;
									 echo paginate_links( array(
										  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
										  'format' => '?paged=%#%',
										  'current' => max( 1, get_query_var('paged') ),
										  'total' => $loop->max_num_pages,
										  'prev_text' => '&laquo;',
										  'next_text' => '&raquo;'
									 ) );
								?>
								</nav>
							
						<?php endif;
						
						endif;
							wp_reset_postdata();
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
