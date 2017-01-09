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

	<header id='masthead' role='banner'>
		<div class='row'>
			<?php if (is_front_page() && is_home()) : ?>
			<div class='landing'>
				<h1 class='site-title'>
					<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'>
						<img src='<?php echo get_template_directory_uri() . '/dist/imgs/logo.png' ?>' />
					</a>
				</h1>
				<nav id='site-navigation' role='navigation'>
					<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )) ?>
				</nav>
			</div>
			<?php else : ?>
			<div class='pages'>
				<p class='site-title'>
					<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'><?php bloginfo('name'); ?></a>
				</p>
				<nav id='site-navigation' role='navigation'>
					<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )) ?>
				</nav>
			</div>
			<?php endif; ?>

		</div>
	</header><!-- #masthead -->

	<div id='content' class='site-content'>
