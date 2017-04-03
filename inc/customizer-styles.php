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
    #content img{
        outline:1px solid #fff;
        outline-offset: -10px;
    }
<?php endif; ?>



/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {


    .site-navigation{
        background-color:<?php echo get_theme_mod( 'menu_background_color', '' ); ?>;
    }

    .main-navigation li a{
        font:color:<?php echo get_theme_mod( 'menu_font', '' ); ?>;
        color:<?php echo get_theme_mod( 'menu_text_color', '' ); ?>;
    }

    .main-navigation li a:hover{
        color:<?php echo get_theme_mod( 'menu_text_hover_color', '' ); ?>;
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



</style>

