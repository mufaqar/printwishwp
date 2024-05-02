<?php
/**
 * printwish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package printwish
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
function printwish_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on printwish, use a find and replace
		* to change 'printwish' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'printwish', get_template_directory() . '/languages' );

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
			'main' => esc_html__( 'Main', 'printwish' ),
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
			'printwish_custom_background_args',
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
add_action( 'after_setup_theme', 'printwish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function printwish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'printwish_content_width', 640 );
}
add_action( 'after_setup_theme', 'printwish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function printwish_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'printwish' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'printwish' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'printwish_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function printwish_scripts() {
	wp_enqueue_style( 'printwish-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
	wp_style_add_data( 'printwish-style', 'rtl', 'replace' );

	wp_enqueue_script( 'printwish-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	  // Enqueue Slick slider CSS
	  wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	  wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
  
	  // Enqueue Slick slider JavaScript
	  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '', true);
  
	  // Enqueue custom script for initializing Slick slider
	  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery', 'slick-js'), '', true);


	  // Enqueue Magnific Popup scripts
	  wp_enqueue_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);

		// Enqueue Magnific Popup styles
		wp_enqueue_style('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
	   
  




}
add_action( 'wp_enqueue_scripts', 'printwish_scripts' );





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

require get_template_directory() . '/inc/cpts.php';
require get_template_directory() . '/inc/ajax_call.php';
require get_template_directory() . '/inc/extra.php';
require get_template_directory() . '/inc/walker_nav.php';



add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}


add_action('wp_ajax_store_data_in_wp_session', 'store_data_in_wp_session');
add_action('wp_ajax_nopriv_store_data_in_wp_session', 'store_data_in_wp_session');

function store_data_in_wp_session() {
    // Start session if not already started
    if (!session_id()) {
        session_start();
    }

    // Get POST data
    $selected_colors = $_POST['SelectedColors'];
    $selected_variants = $_POST['selectedVariants'];
    $additional_info = $_POST['additionalInfo'];
    $product_id = $_POST['ProductID'];

    // Store data in session
    $_SESSION['SelectedColors'] = $selected_colors;
    $_SESSION['selectedVariants'] = $selected_variants;
    $_SESSION['additionalInfo'] = $additional_info;
    $_SESSION['ProductID'] = $product_id;

    // Send response
    wp_send_json_success('Data stored in WordPress session.');
    wp_die();
}


function get_session_data() {
    // Start session if not already started
    if (!session_id()) {
        session_start();
    }

    // Get session data
    $selected_colors = isset($_SESSION['SelectedColors']) ? $_SESSION['SelectedColors'] : '';
    $selected_variants = isset($_SESSION['selectedVariants']) ? $_SESSION['selectedVariants'] : '';
    $additional_info = isset($_SESSION['additionalInfo']) ? $_SESSION['additionalInfo'] : '';
    $product_id = isset($_SESSION['ProductID']) ? $_SESSION['ProductID'] : '';

    return [
        'selected_colors' => $selected_colors,
        'selected_variants' => $selected_variants,
        'additional_info' => $additional_info,
        'product_id' => $product_id,
    ];
}

add_filter('template_include', 'pass_session_data_to_template');

function pass_session_data_to_template($template) {
    // Check if template is the one you want to modify
    if (is_page_template('temp-checkout.php')) {
        
        // Get session data
        $session_data = get_session_data();

        // Pass data to template
        $template_data = [
            'session_data' => $session_data,
        ];

        // Merge template data with existing query data
        $GLOBALS['wp_query']->query_vars = array_merge($GLOBALS['wp_query']->query_vars, $template_data);
    }

    return $template;
}



function change_locations_permalink_structure( $post_link, $post ) {
    if ( 'locations' === $post->post_type && 'publish' === $post->post_status ) {
        $post_link = str_replace( '/locations/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'change_locations_permalink_structure', 10, 2 );

function change_locations_rewrite_rules( $rules ) {
    $new_rules = array();
    foreach ( $rules as $key => $value ) {
        $new_rules[ str_replace( 'locations/', '', $key ) ] = $value;
    }
    return $new_rules;
}
add_filter( 'rewrite_rules_array', 'change_locations_rewrite_rules' );




function change_product_cat_permalink_structure() {
    global $wp_rewrite;
    $wp_rewrite->extra_permastructs['product_cat']['struct'] = '%product_cat%';
}
add_action('init', 'change_product_cat_permalink_structure', 30);




