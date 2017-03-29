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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'padang-padang' ); ?></a>


		<div class="meta-header">

			<div class="social">
				<a class="social-icon" href="<?php the_field( 'fsc_facebook_url', 'options' ); ?>"><i class="fa fa-facebook"></i></a>
				<a class="social-icon" href="<?php the_field( 'fsc_twitter_url', 'options' ); ?>"><i class="fa fa-twitter"></i></a>
				<a class="social-icon" href="<?php the_field( 'fsc_instagram_url', 'options' ); ?>"><i class="fa fa-instagram"></i></a>
			</div>

			<div id="client-search">

				<form role="search" id="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<label>
						<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
					</label>
				</form>

				<div id="client">
					<a class="blue-btn" href="">Client Area</a>
				</div>

			</div>
		</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'padang-padang' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
