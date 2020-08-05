<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package muzpatriot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="1e8d9401c6263534" />
	<meta name="google-site-verification" content="zKZbq4eFpn-5c8DD7VAaiPjewEssgY0KiYfHB1oONPw" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'muzpatriot' ); ?></a>

	<header id="masthead" class="site-header">
		<!--<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$muzpatriot_description = get_bloginfo( 'description', 'display' );
			if ( $muzpatriot_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $muzpatriot_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div> .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'muzpatriot' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php if (function_exists('yoast_breadcrumb') && !is_front_page()) {yoast_breadcrumb('<p id="breadcrumbs">','</p>' );
}
?>
