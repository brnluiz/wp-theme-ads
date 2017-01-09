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
	<header id='masthead' class='landing' role='banner'>
		<h1 class='site-title'>
			<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'>
				<img src='<?php echo get_template_directory_uri() . '/dist/imgs/logo.png' ?>' />
			</a>
		</h1>
		<nav id='site-navigation' role='navigation'>
			<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )) ?>
		</nav>
	</header>
	<?php else: ?>
	<header id='masthead' class='pages' role='banner'>
		<div class='row'>
			<div class='pages'>
				<p class='site-title'>
					<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'><?php bloginfo('name'); ?></a>
				</p>
				<nav id='site-navigation' role='navigation'>
					<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )) ?>
				</nav>
			</div>
		</div>
	</header>
	<?php endif; ?>

		</div>
	</header><!-- #masthead -->

	<div id='content' class='site-content'>
