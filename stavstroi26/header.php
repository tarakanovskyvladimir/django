<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stavstroi26
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="mwESbel5qFvJm9NPh5hF-ZTNhSB9arWlEo8fsFMWwOg" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stavstroi26' ); ?></a>
<header id="masthead" class="site-header">
	<section class="address-tel color-white"><div class="site-content block-middle flex-container">
		<h3 class="text-uppercase">Партнер База СТБ</h3>
		<address><img src="<?php bloginfo("template_url"); ?>/img/placeholder.svg" alt="" class="top-svg">г. Ставрополь, ул. Доваторцев, д. 183 В</address>
		<div class="tel-top"><img src="<?php bloginfo("template_url"); ?>/img/old-handphone.svg" alt="Цемент и бетон" class="top-svg"><a href="tel:+79624410800" class="color-white">8 962 441 08 00;</a> <a href="tel:+79283219882" class="color-white">8 928 321 98 82</a></div>
	</div></section>
	<section class="logo-menu"><div class="site-content block-middle flex-container">
	<?php the_custom_logo(); ?><!-- .site-branding -->
	<section class="search-nav"><nav id="site-navigation" class="main-navigation">
		<?php get_search_form(); ?>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stavstroi26' ); ?></button>
		<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu',) ); ?>
	</nav></section><!-- #site-navigation -->
	</div></section>
</header><!-- #masthead -->
<div id="page" class="site">
	<div id="content" class="site-content block-middle">
<?php /* Хлебные крошки Yoast */
if ( function_exists( 'yoast_breadcrumb' ) && !is_front_page()) :
   yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' ); endif;
?>		