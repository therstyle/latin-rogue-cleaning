<?php
$phone = get_field('phone');
$contactHeadline = get_field('contact_headline');
$contactText = get_field('contact_text');
?>

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