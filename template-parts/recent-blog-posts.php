	<section class="recent-blog-posts">

        <header class="entry-header">
            <h2>Recent Blog Posts</h1>
        </header>


        <?php $the_query = new WP_Query( 

            array(
	            'post_type' => 'post'
            )

        ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->
            <article>
                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
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