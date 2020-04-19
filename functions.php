<?php

if (!function_exists('mdsami_setup')) :

  function mdsami_setup()
  {

    load_theme_textdomain('mdsami', get_template_directory() . '/languages');


    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(
      array(
        'primary' => __('Primary Menu', 'mdsami'),
        'top' => __('Top Bar Menu', 'mdsami')
      )
    );

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

    add_theme_support(
      'custom-logo',
      array(
        'height'      => 100,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );

    add_theme_support('customize-selective-refresh-widgets');
  }
endif;
add_action('after_setup_theme', 'mdsami_setup');



function mdsami_widgets_init()
{

  register_sidebar(
    array(
      'name'          => __('Sidebar', 'mdsami'),
      'id'            => 'sidebar',
      'description'   => __('Add widgets here to appear in your Sidebar.', 'mdsami'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    )
  );
}
add_action('widgets_init', 'mdsami_widgets_init');



function mdsami_content_width()
{
  $GLOBALS['content_width'] = apply_filters('mdsami_content_width', 640);
}
add_action('after_setup_theme', 'mdsami_content_width', 0);



function mdsami_assets()
{
  //Google Fonts
  wp_enqueue_style('google-fonts-Roboto', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');

  // Owl Stylesheets 


  // wp_enqueue_style( 'owlcarousel-min', get_template_directory_uri() . '/assets/plugins/owlcarousel/assets/owl.carousel.min.css'  );
  wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/plugins/owlcarousel/assets/owl.theme.default.min.css');

  // Theme CS
  wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/css/theme-3.css');


  wp_enqueue_style('mdsami-style', get_stylesheet_uri());

  wp_enqueue_script('popper', get_template_directory_uri() . '/assets/plugins/popper.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/plugins/owlcarousel/owl.carousel.min.js');
  //Page Specific JS
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/plugins/imagesloaded.pkgd.min.js', array('jquery'), '', true);
  wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/plugins/isotope.pkgd.min.js', array('jquery'), '', true);
  wp_enqueue_script('isotope-custom', get_template_directory_uri() . '/assets/js/isotope-custom.js', array('jquery'), '', true);
  wp_enqueue_script('testimonials', get_template_directory_uri() . '/assets/js/testimonials.js', array('jquery'), '', true);
  wp_enqueue_script('switcher', get_template_directory_uri() . '/assets/js/demo/style-switcher.js', array('jquery'), '', true);
  wp_enqueue_script('cookie', get_template_directory_uri() . '/assets/plugins/js-cookie.min.js', array('jquery'), '', true);


  // FontAwesome JS 
  wp_enqueue_script('fontawesome', get_template_directory_uri() . '/assets/fontawesome/js/all.js', array('jquery'), '', true);


  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'mdsami_assets');



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


function mdsami_custom_portfolio() {
  $labels = array(
      'name'                  => _x( 'Portfolio', 'mdsami' ),
      'singular_name'         => _x( 'Portfolio', 'mdsami' ),
      'menu_name'             => _x( 'Portfolio', 'mdsami' ),
      'name_admin_bar'        => _x( 'Portfolio', 'mdsami' ),
      'add_new'               => __( 'Add New Portfolio', 'mdsami' ),
      'add_new_item'          => __( 'Add New Portfolio', 'mdsami' ),
      'new_item'              => __( 'New Portfolio', 'mdsami' ),
      'edit_item'             => __( 'Edit Portfolio', 'mdsami' ),
      'view_item'             => __( 'View Portfolio', 'mdsami' ),
      'all_items'             => __( 'All Portfolio', 'mdsami' ),
      'search_items'          => __( 'Search Portfolios', 'mdsami' ),
      'parent_item_colon'     => __( 'Parent Portfolios:', 'mdsami' ),
      'not_found'             => __( 'No Portfolios found.', 'mdsami' ),
      'not_found_in_trash'    => __( 'No Portfolios found in Trash.', 'mdsami' ),
      'featured_image'        => _x( 'Portfolio Cover Image',  'mdsami' ),
      'set_featured_image'    => _x( 'Set Portfolio image', 'mdsami' ),
      'remove_featured_image' => _x( 'Remove Portfolio image', 'mdsami' ),
      'use_featured_image'    => _x( 'Use as Portfolio image', 'mdsami' ),
      'archives'              => _x( 'Portfolio archives', 'mdsami' ),
      'insert_into_item'      => _x( 'Insert into Portfolio', 'mdsami' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Portfolio', 'mdsami' ),
      'filter_items_list'     => _x( 'Filter Portfolios list', 'mdsami' ),
      'items_list_navigation' => _x( 'Portfolios list navigation', 'mdsami' ),
      'items_list'            => _x( 'Portfolios list', 'mdsami' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true, 
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'portfolio' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 5,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
  //'taxonomies'         => array('category', 'post_tag'),
  'exclude_from_search'=> false
  );

  register_post_type( 'portfolio', $args );
}

add_action( 'init', 'mdsami_custom_portfolio' );


function mdsami_portfolio_taxonomies() {

$labels = array(
  'name'              => _x( 'Clients', 'mdsami' ),
  'singular_name'     => _x( 'Client', 'mdsami' ),
  'search_items'      => __( 'Search Client', 'mdsami' ),
  'all_items'         => __( 'All Client', 'mdsami' ),
  'parent_item'       => __( 'Parent Client', 'mdsami' ),
  'parent_item_colon' => __( 'Parent Client:', 'mdsami' ),
  'edit_item'         => __( 'Edit Client', 'mdsami' ),
  'update_item'       => __( 'Update Client', 'mdsami' ),
  'add_new_item'      => __( 'Add New Client', 'mdsami' ),
  'new_item_name'     => __( 'New Client Name', 'mdsami' ),
  'menu_name'         => __( 'Clients', 'mdsami' ),
);

$args = array(
  'hierarchical'      => true,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'rewrite'           => array( 'slug' => 'clients' ),
);

register_taxonomy( 'clients', array( 'portfolio' ), $args );

}

add_action( 'init', 'mdsami_portfolio_taxonomies');


function mdsami_testimonials() {
  $labels = array(
      'name'                  => _x( 'Testimonials', 'mdsami' ),
      'singular_name'         => _x( 'Testimonial', 'mdsami' ),
      'menu_name'             => _x( 'Testimonial', 'mdsami' ),
      'name_admin_bar'        => _x( 'Testimonial', 'mdsami' ),
      'add_new'               => __( 'Add New Testimonial', 'mdsami' ),
      'add_new_item'          => __( 'Add New Testimonial', 'mdsami' ),
      'new_item'              => __( 'New Testimonial', 'mdsami' ),
      'edit_item'             => __( 'Edit Testimonial', 'mdsami' ),
      'view_item'             => __( 'View Testimonial', 'mdsami' ),
      'all_items'             => __( 'All Testimonial', 'mdsami' ),
      'search_items'          => __( 'Search Testimonials', 'mdsami' ),
      'parent_item_colon'     => __( 'Parent Testimonials:', 'mdsami' ),
      'not_found'             => __( 'No Testimonials found.', 'mdsami' ),
      'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'mdsami' ),
      'featured_image'        => _x( 'Testimonial Cover Image',  'mdsami' ),
      'set_featured_image'    => _x( 'Set Testimonial image', 'mdsami' ),
      'remove_featured_image' => _x( 'Remove Testimonial image', 'mdsami' ),
      'use_featured_image'    => _x( 'Use as Testimonial image', 'mdsami' ),
      'archives'              => _x( 'Testimonial archives', 'mdsami' ),
      'insert_into_item'      => _x( 'Insert into Testimonial', 'mdsami' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'mdsami' ),
      'filter_items_list'     => _x( 'Filter Testimonials list', 'mdsami' ),
      'items_list_navigation' => _x( 'Testimonials list navigation', 'mdsami' ),
      'items_list'            => _x( 'Testimonials list', 'mdsami' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true, 
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'testimonial' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 5,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
  //'taxonomies'         => array('category', 'post_tag'),
  'exclude_from_search'=> false
  );

  register_post_type( 'testimonial', $args );
}
add_action( 'init', 'mdsami_testimonials' );
