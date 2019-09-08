<?php 
$topHeadline = get_field('top_headline');
$topText = get_field('top_text');
?>

<a class="scroll-anchor" id="top"></a>
<div class="top">  
  <section class="wrapper">
    <div class="absolute">
      <img src="<?php echo bloginfo('template_directory'); ?>/src/images/latinrogue.svg" class="latinrogue" alt="<?php echo bloginfo('name');?>">
    </div>
      
    <div class="top-content">
      <?php echo $topHeadline; ?>
      <?php echo $topText; ?>
    </div>
  </section>
</div>