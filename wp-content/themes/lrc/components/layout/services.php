<?php
$servicesHeadline = get_field('services_headline');
$servicesText = get_field('services_text');
?>

<a class="scroll-anchor" id="services"></a>
<div class="services">
	<section class="wrapper">
    <article class="services-summary">
      <?php if($servicesHeadline): ?>
        <header>
          <h1><?php echo $servicesHeadline; ?></h1>
        </header>
      <?php endif; ?>
      
      <?php echo $servicesText; ?>
    </article>

    <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
      <?php get_template_part('service'); ?>
    <?php endwhile; endif; ?>

    <a class="scroll-anchor" id="contact"></a>
    <?php if($phone): ?>
      <a class="call" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
    <?php endif; ?>
    
    <?php if(have_rows('quotes')):?>
        <div class="quotes">
          <?php while(have_rows('quotes')): the_row(); ?>
            <?php get_template_part('../layout/quote'); ?>
          <?php endwhile; ?>
        </div>
    <?php endif; ?>
  </section>
</div>