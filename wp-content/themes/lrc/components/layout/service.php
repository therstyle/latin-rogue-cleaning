<?php
$serviceHeadline = get_sub_field('service_headline');
$serviceImage = get_sub_field('service_image');
$serviceText = get_sub_field('service_text');
?>

<article class="service">
  <?php if($serviceHeadline || $serviceImage): ?>
    <header>
      <?php 
      if ($serviceImage) {
        echo wp_get_attachment_image($serviceImage, 'full');
      }
      
      elseif ($serviceHeadline) {
        echo '<h3>'.$serviceHeadline.'</h3>';
      }
      ?> 
    </header>

    <?php
    if ($serviceText) {
      echo $serviceText;
    }
    ?>
  <?php endif; ?>
</article>