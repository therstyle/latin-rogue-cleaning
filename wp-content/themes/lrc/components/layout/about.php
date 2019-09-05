<?php
$aboutImage = get_field('about_image');
$aboutHeadline = get_field('about_headline');
$aboutText = get_field('about_text');
?>

<a class="scroll-anchor" id="about"></a>
<div class="about">
	<section class="wrapper">
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