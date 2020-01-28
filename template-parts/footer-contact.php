<?php

function cta_form() {
	if ( true === get_theme_mod( 'footer_contact_form', false ) ) {
		$forms      = GFAPI::get_forms();
		$form_index = get_theme_mod( 'footer_contact_form_name' );

		foreach ( $forms as $key => $value ) {
			if ( $form_index == $key ) {
				gravity_form( $value['id'], false, false );
			}
		}
	}
}

function cta_image() {
	$img = get_theme_mod( 'footer_contact_form_image' );
	return $img['id'];
}

if ( true === get_theme_mod( 'footer_contact_form', false ) ) { ?>
	<div class="cta-form">
		<h2>Say Hello!</h2>
		<?php cta_form(); ?>
		<?php echo wp_get_attachment_image( cta_image(), 'large' ); ?>
	</div>
	<?php
}
