<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main site-main small-12 small-centered" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); {?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="small-12 medium-4 columns">
						
						<?php the_post_thumbnail( 'medium-large' ); ?>

					</div>

					<div class="small-12 medium-8 columns">					

					<header class="entry-header">
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>

					<section>
						<?php the_excerpt(); ?>
					</section>
					
					<footer>
					</footer>

					<div class="clear"></div>

				</article>	

			<?php } endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
