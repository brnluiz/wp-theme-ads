<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ads
 */

get_header(); 

?>

  <main id='main' class='skills-main' role='main'>
    <?php if (have_posts()) : ?>
    
    <div id='freewall' class='free-wall'>
    <?php while (have_posts()) : the_post();
      get_template_part('assets/views/project', get_post_format());
    endwhile; ?>
    </div>
    
    <?php else:
      get_template_part( 'assets/views/content', 'none' );
    endif; ?>

    <?php get_template_part('assets/views/pagination'); ?>
  </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
