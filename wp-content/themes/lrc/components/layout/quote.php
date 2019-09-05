<?php
$quote = get_sub_field('quote_text');
$quoteName = get_sub_field('quote_name');
?>

<?php if($quote): ?>
  <div>
    <?php echo $quote; ?>

    <?php if($quoteName): ?>
      <p class="quote-name">
        <?php echo $quoteName; ?>
      </p>
    <?php endif; ?>
  </div>
<?php endif; ?>