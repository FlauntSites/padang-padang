<?php
  $images = get_field( 'fsc_slideshow' );
  if( $images ): ?>
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
              <?php foreach( $images as $image ): ?>
                <?php echo wp_get_attachment_image( $image['ID'], 'oversized', false, array( 'alt' => $image['alt'], 'class' => 'swiper-slide' ) );  ?>
              <?php endforeach; ?>
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>
<?php endif; ?>
