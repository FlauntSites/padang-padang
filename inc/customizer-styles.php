<?php 
/**
* Renders styles from the Customizer and outputs it to Head.
* 
* @package Padang_Padang
*/
?>

<style type="text/css">

/*--------------------
BASE (MOBILE) SIZE
--------------------*/


<?php if ( true == get_theme_mod( 'image_stroke', true ) ) : ?>
    img.size-medium_large, img.size-large, img.size-oversized, .swiper-slide{
        outline:1px solid #fff;
        outline-offset: -10px;
    }
<?php endif; ?>

    /*h1{
        font-size:<?php echo get_theme_mod( 'headers_typography' ); ?>;
    }*/

    body{
         color:<?php echo get_theme_mod( 'text_color', '' ); ?>; 
    }  

    .page-title, .entry-title, .sidebar-title{
        border-bottom: 1px solid <?php echo get_theme_mod( 'text_color', '' ); ?>;
    }

    button.menu-toggle, a.btn, .footer {
        background-color:<?php echo get_theme_mod( 'site_accent_color', '' ); ?>;
    }

    input {
        border: 1px solid <?php echo get_theme_mod( 'site_accent_color', '' ); ?>;
    }


    a, .social-icon, .swiper-button-prev, .swiper-button-next{
        color:<?php echo get_theme_mod( 'site_accent_color', '' ); ?>;
    }

    a:hover, .social-icon:hover, .swiper-button-prev:hover, .swiper-button-next:hover{
        color:<?php echo get_theme_mod( 'site-accent_hover_color', '' ); ?>;
    }

    .main-navigation li a, .btn{
        color:<?php echo get_theme_mod( 'menu_text_color', '' ); ?>;
    }

    .footer-widget-area, .footer-widget-area a, .footer ul.footer-widget-area li.footer-widget h2 {
        color:<?php echo get_theme_mod( 'footer_widget_text_color', '' ); ?>;
    }

    .footer ul.footer-widget-area li.footer-widget h2{
        border-bottom: 1px solid <?php echo get_theme_mod( 'footer_widget_text_color', '' ); ?>;
    }

    .footer-widget-area a:hover{
        opacity: 0.75;
    }


/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {

    <?php if ( true == get_theme_mod( 'menu_background', true ) ) : ?>

        .main-navigation {
            background-color:<?php echo get_theme_mod( 'site_accent_color', '' ); ?>;
        }

        .main-navigation li:hover, .main-navigation li.current-menu-item, .btn:hover{
            background-color:<?php echo get_theme_mod( 'site-accent_hover_color', '' ); ?>;
            color:<?php echo get_theme_mod( 'menu_text_hover_color', '' ); ?>;
        }        

        /*.main-navigation li a:hover, .main-navigation li a.current-menu-item{
            color:<?php echo get_theme_mod( 'menu_text_hover_color', '' ); ?>;
        }*/

    <?php endif; ?>



    .main-navigation li a{
        color:<?php echo get_theme_mod( 'menu_text_color', '' ); ?>;
    }

    /*.main-navigation li a:hover, .main-navigation li.current-menu-item{
        color:<?php echo get_theme_mod( 'menu_text_hover_color', '' ); ?>;
    }*/

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



</style>

