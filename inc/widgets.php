<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */


function fsc_padang_padang_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<li class="footer-widget">',
		'after_widget'  => '</div></li>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2><div class="widget-contain">',
	) );

	register_sidebar( array(
		'name'          => 'Services Sidebar',
		'id'            => 'services_sidebar',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Client Top Sidebar',
		'id'            => 'client_top_sidebar',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );	

	register_sidebar( array(
		'name'          => 'Clients Sidebar',
		'id'            => 'client_sidebar',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );	

}

add_action( 'widgets_init', 'fsc_padang_padang_widgets_init' );



