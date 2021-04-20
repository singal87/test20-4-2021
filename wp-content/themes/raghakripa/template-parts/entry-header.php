<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<?php 					
					global $wpdb;

					global $paged, $wp_query;
						
					$term = get_queried_object();
					//echo $slug = $term->slug;
					
					//print_r($wpdb);
					
					//echo '<br><br><br><br>';
					
					//print_r($term);
					
					//echo '<br><br><br><br>';
					
				//	print_r($wp_query);
					
					//echo '<br><br><br><br>';
					foreach (get_the_category() as $cat) :
					
					$image= z_taxonomy_image_url($cat->term_id);
					
					endforeach;
					?>


<!-- page-title -->
	<div class="cmt-page-title-row" style="background-image:url('<?php echo $image; ?>')">
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
	
	
<?php /* ?>
<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php
			/**
			 * Allow child themes and plugins to filter the display of the categories in the entry header.
			 *
			 * @since Twenty Twenty 1.0
			 *
			 * @param bool   Whether to show the categories in header, Default true.
			 *
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );
				
		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

<?php */ ?>

