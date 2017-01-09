<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

?>

<section class="no-results not-found">
	<div class='banner'>
    <div class='banner-background'></div>
    <h2>
    	<?php esc_html_e( 'Nothing Found', 'ads' ); ?>
    	<a href='<?php echo site_url() ?>'>Ir para Home</a>
    </h2>
  </div>
</section><!-- .no-results -->
