<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ads
 */

get_header(); ?>

  <main id="main" class="project-main" role="main">
  <?php while (have_posts()) : the_post();
    get_template_part('assets/views/project-post');
  endwhile; ?>
  </main>
<?php
get_footer();
