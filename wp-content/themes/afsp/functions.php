<?php
/**
 * Afsp functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package afsp
 */

if ( ! function_exists( 'afsp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function afsp_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on afsp, use a find and replace
		* to change 'afsp' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'afsp', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'afsp' ),
			'footer'  => esc_html__( 'Footer Menu', 'afsp' ),
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

		/*
		* Enable support for Post Formats.
		* See https://developer.wordpress.org/themes/functionality/post-formats/
		*/
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'afsp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
	endif; // afsp_setup.
	add_action( 'after_setup_theme', 'afsp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function afsp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'afsp_content_width', 640 );
}
add_action( 'after_setup_theme', 'afsp_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function afsp_scripts() {
	wp_enqueue_style( 'afsp-style', get_stylesheet_uri(), false, filemtime( get_stylesheet_directory() . '/style.css' ) );
	wp_enqueue_style( 'mailchimp-style', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css', false );
	wp_enqueue_style( 'fontawesome-style', '//pro.fontawesome.com/releases/v5.0.13/css/all.css', false );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'afsp-picturefill', get_template_directory_uri() . '/js/picturefill.min.js', array(), filemtime( get_template_directory() . '/js/picturefill.min.js' ), false );
	wp_enqueue_script( 'afsp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), filemtime( get_template_directory() . '/js/skip-link-focus-fix.js' ), true );
	wp_enqueue_script( 'afsp-imgix', get_template_directory_uri() . '/js/imgix.min.js', array(), filemtime( get_template_directory() . '/js/imgix.min.js' ), true );
	wp_enqueue_script( 'afsp-typography', get_template_directory_uri() . '/js/typography.js', array( 'jquery' ), filemtime( get_template_directory() . '/js/typography.js' ), true );
	wp_enqueue_script( 'afsp-flickity', get_template_directory_uri() . '/js/flickity.min.js', array(), filemtime( get_template_directory() . '/js/flickity.min.js' ), true );
	if ( is_page_template( 'page-templates/realconvo.php' ) ) :
		wp_enqueue_script( 'afsp-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), filemtime( get_template_directory() . '/js/masonry.pkgd.min.js' ), false );
		wp_enqueue_script( 'afsp-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), filemtime( get_template_directory() . '/js/imagesloaded.pkgd.min.js' ), false );
	elseif ( is_page_template( 'page-templates/annual-17.php' ) ) :
		wp_enqueue_style( 'afsp-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false );
		wp_enqueue_style( 'afsp-knightlab', '//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css', false, false );
		wp_enqueue_style( 'afsp-30years', get_stylesheet_directory_uri() . '/style_30years.css', false, filemtime( get_stylesheet_directory() . '/style_30years.css' ) );
		wp_enqueue_style( 'afsp-ar17', get_stylesheet_directory_uri() . '/style_ar17.css', false, filemtime( get_stylesheet_directory() . '/style_ar17.css' ) );
		wp_enqueue_script( 'afsp-easings', get_template_directory_uri() . '/js/jquery.easings.min.js', array( 'jquery' ), filemtime( get_template_directory() . '/js/jquery.easings.min.js' ), true );
		wp_enqueue_script( 'afsp-scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.min.js', array( 'jquery' ), filemtime( get_template_directory() . '/js/scrolloverflow.min.js' ), true );
		wp_enqueue_script( 'afsp-openlayers', get_template_directory_uri() . '/js/openlayers.js', array(), false, false );
		wp_enqueue_script( 'afsp-scrollmagic', get_template_directory_uri() . '/js/ScrollMagic.js', array(), false, false );
		wp_enqueue_script( 'afsp-scrollmagic-debug', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array(), false, false );
		wp_enqueue_script( 'afsp-scrollmagic-gsap', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), false, false );
		wp_enqueue_script( 'afsp-gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array(), false, false );
		wp_enqueue_script( 'afsp-ar17-utils', get_template_directory_uri() . '/js/ar17-utils.js', array(), filemtime( get_template_directory() . '/js/ar17-utils.js' ), false );
		wp_enqueue_script( 'afsp-knightlab', '//cdn.knightlab.com/libs/timeline3/latest/js/timeline.js', array(), false, false );
		wp_enqueue_script( 'afsp-ar17-menu', get_template_directory_uri() . '/js/ar17-menu.js', array(), filemtime( get_template_directory() . '/js/ar17-utils.js' ), true );
	elseif ( is_page_template( 'page-templates/statistics.php' ) ) :
		wp_enqueue_script( 'afsp-countup', get_template_directory_uri() . '/js/countUp.js', array( 'jquery' ), filemtime( get_template_directory() . '/js/countUp.js' ), true );
		wp_enqueue_script( 'afsp-d3', '//d3js.org/d3.v3.min.js', array(), false, true );
	endif;
}
add_action( 'wp_enqueue_scripts', 'afsp_scripts' );

/**
 * Remove p tags from around images in wysiwyg.
 *
 * @param string $content The content.
 */
function filter_ptags_on_images( $content ) {
	// do a regular expression replace...
	// find all p tags that have just
	// <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
	// replace it with just the image tag...
	return preg_replace( '/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content );
}

// we want it to be run after the autop stuff... 10 is default.
add_filter( 'acf_the_content', 'filter_ptags_on_images' );

/**
 * Logo for admin
 */
function afsp_custom_login_logo() {
	$logo_url = 'https://afsp.imgix.net/wp-content/uploads/2018/06/StackedLogoColor.png';
	echo '<style type="text/css">
	h1 a { 
		background-image: url(' . esc_url( $logo_url ) . ') !important; 
		background-size: 300px !important;
		width: 300px !important;
		height: 100px !important;
	}
	</style>';
}
add_action( 'login_head', 'afsp_custom_login_logo' );

/**
 * Global variables.
 */
require get_template_directory() . '/inc/globals.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Custom functions that act independently of the theme templates.
*/
require get_template_directory() . '/inc/extras.php';

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

/**
* Load Jetpack compatibility file.
*/
require get_template_directory() . '/inc/jetpack.php';

/**
* Main navigation menu walker.
*/
require get_template_directory() . '/inc/walker.php';

/**
* Load image sizes.
*/
require get_template_directory() . '/inc/image-sizes.php';

/**
* Load features function.
*/
require get_template_directory() . '/inc/features.php';

/**
* Load custom post navigation function.
*/
require get_template_directory() . '/inc/post-navigation.php';

/**
* Load custom function to truncate long post titles.
*/
require get_template_directory() . '/inc/truncate-title.php';

/**
* Load custom comments function.
*/
require get_template_directory() . '/inc/custom-comments.php';

/**
* Load custom imgix function.
*/
require get_template_directory() . '/inc/imgix.php';

/**
* Edit Yoast SEO breadcrumbs https://gist.github.com/timstl/5348604
*/
require get_template_directory() . '/inc/breadcrumbs.php';

/**
* Custom functions for the quilt
*/
require get_template_directory() . '/inc/quilt.php';

/**
* Custom functions for integrating geomywp with acf
*/
require get_template_directory() . '/inc/geomywp-custom.php';

/**
* Custom functions for using social warfare
*/
require get_template_directory() . '/inc/social-warfare.php';

/**
* Custom functions to hide all the metas
*/
require get_template_directory() . '/inc/hide-meta.php';

/**
* Custom functions for input and chapter related things
*/
require get_template_directory() . '/inc/chapter-functions.php';

/**
* Custom functions for shortcodes
*/
require get_template_directory() . '/inc/shortcodes.php';

/**
* Custom functions for admin styles
*/
require get_template_directory() . '/inc/admin-styles.php';

/**
* Custom functions for improved search in the admin
*/
require get_template_directory() . '/inc/custom-search.php';

/**
* Custom functions for improved search in the admin
*/
require get_template_directory() . '/inc/admin-functions.php';

/**
* Custom functions for improved search in the admin
*/
require get_template_directory() . '/inc/acf-functions.php';

/**
* Custom functions for getting notifications to admins
*/
require get_template_directory() . '/inc/notifications.php';

/**
* Utility functions to make wp awesome
*/
require get_template_directory() . '/inc/utilities.php';

/**
* Custom functions for merging events with Donor Drive (including cron job)
*/
require get_template_directory() . '/inc/merge-events.php';

/**
* Custom functions for rss feed
*/
require get_template_directory() . '/inc/rss.php';

/**
* Custom functions for adding widgets and widget areas
*/
require get_template_directory() . '/inc/widgets.php';

/**
* Custom functions for gravity forms
*/
require get_template_directory() . '/inc/gravity-functions.php';

/**
* Custom functions for searchWP plugin
*/
require get_template_directory() . '/inc/searchwp.php';

/**
* Custom functions for sibling posts
*/
require get_template_directory() . '/inc/post-siblings.php';

/**
* Custom functions for algolia
*/
require get_template_directory() . '/inc/algolia.php';
