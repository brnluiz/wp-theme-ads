<?php if ( get_edit_post_link() ) : ?>
<div class='edit-bar'>
  <?php
    edit_post_link(
      sprintf(
        /* translators: %s: Name of current post */
        esc_html__( 'Edit this page %s', 'ads' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
      ),
      '<span class="edit-link">',
      '</span>'
    );
  ?>
</div><!-- .entry-footer -->
<?php endif; ?>