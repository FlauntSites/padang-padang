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
		<main id="main" class="site-main small-12 small-centered" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="small-12 medium-5 columns">
						
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
						<?php if ( has_post_thumbnail() ) { ?>

							<div class="small-12 medium-7 columns">	

						<?php } else { ?>

							<div class="small-12 columns">	

						<?php }?>

						<header class="entry-header">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</header>

						<section>
							<?php the_excerpt(); ?>
						</section>

						<footer>
							<a href="<?php the_permalink(); ?>" class="btn">Read More...</a>
						</footer>
					</div>

					<div class="clear"></div>

				</article>	

			<?php endwhile; // End of the loop.

			fsc_page_navi();

		 endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
