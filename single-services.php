<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main small-12 small-centered" role="main">

		<?php
		while ( have_posts() ) : the_post();

		 the_field( 'fsc_general_info_text' );
		 
		 endwhile;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part( 'footer-cta' );
get_footer();