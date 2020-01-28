<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main small-12 small-centered" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-home' );

			endwhile; // End of the loop.
			?>

			<?php get_template_part( 'template-parts/footer-cta' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
