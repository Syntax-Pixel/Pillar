<?php
/**
 * Pillar-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pillar-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pillar_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pillar_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Pillar-theme, use a find and replace
		 * to change 'pillar-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pillar-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'pillar-theme' ),
				'menu-2' => esc_html__( 'Pillar Menu Footer', 'pillar-theme' ),
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
				'pillar_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'pillar_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pillar_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pillar_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'pillar_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pillar_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pillar-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pillar-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
		);
}
add_action( 'widgets_init', 'pillar_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pillar_theme_scripts() {
	
	wp_enqueue_style( 'pillar-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-socicon', get_template_directory_uri() . '/assets/css/socicon.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-iconsmind', get_template_directory_uri() . '/assets/css/iconsmind.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-interface-icon', get_template_directory_uri() . '/assets/css/interface-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillar-google-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CMontserrat:400,700', array(), null ); 
	wp_enqueue_style( 'pillar-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pillar-theme-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'pillar-jquery', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pillar-isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-ytplayer', get_template_directory_uri() . '/assets/js/ytplayer.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-easypiechart', get_template_directory_uri() . '/assets/js/easypiechart.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-twitterfetcher', get_template_directory_uri() . '/assets/js/twitterfetcher.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('pillar-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pillar-script', get_template_directory_uri() . '/assets/js/scripts.js', array('pillar-jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pillar_theme_scripts' );

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
 * Comment Helper
 */
require get_template_directory() . '/inc/comment-part.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ACF Get Page Block
require get_template_directory() . '/functions/acf-page-block.php';

// ACF Backup Point
require get_template_directory() . '/functions/acf-backup.php';

// Register Custom Post Type Portofolio
require get_template_directory() . '/functions/post-portofolio.php';

// Register Custom Post Type Team
require get_template_directory() . '/functions/post-team.php';

// Register Custom Taxonomy
require get_template_directory() . '/functions/add-taxonomy.php';

// Add Custom Sidebar
require get_template_directory() . '/functions/add-sidebar.php';

// Add Custom Widget
require get_template_directory() . '/functions/add-widget.php';

// Add General Theme Setting ACF
require get_template_directory() . '/functions/add-general-theme.php';



