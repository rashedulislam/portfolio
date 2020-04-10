<?php

if ( ! function_exists( 'mdsami_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mdsami_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'mdsami' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mdsami', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'mdsami' ),
				'top' => __( 'Top Bar Menu', 'mdsami' )
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
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 200,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'mdsami_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mdsami_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'mdsami' ),
			'id'            => 'sidebar',
			'description'   => __( 'Add widgets here to appear in your Sidebar.', 'mdsami' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'mdsami_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function mdsami_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mdsami_content_width', 640 );
}
add_action( 'after_setup_theme', 'mdsami_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */

function mdsami_assets() {
	//Google Fonts
	wp_enqueue_style( 'google-fonts-Roboto', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');

// Owl Stylesheets 


   // wp_enqueue_style( 'owlcarousel-min', get_template_directory_uri() . '/assets/plugins/owlcarousel/assets/owl.carousel.min.css'  );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/plugins/owlcarousel/assets/owl.theme.default.min.css'  );

 // Theme CS
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme-3.css' );


    wp_enqueue_style( 'mdsami-style', get_stylesheet_uri() );
    


  
	
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/plugins/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/plugins/popper.min.js'  );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js'  );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/plugins/owlcarousel/owl.carousel.min.js'  );
    //Page Specific JS
    wp_enqueue_script( 'imagesloaded' , get_template_directory_uri() . '/assets/plugins/imagesloaded.pkgd.min.js'  );
   wp_enqueue_script( 'isotope' , get_template_directory_uri() . '/assets/plugins/isotope.pkgd.min.js'  );
      wp_enqueue_script( 'isotope-custom' , get_template_directory_uri() . '/assets/js/isotope-custom.js'  );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/js/testimonials.js'  );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/js/demo/style-switcher.js'  );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/assets/plugins/js-cookie.min.js'  );
    

     // FontAwesome JS 
    wp_enqueue_script( 'fontawesome' , get_template_directory_uri() . '/assets/fontawesome/js/all.js'  );



    

    







	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mdsami_assets' );



// remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
// add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
// /**
//  * WooCommerce Loop Product Thumbs
//  **/
// if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
// 	function woocommerce_template_loop_product_thumbnail() {
// 		echo woocommerce_get_product_thumbnail();
// 	}
//}
/**
 * WooCommerce Product Thumbnail
 **/


