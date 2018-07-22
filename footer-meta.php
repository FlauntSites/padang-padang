
<?php if ( true == is_active_sidebar( 'footer1' ) || is_active_sidebar( 'footer2' ) || is_active_sidebar( 'footer3' ) || is_active_sidebar( 'footer4' ) ) : ?>

	<footer class="footer">

			<?php dynamic_sidebar( 'footer1' ); ?>
			<?php dynamic_sidebar( 'footer2' ); ?>
			<?php dynamic_sidebar( 'footer3' ); ?>
			<?php dynamic_sidebar( 'footer4' ); ?>

	</footer>	

<?php endif; ?>
