<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

?>

<?php if (has_post_thumbnail()) : ?>
<article id='post-<?php the_ID(); ?>'>
  <div class='banner'>
    <div class='banner-background' style='background-image:url("<?php echo the_post_thumbnail_url() ?>")'></div>
    <?php the_title( '<h2 class="entry-title">', '</h2>' ) ?>
  </div>
  <div class='content'>
    <div class='description'>
      <?php the_content() ?>
    </div>
  </div>
</article>
<?php endif; ?>