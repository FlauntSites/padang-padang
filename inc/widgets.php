<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */


function fsc_padang_padang_widgets_init() {


/**
 * Sidebar Contextual Widgets
 *
 */

	register_sidebar( array(
		'name'          => 'Services Sidebar',
		'description'   => 'Widget area for display on the Services pages',
		'id'            => 'services_sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Client Top Sidebar',
		'description'   => 'Widget area for display on the Client pages in the top section',
		'id'            => 'client_top_sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => 'Clients Sidebar',
		'description'   => 'Widget area for display on the Client pages in Sidebar.',
		'id'            => 'client_sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	


/**
 * Blog Footer Call To Actions
 *
 */

	register_sidebar( array(
		'name'          => 'Blog Post - Call To Action 1',
		'description'   => 'Displays a selected widget directly under individual blog posts. Good for Call To Actions',
		'id'            => 'cta1',
		'before_widget' => '<section class="cta">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => 'Blog Post - Call To Action 2',
		'description'   => 'Displays a selected widget directly under individual blog posts. Good for Call To Actions',		
		'id'            => 'cta2',
		'before_widget' => '<section class="cta">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => 'Blog Post - Call To Action 3',
		'description'   => 'Displays a selected widget directly under individual blog posts. Good for Call To Actions',
		'id'            => 'cta3',
		'before_widget' => '<section class="cta">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	



/**
 * Site Footer Widgets
 *
 */

	register_sidebar( array(
		'name'          => 'Site Footer 1',
		'description'   => 'Widget area for the site footer.',		
		'id'            => 'footer1',
		'before_widget' => '<section class="footer-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Site Footer 2',
		'description'   => 'Widget area for the site footer.',
		'id'            => 'footer2',
		'before_widget' => '<section class="footer-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Site Footer 3',
		'description'   => 'Widget area for the site footer.',
		'id'            => 'footer3',
		'before_widget' => '<section class="footer-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Site Footer 4',
		'description'   => 'Widget area for the site footer.',
		'id'            => 'footer4',
		'before_widget' => '<section class="footer-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'fsc_padang_padang_widgets_init' );



