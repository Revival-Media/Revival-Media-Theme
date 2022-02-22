<?php
/**
 * esqueleto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package esqueleto
 */

if ( ! defined( 'ESQUELETO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ESQUELETO_VERSION', '1.0.0' );
}

if ( ! function_exists( 'esqueleto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function esqueleto_setup() {

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
				'menu-1' => esc_html__( 'Primary', 'esqueleto' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'esqueleto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function esqueleto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'esqueleto_content_width', 640 );
}
add_action( 'after_setup_theme', 'esqueleto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function esqueleto_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'esqueleto' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'esqueleto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'esqueleto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function esqueleto_scripts() {
	wp_enqueue_style( 'esqueleto-style', get_stylesheet_uri(), array(), ESQUELETO_VERSION );
	wp_style_add_data( 'esqueleto-style', 'rtl', 'replace' );

	wp_enqueue_script( 'esqueleto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ESQUELETO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'esqueleto_scripts' );

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

/* Load GlideJS script
function load_glide() {
	wp_enqueue_script( 'glide', get_template_directory_uri() . '/../../../node_modules/@glidejs/glide/dist/glide.min.js', false, true);
} 
add_action('wp_enqueue_scripts', 'load_glide');
*/

/* Adds templates to block editor */
add_theme_support( 'block-templates' );

// Creates the project custom post type
function create_projects() {
 
    register_post_type( 'projects',
    // CPT Options
        array(
            'labels' 		=> array(
                'name' 			=> __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public'		=> true,
            'has_archive'	=> true,
            'rewrite' 		=> array(
				'slug' 			=> 'projects'),
			'show_in_rest' 	=> true,
			'menu_icon'		=> 'dashicons-hammer',
			'supports' 		=> array( 
				'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
			),
			'taxonomies'  => array( 'category', 'post_tag' )
        )
    );
}
add_action( 'init', 'create_projects' );

/* stops wp scaling down imags */
add_filter( 'big_image_size_threshold', '__return_false' );

/* Work page category function */
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'post_type' 		=> 'projects',
		'posts_per_page'    => -1,
		'orderby'  			=> 'rand'
	);
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter'],
				'posts_per_page'    => -1
			)
		);
	if ( empty( $_POST['categoryfilter'] ) ) {
		$args = array(
			'post_type' => 'projects',
			'orderby'   => 'rand',
			'posts_per_page'    => -1
		);
	}

	$query = new WP_Query( $args );
	
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			 // Display the Project Title and Client with Hyperlink
        	include('template-parts/project-card.php');
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
	
	die();
}