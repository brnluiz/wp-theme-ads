<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ads
 */

get_header(); ?>

	<main id='main' class='site-main' role='main'>
		<?php get_template_part( 'assets/views/content', 'none' ) ?>
	</main><!-- #main -->

<?php
get_footer();
