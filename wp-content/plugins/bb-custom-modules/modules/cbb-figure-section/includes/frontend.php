<?php
/**
 * Figure Section: Front End
 */
?>

<div class="figure-section figure-section--align-<?php echo $settings->figure_align; ?>">
	<?php if (!empty($settings->background_image)) : ?>
		<div class="figure-section__background" data-parallax-speed="8" style="background-image:url(<?php echo wp_get_attachment_image_src($settings->background_image, 'full')[0]; ?>);"></div>
  <?php endif; ?>
	<div class="container-wide">
		<div class="figure-section__content">
			<div class="figure-section__title"><?php echo $settings->title; ?></div>
			<?php echo $settings->content; ?>
			<?php if (!empty($settings->cta_link)) : ?>
				<a class="figure-section__link" href="<?php echo esc_url($settings->cta_link); ?>"><?php echo $settings->cta_text; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
