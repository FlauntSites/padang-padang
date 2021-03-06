<?php
/**
 * The template for displaying all pages
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

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			<?php
			if ( is_front_page() ) {
				get_template_part( 'template-parts/footer-contact' );
			}
			get_template_part( 'template-parts/footer-cta' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();
