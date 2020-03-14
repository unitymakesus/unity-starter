<?php
/**
 * Case Study Card Module - Front End
 */
?>

<div class="card card__navigation">
  <?php if (!empty($settings->image)) : ?>
    <div class="card__image" style="background-image:url(<?php echo wp_get_attachment_image_src($settings->image, 'medium')[0]; ?>);"></div>
  <?php endif; ?>
  <a class="card__link a11y-link-wrap" href="<?php echo $settings->cta_link; ?>">
    <?php echo $settings->cta_text; ?>
  </a>
</div>
