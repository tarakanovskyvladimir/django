<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oknalux26
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="tn79mGzMqQaR9CCd9HLUn93brRLGugCszw9WogwDrvk" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
<header id="masthead" class="site-header"><div class="site block-middle">
	<ul class="site-branding flex-container"><li><?php the_custom_logo(); ?></li>
		<li><a href="" class="branding-link"><img src="<?php bloginfo("template_url"); ?>/img/calc.png" class="img-vertical-middle">Калькулятор</a></li>
		<li><p class="branding-link" data-popbox-target="popzvon"><img src="<?php bloginfo("template_url"); ?>/img/return_zamer.png" class="img-vertical-middle">Вызвать замерщика</p></li>
		<li><a href="tel:+78652467979" class="address-link"><img src="<?php bloginfo("template_url"); ?>/img/green-phone.png" class="img-vertical-middle">+7 8652 <b>46 79 79</b></a>
			<a href="">Заказать обратный звонок</a>
			<address><img src="<?php bloginfo("template_url"); ?>/img/green_local.png">г. Ставрополь, ул. Доваторцев 183В</address></li>
	</ul> <!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'oknalux26' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
</div></header><!-- #masthead -->

	<div id="content" class="site-content">
<?php  if ( function_exists( 'yoast_breadcrumb' ) && !is_front_page()) :
	yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' ); endif;
if (is_front_page()) : 
	$cur_month = date("m"); $stock_link = 'http://www.oknalux26.ru/akcii/'; ?>
	<a href="<?php 
		switch ($cur_month) {
		case ($cur_month == '01' || $cur_month == '02' || $cur_month == '12'): echo $stock_link.'#winter-stock'; break;
		case ($cur_month == '03' || $cur_month == '04' || $cur_month == '05'): echo $stock_link.'#spring-stock'; break;
		case ($cur_month == '06' || $cur_month == '07' || $cur_month == '08'): echo $stock_link.'#summer-stock'; break;
		case ($cur_month == '09' || $cur_month == '10' || $cur_month == '11'): echo $stock_link.'#authum-stock'; break;
		default: echo '111'; break;
	} ?>"><img src="<?php  
	 	switch ($cur_month) {
		case ($cur_month == '01' || $cur_month == '02' || $cur_month == '12'): echo bloginfo('template_url').'/img/banner_winter.jpg'; break;
		case ($cur_month == '03' || $cur_month == '04' || $cur_month == '05'): echo bloginfo('template_url').'/img/banner_spring.jpg'; break;
		case ($cur_month == '06' || $cur_month == '07' || $cur_month == '08'): echo bloginfo("template_url").'/img/banner_summer.jpg'; break;
		case ($cur_month == '09' || $cur_month == '10' || $cur_month == '11'): echo bloginfo("template_url").'/img/banner_autum.jpg'; break;
		default: echo '111'; break;
	} ?>" alt=""></a>
<?php endif; ?>
