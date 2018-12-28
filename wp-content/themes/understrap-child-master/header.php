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
						<img src="images/logo.png" height="150">
					</div>
					<div class="col-sm-6">
						<div class="col-sm-4">
							<div class="top-user">
								<img src="images/img-3.jpg" height="100px" width="100px">
								<div class="top-user-inner">
									<label>Rakeshgiri Goswami</label>
									<p>Manager</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel" style="height: 60%;">
			<div class="item" style="background-image: url(images/bg1.jpg);"></div>
			<!--/.item-->
			<div class="item" style="background-image: url(images/bg2.jpg);"></div>
			<!--/.item-->
		</div>
		<!--/.owl-carousel-->
	</section>
	<!--/#main-slider-->	