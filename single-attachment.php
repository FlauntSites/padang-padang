<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-attachment">
				<?php $image_size = apply_filters( 'wporg_attachment_size', 'large' ); 
						echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
			
					<?php if ( has_excerpt() ) : ?>
					
					
					<?php 

					$post_object = get_field('catalog');
						var_dump( '$post_object' );
						if( $post_object ): ?>

						<div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<select>

							</select>

						</div>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; 
					
					?>

				
					<div class="entry-caption">
							<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
				<?php endif; ?>
			</div><!-- .entry-attachment -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
