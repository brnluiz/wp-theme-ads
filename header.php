<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id='content'>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ads
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='profile' href='http://gmpg.org/xfn/11'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id='page' class='site'>
	<a class='skip-link screen-reader-text' href='#content' ><?php esc_html_e( 'Skip to content', 'ads' ); ?></a>

	<?php if (is_front_page() && is_home()) : ?>
	<header id='masthead' class='header-landing' role='banner'>
		<div class='header-background' style='background-image:url(<?php header_image() ?>)'></div>
		<div class='site-title'>
			<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'>
				<img src='<?php echo get_template_directory_uri() . '/dist/imgs/logo.png' ?>' />
			</a>
		</div>
		<nav id='landing-nav' class='site-nav' role='navigation'>
			<ul>
				<?php wp_nav_menu(array('theme_location' => 'landing', 'container' => false )) ?>
			</ul>
		</nav>
	</header>
	<?php else: ?>
	<header id='masthead' class='header-pages' role='banner'>
		<div class='site-title'>
			<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'>
				<img src='<?php echo get_template_directory_uri() . '/dist/imgs/logo.png' ?>' />
				<ul class='menu'>
					<li class='social-item'><a href='#'><i class='fa fa-pinterest'></i></a></li>
					<li class='social-item'><a href='#'><i class='fa fa-instagram'></i></a></li>
					<li class='social-item'><a href='#'><i class='fa fa-youtube'></i></a></li>
				</ul>
			</a>
		</div>
		<nav id='site-nav' class='site-nav' role='navigation'>
			<ul class='menu'>
				<?php wp_nav_menu(array('theme_location' => 'general', 'container' => false, 'items_wrap' => '%3$s' )) ?>
			</ul>
		</nav>
	</header>
	<?php endif; ?>

	<div id='content' class='site-content'>
