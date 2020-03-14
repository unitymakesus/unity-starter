<?php
/**
 * Navigation Card Module - Front End
 */
?>

<div class="card card--navigation">
  <?php if (!empty($settings->background_image)) : ?>
    <div class="card__background" style="background-image:url(<?php echo wp_get_attachment_image_src($settings->background_image, 'medium')[0]; ?>);"></div>
  <?php endif; ?>
  <a class="card__link a11y-link-wrap" href="<?php echo $settings->cta_link; ?>">
    <?php echo $settings->cta_text; ?>
  </a>
</div>
