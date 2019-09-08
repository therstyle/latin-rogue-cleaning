<?php
$servicesHeadline = get_field('services_headline');
$servicesText = get_field('services_text');
$callText = get_field('call_text'); 
$phone = get_field('phone_number');
?>

<a class="scroll-anchor" id="services"></a>
<div class="services">
	<section class="wrapper">
    <article>
      <?php if($servicesHeadline): ?>
        <header>
          <?php echo $servicesHeadline; ?>
        </header>
      <?php endif; ?>
      
      <?php echo $servicesText; ?>
    </article>

    <?php if(have_rows('services')): ?>
      <div class="all-services">
        <?php while(have_rows('services')): the_row(); ?>
          <?php get_template_part('components/layout/service'); ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <a class="scroll-anchor" id="contact"></a>
    <div class="services-bottom">
      <?php if($phone): ?>
        <a class="call" href="tel:<?php echo $phone; ?>">
          <h2>
            <small><?php echo $callText; ?></small>
            <?php echo $phone; ?>
          </h2>
        </a>
      <?php endif; ?>
      
      <?php if(have_rows('quotes')):?>
          <div class="quotes">
            <?php while(have_rows('quotes')): the_row(); ?>
              <?php get_template_part('components/layout/quote'); ?>
            <?php endwhile; ?>
          </div>
      <?php endif; ?>
    </div>
  </section>
</div>