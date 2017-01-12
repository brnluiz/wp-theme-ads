<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

$size = array('brick-1', 'brick-2', 'brick-3');
shuffle($size);
?>

<?php if (get_post_type() == 'project' && has_post_thumbnail()) : ?>
<article id="post-<?php the_ID(); ?>" class='brick <?=$size[0]?>'>
  <a href='<?php echo esc_url(get_permalink()) ?>' >
    <div class='paint'>
      <?php the_title( '<title class="entry-title">', '</title>' ) ?>
    </div>
    <?php the_post_thumbnail('medium_large') ?>
  </a>
</article>

<?php endif; ?>