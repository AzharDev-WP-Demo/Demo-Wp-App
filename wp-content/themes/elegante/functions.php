<?php
/**
 * demo-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package demo-wp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function demo_wp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on demo-wp, use a find and replace
		* to change 'demo-wp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'demo-wp', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'demo-wp' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'demo_wp_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'demo_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function demo_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'demo_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'demo_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function demo_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'demo-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'demo-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'demo_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function demo_wp_scripts() {
	
	wp_enqueue_style( 'font-wp-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'owl-wp-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	

	wp_style_add_data( 'demo-wp-style', 'rtl', 'replace' );
	wp_enqueue_script( 'wp-jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wp-owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wp-elegante', get_template_directory_uri() . '/assets/js/elegante.js', array(), _S_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'demo_wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'vc_before_init',  'load_custom_elements' );

add_shortcode( 'elegante_banner',  'elegante_banner_function' );
add_shortcode( 'elegante_trending',  'elegante_trending_function' );
add_shortcode( 'elegante_banner',  'elegante_banner_function' );
add_shortcode( 'elegante_banner',  'elegante_banner_function' );

function load_custom_elements(){
	elegante_banner();
	elegante_trending();
}

function elegante_banner() {
    vc_map( array(
     "name" => __( "Elegante Banner", "elegante" ),
     "base" => "elegante_banner",
     "class" => "",
     "category" => __( "By Elegante", "elegante"),
     "params" => array()
    ) );
 }

 function elegante_trending() {
    vc_map( array(
     "name" => __( "Elegante Trending", "elegante" ),
     "base" => "elegante_trending",
     "class" => "",
     "category" => __( "By Elegante", "elegante"),
     "params" => array()
    ) );
 }

function elegante_banner_function( $atts, $content = null ) { ?>    
	<section>
		<div class="banner">
			<div class="flex-basis40 title-banner">
				<h3>
					Shop New Arrivals
				</h3>
				<button>SHOP NOW</button>
			</div>
			<div class="flex-basis60">
				<img class="responsiveImage" src="images/Copy of Copy of 6.png" alt="">
			</div>
		</div>
	</section>
<?php }

function elegante_trending_function( $atts, $content = null ) { ?>    
	<section class="common-margn">
		<div class="trending-title">
			<h5 class="fonttype2-title">TRENDING NOW</h5>
		</div>
		<div class="trending-content-wrapper">
			<div class="trending-content">
				<img class="responsiveImage" src="images/Copy of Copy of 23.png" alt="">
				<h6>Trend setting makeup</h6>
				<p>Lorem ipsum dolor sit amet, consetetur</p>
			</div>
			<div class="trending-content">
				<img class="responsiveImage" src="images/Copy of Copy of 10.png" alt="">
				<h6>New makeup brushes</h6>
				<p>Lorem ipsum dolor sit amet, consetetur</p>
			</div>
			<div class="trending-content">
				<img class="responsiveImage" src="images/Copy of Copy of 20.png" alt="">
				<h6>This seasons hottest nail polish</h6>
				<p>Lorem ipsum dolor sit amet, consetetur</p>
			</div>
		</div>
	</section>
  <?php }



