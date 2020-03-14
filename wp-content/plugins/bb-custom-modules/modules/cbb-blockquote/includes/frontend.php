<?php
/**
 * Blockquote Module - Front End
 */
?>

<blockquote>
  <p><?php echo $settings->quote; ?></p>
  <?php if (!empty($settings->cite)) : ?>
    <footer>
      <cite>— <?php echo $settings->cite; ?></cite>
    </footer>
  <?php endif; ?>
</blockquote>
