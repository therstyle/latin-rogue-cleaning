<?php 
get_header(); 

$topHeadline = get_field('top_headline');
$topText = get_field('top_text');
$aboutImage = get_field('about_image');
$aboutHeadline = get_field('about_headline');
$aboutText = get_field('about_text');
$servicesHeadline = get_field('services_headline');
$servicesText = get_field('services_text');
$phone = get_field('phone');
$contactHeadline = get_field('contact_headline');
$contactText = get_field('contact_text');
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

<a class="scroll-anchor" id="about"></a>
<div class="about">
	<section>
    <article>
      <div class="about-left">
        <?php 
        if($aboutImage) {
          echo wp_get_attachment_image($aboutImage, 'full');
        }
        ?>
      </div>

      <div class="about-right">
        <?php if($aboutHeadline): ?>
          <header>
            <?php echo $aboutHeadline; ?>
          </header>
        <?php endif; ?>

        <?php
        if ($aboutText) {
          echo $aboutText;
        }
        ?>
      </div>
    </article>
	</section>
</div>

<a class="scroll-anchor" id="services"></a>
<div class="services">
	<section>
    <article class="services-summary">
      <?php if($servicesHeadline): ?>
        <header>
          <h1><?php echo $servicesHeadline; ?></h1>
        </header>
      <?php endif; ?>
      
      <?php echo $servicesText; ?>
    </article>

    <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
      <?php get_template_part('../layout/service'); ?>
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

<a class="scroll-anchor" id="quote"></a>
<div class="bottom">
	<section>
    <article class="quote-left">
      <?php if($contactHeadline): ?>
        <header>
          <?php echo $contactHeadline; ?>
        </header>
      <?php endif; ?>
      
      <?php 
      if($contactText) {
        echo $contactText;
      }
      ?>
    </article>

    <div class="quote-right">
      <?php 
      if($contactForm) {
        echo $contactForm;
      }
      ?>
    </div>
  </section>

  <?php get_footer(); ?>
</div>