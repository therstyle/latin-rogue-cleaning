<?php get_header(); ?>

<?php 
  if(is_front_page()) {
    get_template_part('components/pages/home');
  }
  else {
    get_template_part('components/pages/default');
  }
?>

<?php get_footer(); ?>