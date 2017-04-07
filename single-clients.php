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

				<div class="small-12 medium-8 columns">

					<?php get_template_part('slideshow'); ?>
			
				</div>
				<div class="small-12 medium-4 columns">
					<?php fsc_client_related_blog_posts(); ?>
					<a class="btn" href="<?php the_field( 'fsc_proofing_link' ); ?>">Purchae Prints</a>
				</div>
		</aside>
		<div class="clear"></div>
		
		<article class="entry-content">
			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>

			<section class="entry-content small-12 medium-8 columns">
				<?php the_field( 'fsc_client_story_text' ); ?>
			</section>

			<aside class="entry-content small-12 medium-4 columns">
				<?php fsc_client_review(); ?>
			</aside>

			<footer class="article-footer">

			</footer>
		</article>

		<?php get_template_part( '' ); ?>

		 
		 <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();