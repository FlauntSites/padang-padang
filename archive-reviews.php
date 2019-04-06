<?php
/**
 * The template for displaying Review archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">

				<h1 class="page-title">Reviews</h1>

			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="small-12 medium-4 columns">
						
						<?php the_post_thumbnail( 'medium-large' ); ?>

					</div>

					<div class="small-12 medium-8 columns">					
						<header class="entry-header">
							<h2><span class="quote-l">&ldquo;</span><?php the_field( 'fsc_review_quote' ); ?><span class="quote-r">&rdquo;</span></h2>
						</header>

						<section>
							<?php the_field( 'fsc_full_review_text' ); ?>
						</section>
						
						<footer>
							<p class="handwrite">~<?php the_title(); ?></p> 
						</footer>

					<div class="clear"></div>

				</article>		
				<script type="application/ld+json">
				{
					"@context": "http://schema.org/",
					"@type": "Review",
					"itemReviewed": {
						"@type": "Thing",
						"name": "<?php the_category(); ?>"
					},
					"author": {
						"@type": "Person",
						"name": "<?php the_title(); ?>"
					},
					"datePublished": "<?php the_date(); ?> ",
					"reviewRating": {
						"@type": "Rating",
						"description": "<?php the_field( 'fsc_review_quote' ); ?>",
						"ratingValue": "<?php the_field( 'fsc_stars' ); ?>"
					}
				}
				</script>

			<?php endwhile;


		endif; ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();
