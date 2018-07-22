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

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('slideshow'); ?>
			
			<div class="service-cta-mobile">
				<a class="btn onehundredcenter" href="<?php the_field( 'fsc_cta_link', 'options' ); ?>"><?php the_field( 'fsc_cta_button_text', 'options' ); ?></a>
			</div>

			<article>

				<header class="article-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>

				<?php if ( is_active_sidebar( 'services_sidebar' ) ) { ?>

					<section class="entry-content small-12 medium-8 columns">
					
					<?php }else{ ?>

					<section class="entry-content small-12 columns">

				<?php } ?>


						<section class="service-section" id="general-service">
								<?php fsc_figure( 'fsc_general_info_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2><?php the_field( 'fsc_general_info_title' ); ?></h2>
							<?php the_field( 'fsc_general_info_text' ); ?>
							<div class="clear"></div>
						</section>

						<section class="service-section" id="areas-served">
								<?php fsc_figure( 'fsc_areas_served_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2 class="service-title"><?php the_field( 'fsc_areas_served_title' ); ?></h2>
							<?php the_field( 'fsc_areas_served_text' ); ?>
							<div class="clear"></div>
						</section>


						<section class="service-section" id="rates">
								<?php fsc_figure( 'fsc_rates_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2 class="service-title"><?php the_field( 'fsc_rates_title' ); ?></h2>
							<?php the_field( 'fsc_rates_text' ); ?>
							<div class="clear"></div>
						</section>

				</section>

				<?php get_template_part( 'sidebar-services' ); ?>


				<footer class="article-footer">
				</footer>

			</article>
		 
		 <?php endwhile; ?>
		 <?php get_template_part( 'template-parts/recent-blog-posts' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();