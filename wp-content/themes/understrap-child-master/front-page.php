<?php
/**
 *
 * Front Page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="services">
	<div class="container">

		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Select City</h2>
		</div>

		<div class="row">
			<div class="features">

				<?php
				$args = array('post_type' => 'city', 'orderby' => 'date', 'order' => 'DESC');
				$query = new WP_Query( $args );
				if ( $query->have_posts() ):
					while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
							<a href="#portfolio">
								<div class="city-image">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" height="220">
									<label><?php echo get_the_title(); ?></label>
								</div>
							</a>
						</div>

						<?php	
					endwhile;
				endif;
				wp_reset_postdata();
				?>

			</div>
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</section>
<!--/#services-->


<?php get_footer(); ?>