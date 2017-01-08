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
			<?php
			if (is_front_page() && is_home()) : ?>
				<h1 class='site-title'>
					<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'><?php bloginfo('name'); ?></a>
				</h1>
			<?php else : ?>
				<p class='site-title'>
					<a href='<?php echo esc_url(home_url('/')); ?>' rel='home'><?php bloginfo('name'); ?></a>
				</p>
			<?php endif; ?>

			<nav id='site-navigation' role='navigation'>
				<?php wp_nav_menu(array(
					'theme_location' => 'menu-1', 
					'menu_id' => 'primary-menu' 
				)); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id='content' class='site-content'>
