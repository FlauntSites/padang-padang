<?php
/**
 * The template for displaying all single Clients
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main small-12 small-centered" role="main">

		<aside>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( is_active_sidebar( 'client_top_sidebar' ) ) { ?>

					<section class="entry-content small-12 medium-8 columns">
					
					<?php }else{ ?>

					<section class="entry-content small-12 columns">

				<?php } ?>

						<?php get_template_part('slideshow'); ?>

					</section>

			<?php get_template_part( 'sidebar-clients-top' ); ?>




		</aside>
		<div class="clear"></div>
		
		<article class="entry-content">

			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>

				<?php if ( is_active_sidebar( 'client_sidebar' ) ) { ?>

					<section class="entry-content small-12 medium-8 columns">
					
					<?php }else{ ?>

					<section class="entry-content small-12 columns">

				<?php } ?>

						<?php the_field( 'fsc_client_story_text' ); ?>

					</section>

			<?php get_template_part( 'sidebar-clients' ); ?>

			<footer class="article-footer"></footer>

		</article>


		 
		 <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();