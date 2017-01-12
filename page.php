<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

get_header(); ?>

	<main id="main" class="page-main" role="main">

		<?php while ( have_posts() ) : the_post();
			get_template_part( 'assets/views/content', 'page' );
		endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
