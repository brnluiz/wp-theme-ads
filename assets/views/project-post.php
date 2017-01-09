<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

?>

<?php if (has_post_thumbnail() && get_field('gallery')) : ?>
<article id='post-<?php the_ID(); ?>'>
  <div class='banner'>
    <div class='banner-background' style='background-image:url("<?php echo the_post_thumbnail_url() ?>")'></div>
    <?php the_title( '<h2 class="entry-title">', '</h2>' ) ?>
  </div>
  <div class='content'>
    <div class='description'>
      <?php the_content() ?>
    </div>
    
    <div class='gallery'>
    <?php $images = get_field('gallery'); ?>
      <div class='thumbs-list'>
        <?php foreach( $images as $image ): ?>
        <div class='thumbs-item'>
          <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
            <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
          <?php // echo $image['caption']; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</article>
<?php endif; ?>