<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padang_Padang
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php get_template_part( 'inc/customizer-styles' ); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'padang-padang' ); ?></a>


		<div class="meta-header">
			<?php if ( true == get_theme_mod( 'header_social', true ) ) : ?>

				<div class="social">
					<?php fsc_social_icons( 'facebook' ); ?>
					<?php fsc_social_icons( 'twitter' ); ?>
					<?php fsc_social_icons( 'instagram' ); ?>
					<?php fsc_social_icons( 'pinterest' ); ?>
					<?php fsc_social_icons( 'google-plus' ); ?>

				</div>
			<?php endif; ?>
			

			<div id="client-search">
				<?php if ( true == get_theme_mod( 'header_search', true ) ) : ?>

					<form role="search" id="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<label>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
						</label>
					</form>
					
				<?php endif; ?>

				<?php if ( true == get_theme_mod( 'header_client_area', true ) ) : ?>

					<div id="client">
						<a class="btn" href="<?php echo get_theme_mod( 'client_area_link' ); ?>">Client Area</a>
					</div>

				<?php endif; ?>

			</div>
		</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php

				$image = get_field( 'fsc_logo', 'options' );
				$size = 'medium'; // (thumbnail, medium, large, full or custom size)

				if( $image ) { ?>

					<a class="logo" href="<?php echo home_url(); ?>" rel="nofollow">
						<?php echo wp_get_attachment_image( $image, $size ); ?>
					</a>

				<?php } else { ?>
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php } ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i><?php esc_html_e( 'Menu', 'padang-padang' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
