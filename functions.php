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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function pillar_get_page_blocks() {
	// $blocks = array(
    //     'block_hero', 
    //     'block_stockist'
    // );
    if( have_rows('page_blocks') ):
        while ( have_rows('page_blocks') ) : the_row();
            $layout = get_row_layout();
			$layout = str_replace( 'block_', '', $layout );
			get_template_part( 'template-parts/blocks/block', $layout);
            
            // if( in_array( get_row_layout(), $blocks ) ){
            //     get_template_part( 'template-parts/blocks/block', $layout );
            // }
			
        endwhile;
        return true;
    endif;
}

add_filter('acf/settings/save_json', 'pillar_acf_json_save_point');
function pillar_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter('acf/settings/load_json', 'pillar_acf_json_load_point');
function pillar_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths; 
}
function pillar_create_post_type_portofolio(){
	$args = array(
		'supports' => array( 'title' , 'editor' , 'custom-field' , 'thumbnail' ),
		'labels' => array(
			'name' => __( 'Portofolios' ),
			'singular_name' => __( 'Portofolio' ),
		),
		'public' => true,
		'rewrite' => array( 'slug' => __( 'portofolios' ) ),
		);
	register_post_type( 'portofolio' , $args );
}
add_action( 'init', 'pillar_create_post_type_portofolio' );
// Register Custom Taxonomy
function pillar_portofolio_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Portofolio Categories', 'Portofolio Categories', 'pillar' ),
		'singular_name'              => _x( 'Portofolio Category', 'Portofolio Category', 'pillar' ),
		'menu_name'                  => __( 'Portofolio Category', 'pillar' ),
		'all_items'                  => __( 'All Categories', 'pillar' ),
		'parent_item'                => __( 'Parent Category', 'pillar' ),
		'pareCategory_colon'         => __( 'Parent Category:', 'pillar' ),
		'new_item_name'              => __( 'New Category Name', 'pillar' ),
		'add_new_item'               => __( 'Add New Category', 'pillar' ),
		'edit_item'                  => __( 'Edit Category', 'pillar' ),
		'update_item'                => __( 'Update Category', 'pillar' ),
		'view_item'                  => __( 'View Category', 'pillar' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'pillar' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'pillar' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pillar' ),
		'popular_items'              => __( 'Popular Categories', 'pillar' ),
		'search_items'               => __( 'Search Categories', 'pillar' ),
		'not_found'                  => __( 'Not Found', 'pillar' ),
		'no_terms'                   => __( 'No Categories', 'pillar' ),
		'items_list'                 => __( 'Categories list', 'pillar' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'pillar' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portofolio-category', array( 'portofolio' ), $args );
}
add_action( 'init', 'pillar_portofolio_taxonomy', 0 );


function pillar_create_post_type_team() {
	$args = array(
		'supports' => array( 'title' , 'editor' , 'custom-field' , 'thumbnail' ),
		'labels' => array(
			'name' => __( 'Teams' ),
			'singular_name' => __( 'Team' ),
		),
		'public' => true,
		'rewrite' => array( 'slug' => __( 'teams' ) ),
		);
	register_post_type( 'team' , $args );
}
add_action( 'init', 'pillar_create_post_type_team' );

// Register Custom Taxonomy
function pillar_team_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Team Roles', 'Team Roles', 'pillar' ),
		'singular_name'              => _x( 'Team Role', 'Team Role', 'pillar' ),
		'menu_name'                  => __( 'Team Role', 'pillar' ),
		'all_items'                  => __( 'All Roles', 'pillar' ),
		'parent_item'                => __( 'Parent Role', 'pillar' ),
		'pareCategory_colon'         => __( 'Parent Role:', 'pillar' ),
		'new_item_name'              => __( 'New Role Name', 'pillar' ),
		'add_new_item'               => __( 'Add New Role', 'pillar' ),
		'edit_item'                  => __( 'Edit Role', 'pillar' ),
		'update_item'                => __( 'Update Role', 'pillar' ),
		'view_item'                  => __( 'View Role', 'pillar' ),
		'separate_items_with_commas' => __( 'Separate Roles with commas', 'pillar' ),
		'add_or_remove_items'        => __( 'Add or remove Roles', 'pillar' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pillar' ),
		'popular_items'              => __( 'Popular Roles', 'pillar' ),
		'search_items'               => __( 'Search Roles', 'pillar' ),
		'not_found'                  => __( 'Not Found', 'pillar' ),
		'no_terms'                   => __( 'No Roles', 'pillar' ),
		'items_list'                 => __( 'Roles list', 'pillar' ),
		'items_list_navigation'      => __( 'Roles list navigation', 'pillar' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'team-role', array( 'team' ), $args );
}
add_action( 'init', 'pillar_team_taxonomy', 0 );

// Footer Widget Area

register_sidebar( array(
    'name' => 'Pillar Widget Footer 1',
    'id' => 'pillar-custom-widget-1',
    'description' => 'This Widget Appear on footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h6 class="widget-title">',
    'after_title' => '</h6>',
    ) );


register_sidebar( array(
    'name' => 'Pillar Widget Footer 2',
    'id' => 'pillar-custom-widget-2',
    'description' => 'This Widget Appear on footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h6 class="widget-title">',
    'after_title' => '</h6>',
    ) );

// Custom Widget

class Pillar_custom_widget extends WP_Widget {

	function __construct(){
		parent::__construct(
			// ID
			'pillar_subscribe',
			// Name
			__( 'Pillar Subscribe' , 'pillar' ),
			// Description
			array( 'description' => __( 'pillar'), ),

		);
	}

	public function widget( $args , $instance ){
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$blog_title = get_bloginfo( 'name' );
		$tagline = get_bloginfo( 'description' );
		$subscribe_item = get_field( 'subscribe' , 'option' );
		
		echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
		<p>
			<?php echo $subscribe_item['sub_title']; ?>
		</p>
		<form class="form--merge form--no-labels" action="<?php echo $subscribe_item['url_form']; ?>" method="post" id="subForm" data-error="Please fill all fields correctly." data-success="Thanks for signing up! Please check your inbox for confirmation email.">
			<p>
				<label for="fieldEmail">Email Address</label>
				<br />
				<input class="col-md-8 col-sm-6 validate-required validate-email" id="fieldEmail" name="cm-kieth-kieth" type="email" required />
			</p>
			<p>
				<button type="submit">Go</button>
			</p>
		</form>
	  
		<?php echo $args['after_widget'];
	}

	public function form( $instance ){
		if ( isset( $instance[ 'title' ] ) )
			$title = $instance[ 'title' ];
		else
			$title = __( 'Pillar Widget', 'pillar' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance , $old_instane ){
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

function pillar_register_widget() {
	register_widget( 'Pillar_custom_widget' );
	}
add_action( 'widgets_init', 'pillar_register_widget' );

// test

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'General Setting',
	// 	'menu_title'	=> 'General Setting',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
}

function pillar_custom_menu(){
	register_nav_menu( 'pillar-menu' , __( 'Pillar Menu Footer' ) );
}
add_action( 'init' , 'pillar_custom_menu' );