<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

?>

<div class='banner banner-page'>
  <div class='banner-background'></div>
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>
<article id='post-<?php the_ID(); ?>' class='entry-content'>
	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ads' ),
			'after'  => '</div>',
		) );
	?>
</article><!-- #post-## -->
<?php get_template_part('assets/views/editbar') ?>
