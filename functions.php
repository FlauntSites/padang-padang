<?php
/**
 * Padang Padang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padang_Padang
 */

if ( ! function_exists( 'padang_padang_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function padang_padang_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Padang Padang, use a find and replace
	 * to change 'padang-padang' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'padang-padang', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'padang-padang' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'padang_padang_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'padang_padang_setup' );


/**
 * Enqueue scripts and styles.
 */
function padang_padang_scripts() {
	wp_enqueue_style( 'padang-padang-style', get_stylesheet_uri() );

	wp_enqueue_script( 'padang-padang-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'padang-padang-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'swiper-slider-jquery', get_template_directory_uri() . '/inc/swiper/swiper.jquery.min.js', array( 'jquery' ), '', false );
	
	wp_enqueue_script( 'swiper-slider-script', get_template_directory_uri() . '/inc/swiper/swiper.min.js', array( 'jquery' ), '', false );
	
	wp_enqueue_style( 'swiper-slider-styles', get_template_directory_uri() . '/inc/swiper/swiper.css', array(), ''  );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'padang_padang_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki-fallback.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/widgets.php';





function fsc_figure( $image, $size, $imageclass, $captionclass ){

	/**
	* Let plugins pre-filter the image meta to be able to fix inconsistencies in the stored data.
	*
	* @param string 	$image    		The ACF field name (i.e. 'your_photo_name').
	* @param string  	$size    		Thumbnail size (i.e. 'Thumbnail', 'Medium', 'Large')
	* @param string 	$imageclass     The Figure class you want to use (ex: 'my-figure') 
	* @param string    	$captionclass 	The Figcaption class you want to use (ex: 'caption-blue') 
	*/

		$image = get_field( $image );
		$size = $size;
		$thumb = $image['sizes'][ $size ];

		if( !empty($image) ):  ?>

			<figure class="<?php echo $imageclass; ?>">
			
					<?php echo wp_get_attachment_image( $image['ID'], $size, false, array( 'alt' => $image['alt'] ) );  ?>

					<figcaption class="<?php echo $captionclass; ?>" style="background-color:<?php echo get_theme_mod( 'caption_background_color', '#000' ); ?>">

						<?php echo $image[ 'caption' ]; ?>

					</figcaption>

			</figure>

			<script type="application/ld+json">
				{
				"@context": "http://schema.org",
				"@type": "ImageObject",
				"author": "<?php the_author(); ?>",
				"contentUrl": "<?php echo $thumb; ?>",
				"datePublished": "<?php echo $image[ 'created_timestamp' ]; ?>",
				"description": "<?php echo $image[ 'alt' ]; ?>",
				"name": "<?php echo $image[ 'title' ]; ?>",
				"copyright": "<?php echo $image[ 'copyright' ]; ?>"
				}
			</script>

		<?php endif; 
}


function fsc_social_icons( $social_network ){
		$social_network 	= 	$social_network;
		$social_url 		= 	get_field( 'fsc_' . $social_network . '_url' , 'options' );
		$social_css 		= 	'fa fa-' . $social_network;

		if( !empty( $social_url ) ): { ?>
			<a class="social-icon" href="<?php echo $social_url ?>"><i class="<?php echo $social_css ?>"></i></a>
			<?php }
		endif;
}



function fsc_client_review( ){

	// The Query
	$the_query = new WP_Query( 
		array( 
			'post_type' 		=> 'reviews',
			'posts_per_page'    => 1,
	 )); {?>

		<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div> 
						<h2><?php the_title(); ?></h2> 
						<p><?php the_field( 'fsc_review_quote' ); ?></p>
						<p><?php the_field( 'fsc_stars' ); ?></p>
						<?php the_post_thumbnail(); ?>
					</div> 
					
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else: ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif;  
		}
}
