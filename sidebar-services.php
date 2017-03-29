<aside class="service-sidebar small-12 medium-4 columns">

  <div class="service-cta">
    <a class="blue-btn onehundredcenter" href="/contact-us">Give us a call!</a>
  </div>

  <div class="service-section">
    <h2><a href="/reviews">Raves + Reviews</a></h2>

    <?php

    $the_query = new WP_Query(
        array (
          'post_count'  => 2,
          'post_type'   => 'reviews',
          'orderby'     => 'rand',
         )
     );

     ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


              <div class="review-small">

                  <div>
                    <img class="round-thumb" itemprop="image" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>">
                    <blockquote class="quote-small"><span class="quote">&ldquo;</span><?php the_field( 'fsc_review_quote' ); ?><span class="quote">&rdquo;</span></blockquote>
                  </div>


                  </div>

                  <div>
                    <p class="handwrite"><?php the_field( 'fsc_client_name' ); ?></p>
                  </div>

              </div>


            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

          <a class="onehundredcenter" href="/reviews">Read more reviews here!</a>
    </div>
</aside>
