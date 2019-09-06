<?php
$phone = get_field('phone');
$contactHeadline = get_field('contact_headline');
$contactText = get_field('contact_text');
$contactForm = get_field('contact_form');
?>

<a class="scroll-anchor" id="quote"></a>
<div class="bottom">
	<section class="wrapper">
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