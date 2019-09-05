<?php 
get_header(); 

$topHeadline = get_field('top_headline');
$topText = get_field('top_text');
$aboutImage = get_field('about_image');
$aboutHeadline = get_field('about_headline');
$aboutText = get_field('about_text');
$servicesHeadline = get_field('services_headline');
$services = get_field('services');
$servicesText = get_field('services_text');
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

    <?php //TODO: add repeater for each service ?>

    <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
      <?php get_template_part('../layout/service'); ?>
    <?php endwhile; endif; ?>

    <a class="scroll-anchor" id="contact"></a>
    <a class="call" href="tel:520-256-4237" title="To find out more about Latin Rogue Cleaning's rates or services call (757) 812-3603 today!">(757) 812-3603</a>

    <div class="quotes">
      <div>
        <p>Latin Rogue Cleaning is, without a doubt, the most responsive cleaning service I have ever used in all my years of property and facilities management services. They respond quickly unlike many of their competitors and the service is always first rate.</p>
        <p class="quote-name">Jim Stevenson</p>
      </div>

      <div>
        <p>I have used several cleaning companies for my offices but nobody is as reliable and consistent as Latin Rogue Cleaning Services. They are the best. </p>
        <p class="quote-name">Susan Black</p>
      </div>

      <div>
        <p>Latin Rogue Cleaning is a lifesaver! Without them I wouldn't have had the time (or the energy) to throw my sister's baby shower! Thanks to Latin Rogue Cleaning my party was a success!</p>
        <p class="quote-name">Lisa Turner</p>
      </div>
    </div>
  </section>
</div>

<a class="scroll-anchor" id="quote"></a>
<div class="bottom">
	<section>
    <article class="quote-left">
      <header>
        <h1>free quote</h1>
        <h2>You're Minutes Away from a free estimate!</h2>
      </header>
      
      <?php query_posts('page_id=26'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; endif; wp_reset_query(); ?>
    </article>

    <div class="quote-right">
      <?php echo do_shortcode('[formidable id=2]'); ?>
    </div>
  </section>

  <?php get_footer(); ?>
</div>