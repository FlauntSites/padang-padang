<?php 
/**
* Renders styles from the Customizer and outputs it to Head.
* 
* @package Padang_Padang
*/
?>


<?php 
/**
 * Take Accent color, and convert it to RGBA, and add an opacity of .75.
 */
$accent        = get_theme_mod( 'site_accent_color' );
$accent_string = ltrim( $accent, '#' );
$arr           = str_split( $accent_string, '2' );
$rgb           = '';

foreach ( $arr as $value ) {
	$new_value = hexdec( $value ) . ', ';
	$rgb      .= $new_value;
}
$accent_opacity = 'rgba(' . $rgb . '.75)';
?>


<style type="text/css">

/*--------------------
BASE (MOBILE) SIZE
--------------------*/

<?php if ( true == get_theme_mod( 'image_stroke', true ) ) : ?>
	img.size-medium_large, img.size-large, img.size-oversized, .swiper-slide, .service-thumb{
		outline:1px solid #fff;
		outline-offset: -10px;
	}
<?php endif; ?>


.fs-sharebar{
	color:<?php echo get_theme_mod( 'caption_text_color', '#fff'  ); ?>; 
} 

.fs-sharebar svg.fs-icons{
	fill:<?php echo get_theme_mod( 'caption_text_color', '#fff'  ); ?>; 
}



body{
	color:<?php echo get_theme_mod( 'text_color', '#999'  ); ?>; 
	background-color:<?php echo get_theme_mod( 'site_background_color', '#fff' ); ?>
}  

.logo{
	<?php $logo_width = get_option( 'fsc_options', '200' ); ?>
	width: <?php echo $logo_width[ 'fsc_logo_width' ]; ?>px;
}

.main-navigation li, .main-navigation li a, .main-navigation li a:visited{
	color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
	background:<?php echo get_theme_mod( 'site_accent_color', '#333' ); ?>;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6, .page-title, .page-title a, .entry-title, .entry-title a, .sidebar-title, .sidebar-title a{
	color:<?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
}

.page-title, .entry-title, .sidebar-title{
	border-bottom: 1px solid <?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
}

.page-title a:hover, .entry-title a:hover, .sidebar-title a:hover {
	color:<?php echo get_theme_mod( 'heading_hover_color', '#222' ); ?>;
}    

button.menu-toggle, a.btn, .footer {
	background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
}

svg.fs-icons, svg.fs-icons a{
	fill:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
}

input {
	border: 1px solid <?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
}


a, a:visited, .social-icon, .swiper-button-prev, .swiper-button-next{
	color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
}

a:hover, .social-icon:hover, .swiper-button-prev:hover, .swiper-button-next:hover{
	color:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
}   

svg.fs-icons:hover, svg.fs-icons a:hover{
	fill:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
}

.btn, .btn:visited, button, input[type="button"], input[type="reset"], input[type="submit"]{
	color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
	background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
}

.btn:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{
	color:<?php echo get_theme_mod( 'site_accent_text_hover_color', '#ddd' ); ?>;
	background-color:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
}

.footer, .footer a, .footer p, .footer-widget, .footer-widget-area, .footer-widget-area a, .footer ul.footer-widget-area li.footer-widget h2, .footer .footer-widget h3, .footer .footer-widget h3 a {
	color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
}

.footer ul.footer-widget-area li.footer-widget h2, .footer .footer-widget h3{
	border-bottom: 1px solid <?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
}

.footer-widget-area a:hover{
	opacity: 0.75;
}


#reviews-service{
	background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;  
	color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
}

/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {


	<?php if ( false == get_theme_mod( 'menu_background', true ) ) : ?>
		.main-navigation ul{
			background:none;
		}

		.main-navigation li, .main-navigation li a, .main-navigation li a:visited{
			color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>!important;
			background:none;
		}

		.main-navigation li a:hover, .main-navigation li a:hover{
			color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>!important;
			background:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
		}
	<?php endif; ?> 


	<?php if ( true == get_theme_mod( 'menu_background', true ) ): ?>
		.main-navigation{
			background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>!important;
		}

		.main-navigation li, .main-navigation li a, .main-navigation li a:visited{
			color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>!important;
		}

		.main-navigation li a:hover, .main-navigation li a:hover{
			background:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
		}
	<?php endif; ?>  


	.recent-post-thumbs{
		grid-template-columns: repeat( <?php echo get_theme_mod( 'number_recent_posts_columns', 4 ); ?>, 1fr);
	}

	.recent-post-hover{
		background-color:<?php echo $accent_opacity; ?>!important;
	}


	.scroll-to-top circle{
		fill:<?php echo get_theme_mod( 'site_background_color', '#fff' ); ?>;
	}

	path.arrow{
		fill:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>!important;
	}

} // end of media query

/*--------------------
DESKTOP
--------------------*/
@media screen and (min-width: 64em) {



} // end of media query

/*--------------------
LARGE VIEWING SIZE
--------------------*/

@media only screen and (min-width: 90.063em) {



} // end of media query

/*--------------------
RETINA (2x RESOLUTION DEVICES)
--------------------*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
		only screen and (min--moz-device-pixel-ratio: 1.5),
		only screen and (min-device-pixel-ratio: 1.5) {





} // end of media query


/*--------------------
CUSTOM CSS FROM CUSTOMIZER
--------------------*/

<?php echo get_theme_mod( 'custom_css' ); ?>

</style>

