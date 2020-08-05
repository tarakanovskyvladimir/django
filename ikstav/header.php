<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikstav
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="2PSOxmyP6el5L52tFQfBpkAmy6TQDE8WuGETceDhkXk" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link href="http://allfont.ru/allfont.css?fonts=franklin-gothic-heavy" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site block-middle">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ikstav' ); ?></a>

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
			$ikstav_description = get_bloginfo( 'description', 'display' );
			if ( $ikstav_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ikstav_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div> .site-branding -->
		<h2>Кирпич от эконом до премиум класса</h2>
		<section id="logo-address-nav">
			<div class="address-nav flex-container"><a href="/" class="header-logo"><img src="/wp-content/themes/ikstav/img/logo.png" alt=""></a>
			<address><p><img src="/wp-content/themes/ikstav/img/address-phone.png" class="address-img" alt="заказать кирпич по телефону"><a href="tel:+79283215048" class="active-call">21-50-48;</a> <a href="tel:+79624462929" class="active-call">+7 962 446 29 29</a></p>
				<p><img src="/wp-content/themes/ikstav/img/i-location.png" class="address-img" alt="">Ставрополь, ул. Доваторцев 183В</p></address></div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ikstav' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation --></section>
	</header><!-- #masthead -->

	<div id="content" class="site-content flex-container">
