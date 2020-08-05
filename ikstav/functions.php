<?php
/**
 * ikstav functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ikstav
 */

if ( ! function_exists( 'ikstav_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ikstav_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ikstav, use a find and replace
		 * to change 'ikstav' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ikstav', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ikstav' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ikstav_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ikstav_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ikstav_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ikstav_content_width', 640 );
}
add_action( 'after_setup_theme', 'ikstav_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ikstav_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ikstav' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ikstav' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ikstav_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'gis_api' );
function gis_api() {
	wp_register_script( 'gis2-api', '//maps.api.2gis.ru/2.0/loader.js?pkg=full');
	wp_enqueue_script( 'gis2-api' );
}
function ikstav_scripts() {
	wp_enqueue_style( 'ikstav-style', get_stylesheet_uri(), false, time() );

	wp_enqueue_script( 'ikstav-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ikstav-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'zerogravity-popbox', get_template_directory_uri() . '/js/popbox.js', array(), '1.0.1', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ikstav_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
define('WOOCOMMERCE_USE_CSS', false);
function hide_all_wc_prices() {return '';}

add_filter( 'woocommerce_get_price_html', 'hide_all_wc_prices');
add_filter( 'woocommerce_get_price_html', 'custom_price_html', 100, 2 );
function custom_price_html( $price, $product ){
  if (is_product()) { $price .='Цена: ';}
  if ($product->get_category_ids()[0]=='45') {
  	$price .= '<span class="price_contain">' . get_post_meta( get_the_ID(), '_regular_price', true). ' руб./т</span>';}
  else{$price .= '<span class="price_contain">' . get_post_meta( get_the_ID(), '_regular_price', true). ' руб./шт</span>';}
  /*$price .= ' <span class="symbol">' . sprintf(get_woocommerce_currency_symbol() ) . '</span>';*/
    return apply_filters( 'woocommerce_get_price', $price );
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'loop_add_to_cart', 10 );
function loop_add_to_cart(){ global $product; echo '<p class="zakaz_list" data-popbox-target="popobrzvon">Купить</p>'; }

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'single_add_to_cart_custom', 30 );
function single_add_to_cart_custom(){ global $product; echo '<p class="zakaz" data-popbox-target="popobrzvon">Заказать</p>'; }
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){ global $post;
	return ' <a href="'. get_permalink($post) . '">Читать дальше...</a>';
}
add_filter('the_content', 'the_end');
function the_end( $text ){
	$u_time = get_the_time('U'); $u_modified_time = get_the_modified_time('U'); 
	if ($u_modified_time >= $u_time + 86400) {
		$updated_date = get_the_modified_time('Y-m-d'); 
		$updated_time = get_the_modified_time('G:i');
		$day_created = get_the_date('Y-m-d');
	} 
	return $text.'<meta itemprop="datePublished" content="'.$day_created.'"><meta itemprop="dateModified" content="'.$updated_date.'">';
}
/*add_filter( 'woocommerce_product_tabs', 'ikstav_desc');
function ikstav_desc(...$tabs){
var_dump($tabs{[0]}['description']);
if ( ! empty( $tabs ) ) : ?><div class="woocommerce-tabs wc-tabs-wrapper">		
	<?php if ($tabs['description']) { ?>
		<div><?php $tabs[0]['description']["title"]; ?></div>
	<?php } ?>
</div><?php endif; 
}*/
