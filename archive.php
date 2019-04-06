<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); {?>

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

			<?php } endwhile;

				fsc_page_navi();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
