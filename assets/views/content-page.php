<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

?>

<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
	<div class='banner'>
    <div class='banner-background'></div>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

	<div class='row'>
		<div class='entry-content'>
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ads' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>

	<?php get_template_part('assets/views/editbar') ?>
	
</article><!-- #post-## -->
