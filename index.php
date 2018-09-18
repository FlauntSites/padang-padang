<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-label="<?php the_title(); ?>">

					<header class="entry-header">
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>

					<div class="archive-excerpt-container">


						<?php if (has_post_thumbnail() ): ?>
							<div class="post-thumb-container">

								<a href="<?php the_permalink() ?>">
									<figure class="post-thumb">
										<?php the_post_thumbnail( 'medium-large' ); ?>
										<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
											<figcaption class="post-thumb-caption">
													<?php echo $caption; ?><span> [Read more...]</span>
												<?php endif; ?>
											</figcaption>
									</figure>
								</a>
								
							</div>						
						<?php endif; ?>


						<div class="archive-excerpt-text">

							<section>
								<?php the_excerpt(); ?>
							</section>

							<a href="<?php the_permalink(); ?>" class="btn">Read More...</a>

						</div>

					</div>

				</article>	

			<?php endwhile; // End of the loop.

			fsc_page_navi();

		 endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
