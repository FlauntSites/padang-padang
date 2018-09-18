<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padang_Padang
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'footer-meta' ); ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
				<?php if ( ! is_admin() ) : ?>
				<a href="/privacy-policy" class="privacy">Privacy Policy</a>
				<?php endif; ?>
			</p>
  			
			<p class="site-credit">
				<?php 

					if ( is_front_page() ){

						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntsites.com/">Flaunt Sites</a>' ); 
				}else{
						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntsites.com/" rel="nofollow">Flaunt Sites</a>' );

				}?>
			</p>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	var mySwiper = new Swiper ('.swiper-container', {
	// Optional parameters
		speed: 2000,
		autoplay: true,
		effect: "fade",
		loop:true,
		// autoHeight: true,
		preloadImages: true,
		loadPrevNext: true,
		loadPrevNextAmount: 1,
	// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	})
</script>

</body>
</html>
