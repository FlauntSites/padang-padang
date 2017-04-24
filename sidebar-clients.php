<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padang_Padang
 */

if ( ! is_active_sidebar( 'client_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area small-12 medium-4 columns" role="complementary">
	<?php dynamic_sidebar( 'client_sidebar' ); ?>
</aside><!-- #secondary -->