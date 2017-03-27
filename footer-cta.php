<aside>
<?php echo the_field('service_engagements_page', 'option'); ?>
  <div class="small-12 medium-4 columns">
      <div class="cta">
        <h3 class="cta-title">Share this post on...</h3>

          <div class="social-cta">
        		<a class="social-icon-cta" id="fb-icon-cta" href="http://www.facebook.com/sharer.php?u=<?php get_the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
						<a class="social-icon-cta" id="twitter-icon-cta" href="http://twitter.com/share?text=&url=<?php get_the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
 						<a class="social-icon-cta" id="pinterest-icon-cta" href="http://pinterest.com/pin/create/button/?url=<?php get_the_permalink(); ?>"><i class="fa fa-pinterest-p"></i></a>        
          </div>
      
      </div>
  </div>

  <div class="small-12 medium-4 columns">
    <div class="cta">
      <h3 class="cta-title">Find out more about...</h3>
         <?php

           $category = get_the_category();

           switch ($category[0]->name) {
               case "Weddings": ?>
                  <a class="cta-category" href="<?php the_field('service_wedding_page', 'option'); ?>">Weddings</a>
                  <?php break;

               case "Engagements":?>
                  <a class="cta-category" href="<?php the_field('service_engagement_page', 'option'); ?>">Engagements</a>
                  <?php break;

               case "Families": ?>
                  <a class="cta-category" href="<?php the_field('service_families_page', 'option'); ?>">Families</a>
                  <?php break;

               case "Headshots": ?>
                  <a class="cta-category" href="<?php the_field('service_headshots_page', 'option'); ?>">Headshots</a>
                  <?php break;

               case "Photobooth": ?>
                  <a class="cta-category" href="<?php the_field('service_photobooth_page', 'option'); ?>">Photobooths</a>
                  <?php break;
           }
           ?>

      </h3>
    </div>
  </div>

  <div class="small-12 medium-4 columns">
    <div class="cta">
      <h3 class="cta-title">Like what you see?</h3>
        <a href="/contact-us" class="cta-category">Hit us up!</a>
    </div>
  </div>

</aside>
