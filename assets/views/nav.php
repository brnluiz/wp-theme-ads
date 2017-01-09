<ul class='menu'>
  <?php foreach(get_terms(array('taxonomy' => 'skill', 'hide_empty' => false)) as $skill): ?>
  <li class='menu-item'>
    <a href='<?php echo esc_url(home_url('/skills/'.$skill->slug)) ?>'>
      <?php echo $skill->name ?>
    </a>
  </li>
  <?php endforeach; ?>
  
  <?php wp_nav_menu(array(
    'theme_location' => 'general', 
    'container' => false, 
    'items_wrap' => '%3$s'
  )); ?>
</ul>