<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

$widths = array('300px', '350px');
shuffle($widths);
?>

<?php if (get_post_type() == 'project' && has_post_thumbnail()) : ?>
<article id="post-<?php the_ID(); ?>" class='brick' style='width:<?=$widths[0]?>;'>
  <a href='<?php echo esc_url(get_permalink()) ?>' >
    <div class='paint'>
      <?php the_title( '<title class="entry-title">', '</title>' ) ?>
    </div>
    <?php the_post_thumbnail() ?>
    <!-- <img src='http://localhost:8000/example/i/photo/1.jpg' > -->
  </a>
</article>
<?php endif; ?>