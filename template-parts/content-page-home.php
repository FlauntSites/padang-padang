<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

?>



<?php get_template_part( 'slideshow' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_field( 'fsc_about_section_title' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="home-about">

		<div>
			<?php fsc_figure( 'fsc_about_photo', 'medium-large', '', 'hover-caption'); ?>
		</div>

		<div>
			<?php the_field( 'fsc_about_text' ); ?>
			<a class="btn onehundredcenter" href="<?php the_field( 'fsc_cta_link', 'options' ); ?>"><?php the_field( 'fsc_cta_button_text', 'options' ); ?></a>
		</div>

	</div><!-- .entry-content -->


	<?php get_template_part( 'template-parts/recent-blog-posts' ); ?>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'padang-padang' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
