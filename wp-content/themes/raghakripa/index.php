<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

		<!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title"><?php single_post_title(); ?></h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>
                                </span>
                                <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                <span><span>Video</span></span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div><!-- page-title end-->


		<div class="site-main">
			<!--about-section-->
			<section class="cmt-row portfolio-style-2-section clearfix">
				<div class="container">
					<div class="row">
					
						<?php
						if ( have_posts() ) :

							// Start the Loop.
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that
								 * will be used instead.
								 */
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							the_posts_pagination(
								array(
									'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
									'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
								)
							);

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
						?>
					
					
					
					</div><!-- row end -->
				</div>
			</section> <!--about-section end-->
    </div><!--site-main end-->
		
		
<?php get_footer(); ?>
