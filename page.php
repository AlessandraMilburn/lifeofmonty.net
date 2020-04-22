<?php
  get_header(); 
  get_template_part( 'template-parts/sub-header', 'page' );

// pages 
  if (is_page('products')) {
    get_template_part( 'template-parts/pages/products', 'page' );
  } else if (is_page('training')) {
    get_template_part( 'template-parts/pages/training', 'page' );
  } else {
    get_template_part( 'template-parts/pages/stories', 'page' );
  }
?>
  </main>
  <?php get_footer(); ?>

