<?php $pages = paginate_links(array(
  'base'               => '%_%',
  'format'             => '?paged=%#%',
  'end_size'           => 2,
  'mid_size'           => 3,
  'prev_next'          => true,
  'prev_text'          => __('« Anterior'),
  'next_text'          => __('Próximo »'),
  'type'               => 'list',
  'add_args'           => false,
  'add_fragment'       => '',
  'before_page_number' => '',
  'after_page_number'  => ''
)); ?>

<?php echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $pages ) ?>