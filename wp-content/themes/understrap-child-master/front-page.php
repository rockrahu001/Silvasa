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

<section id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Hotel & Package</h2>
		</div>

		<div class="container">
			<div class="row">
				<?php
				$packages_img = get_field('packages_gallery');				
				$size = 'full';
				if( $packages_img ):
					foreach( $packages_img as $pack ):						
						?>
						<div class="col-sm-3">
							<div class="hotel-img">
								<img src="<?php echo wp_get_attachment_image_url( $pack['ID'], $size );  ?>" height="100" width="100%">
							</div>
						</div>						
						<?php
					endforeach;
				endif;
				?>
			</div>
			<hr>
			<div class="row">
				<?php
				$args = array('post_type' => 'package', 'orderby' => 'date', 'order' => 'DESC');
				$query = new WP_Query( $args );
				if ( $query->have_posts() ):
					while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="col-sm-4">
						<a href="#meet-team">
							<div class="package-1">
								<h4><?php echo get_the_title(); ?></h4>
								<label><?php echo get_field('rating'); ?> Star Resort</label>
								<p>
									<?php echo get_the_content(); ?>
									<br/> for <?php echo get_field("days"); ?> night
								</p>
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
</div>				
</section>

<section id="meet-team">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Select Decoration</h2>
		</div>

		<div class="row">
			<div class="col-sm-9">
				<div class="row">
					<?php
					$decoration_img = get_field('decoration_gallery');				
					$size = 'full';
					if( $decoration_img ):
						foreach( $decoration_img as $decoration ):						
							?>
							<div class="col-sm-6">
								<div class="decoration-img">
									<label></label>
									<img src="<?php echo wp_get_attachment_image_url( $decoration['ID'], $size );  ?>" width="100%" height="180">
								</div>
							</div>						
							<?php
						endforeach;
					endif;
					?>					
				</div>
			</div>
			<div class="col-sm-3 text-center">				
				<label></label>
				<div class="package-2">
					<h4>Basic Fixed</h4>
					<p>Rs. 3 Lakhs</p>
				</div>
				<div class="package-2">
					<h4>Basic Fixed</h4>
					<p>Rs. 3 Lakhs</p>
				</div>
				<div class="package-2">
					<h4>Basic Fixed</h4>
					<p>Rs. 3 Lakhs</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#meet-team-->


<?php get_footer(); ?>