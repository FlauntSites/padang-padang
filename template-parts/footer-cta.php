<?php


function cta_form() {
	if ( true == get_theme_mod( 'footer_contact_form' ) ) {
		$forms      = GFAPI::get_forms();
		$form_index = get_theme_mod( 'footer_contact_form_name' );

		foreach ( $forms as $key=>$value ) {
			if ( $form_index == $key ) {
				gravity_form( $value['id'], false, false );
			}
		}
	}
}

function cta_image() {
	$img = get_theme_mod( 'footer_contact_form_image' );
	return $img['id'];
}?>

<?php
if ( true == get_theme_mod( 'footer_contact_form' ) ) { ?>
	<div class="cta-form">
		<h2>Say Hello!</h2>
		<?php cta_form(); ?>
		<?php echo wp_get_attachment_image( cta_image(), 'large' ); ?>
	</div>
	<?php
}

/**
 * Display a grid of Recent Blog posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padang_Padang
 */

if ( true === get_theme_mod( 'footer_recent_posts', true ) ) : ?>

    <section class="recent-blog-posts">
        <header class="entry-header">
            <h2>Recent Blog Posts</h1>
        </header>


        <?php
            $num_columns = get_theme_mod( 'number_recent_posts_columns', 4 );
            $num_rows    = get_theme_mod( 'number_recent_posts_rows', 2 );
            $num_posts   = $num_columns * $num_rows;

            $the_query = new WP_Query( array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => $num_posts,
            )
            );

        ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->
            <article class="recent-post-thumbs">
                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    ?>

                    <a class="recent-post-thumb" href="<?php the_permalink(); ?>">

                        <!-- Thumbnail -->
                        <?php
                        if ( $num_columns >= 4 ) {
                            the_post_thumbnail( 'medium_square' );
                        } elseif ( $num_columns < 4 ) {
                            the_post_thumbnail( 'medium_large_square' );
                        }
                        ?>

                        <div class="recent-post-hover">
                            <!-- Title -->
                            <h3>
                                <?php
                                if ( $num_columns < 4 ) {
                                    echo substr( the_title( $before = '', $after = '', false ), 0, 20 ) . '...';
                                } else {
                                    echo substr( the_title( $before = '', $after = '', false ), 0, 40 ) . '...';
                                }
                                ?>
                            </h3>
                            <!-- Add Excerpt here when Gutenberg bug is fixed -->
                        </div>


                    </a>

                <?php endwhile; ?>
                <!-- end of the loop -->
            </article>
            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </section>

<?php endif;
