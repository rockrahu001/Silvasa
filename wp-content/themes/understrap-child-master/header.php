<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body id="home" class="homepage">

	<header id="header">
		<nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
			<div class="container">
				<p class="">Estimation: Package (50000) + Hotel (100000)</p>                
			</div>			
		</nav>		
	</header>

	<section id="main-slider">
		<div class="top-wrap">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

							<?php endif; ?>


						<?php } else {
							the_custom_logo();
						} ?><!-- end custom logo -->

					</div>
					<div class="col-sm-6">
						<?php
						$args = array('post_type' => 'people', 'orderby' => 'date', 'order' => 'DESC');
						$query = new WP_Query( $args );
						if ( $query->have_posts() ):
							while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-sm-4">
									<div class="top-user">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" height="100px" width="100px">
										<div class="top-user-inner">
											<label><?php echo get_the_title(); ?></label>
											<p><?php echo get_the_content(); ?></p>
										</div>
									</div>
								</div>			
							<?php	endwhile;
						endif;
						wp_reset_postdata();
						?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel" style="height: 60%;">
			<?php
			$images = get_field('images');
			$size = 'full';
			if( $images ):
				foreach( $images as $image ):
					?><div class="item" style="background-image: url(<?php echo wp_get_attachment_image_url( $image['ID'], $size ); ?>);"></div><?php
				endforeach;
			endif;
			?>
		</div>
		<!--/.owl-carousel-->
	</section>
	<!--/#main-slider-->	