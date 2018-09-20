<?php

// the query
$the_query = new WP_Query(
    array(
        'post_type'      => 'reviews',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'orderby'        => 'rand',
    )
); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <section class="service-section" id="reviews-service">

        <div class="review-text-block">
            <h2>Client Love</h2>
                <?php while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    ?>
                    <?php the_field( 'fsc_full_review_text' ); ?>
                    <p class="handwrite">~<?php the_title(); ?></p>
                </div>
                <?php the_post_thumbnail( 'medium_large', [ 'class' => 'service-thumb' ] ); ?>
            <?php endwhile; ?>

        <div class="clear"></div>
        
    </section>

	<?php wp_reset_postdata(); ?>
<?php endif;
?>



