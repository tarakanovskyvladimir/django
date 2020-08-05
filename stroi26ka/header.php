<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stroi26ka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<meta name="yandex-verification" content="578c8127dd5eccc8" />
<meta name="google-site-verification" content="Z_B1pvgJ6apXjEtX0Yzl77BLI5MCex6r5X_zOeDygIo" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stroi26ka' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation"><div class="site-content block-middle flex-container">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stroi26ka' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'flex-container',
			) );
			?>
			<?php get_search_form(); ?>
		</div></nav><!-- #site-navigation -->
		<div class="site-branding">
			<address class="wp-caption-text">
			<div><?php the_custom_logo(); /*if ( is_front_page() && is_home() ){home_url( '/' );}*/ ?>
			<p class="text-uppercase">партнер базы стб</p></div>
			<div><p class="local-address block-middle">г. Ставрополь, ул. Доваторцев 183В</p>
			<p class="local-tel block-middle"><a href="tel:+79624410880">8 (962) 44 10 880;</a> <a href="tel:+79283218630">8 (928) 321 86 30</a></p></div> 
			</address>
			<img src="<?php bloginfo("template_url"); ?>/img/banner.jpg" alt="Все для стройки">
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content block-middle">
