<?php

class CbbCaseStudyCardModule extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'        => __( 'Case Study Card', 'fl-builder' ),
			'description' => __( 'A case study card module with image.', 'fl-builder' ),
			'icon'        => 'card.svg',
			'category'    => __( 'Layout', 'fl-builder' ),
			'dir'         => CBB_MODULES_DIR . 'modules/cbb-case-study-card/',
			'url'         => CBB_MODULES_URL . 'modules/cbb-case-study-card/',
		));

		// Include custom CSS
		// $this->add_css('cbb-case-study-card', CBB_MODULES_URL . 'dist/styles/cbb-case-study-card.css');
		// $this->add_js('cbb-cta', CBB_MODULES_URL . 'dist/scripts/cbb-cta.js');
	}

	/**
	 * Function to get the icon for the Figure Card module
	 *
	 * @method get_icons
	 * @param string $icon gets the icon for the module.
	 */
	public function get_icon( $icon = '' ) {
		// check if $icon is referencing an included icon.
		if ( '' != $icon && file_exists( CBB_MODULES_DIR . 'assets/icons/' . $icon ) ) {
			$path = CBB_MODULES_DIR . 'assets/icons/' . $icon;
		}

		if ( file_exists( $path ) ) {
			return file_get_contents( $path );
		} else {
			return '';
		}
	}
}

/*
	Register the module
 */
FLBuilder::register_module('CbbCaseStudyCardModule', [
	'cbb-case-study-card-general' => [
		'title'    => __( 'General', 'cbb' ),
		'sections' => [
			'cbb-case-study-card-content' => [
				'title'  => __( 'Content', 'cbb' ),
				'fields' => [
					'image' => [
						'type'  => 'photo',
						'label' => __('Image', 'cbb'),
					],
					'cta_text' => [
						'type'  => 'text',
						'label' => __('CTA Text', 'cbb'),
					],
					'cta_link' => [
						'type'        => 'link',
						'label'       => __('CTA Link', 'cbb'),
						'show_target' => false,
					],
				]
			],
		]
	]
]);
