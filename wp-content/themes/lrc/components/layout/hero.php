<?php 
$topHeadline = get_field('top_headline');
$topText = get_field('top_text');
?>

<a class="scroll-anchor" id="top"></a>
<div class="top">  
  <section class="wrapper">
    <div class="absolute">
      <img src="<?php echo bloginfo('template_directory'); ?>/src/images/latinrogue.svg" class="latinrogue" alt="">
    </div>
      
    <?php echo $topHeadline; ?>
    <?php echo $topText; ?>
  </section>
</div>