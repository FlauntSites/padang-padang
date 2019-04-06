<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

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
</article><!-- #post-## -->
