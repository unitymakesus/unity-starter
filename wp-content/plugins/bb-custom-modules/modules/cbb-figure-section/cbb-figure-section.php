<?php

class CbbFigureSectionModule extends FLBuilderModule {

	public function __construct() {
		parent::__construct(array(
			'name'            => __( 'Figure Section', 'fl-builder' ),
			'description'     => __( '', 'fl-builder' ),
			'icon'            => 'card.svg',
			'category'        => __( 'Layout', 'fl-builder' ),
			'dir'             => CBB_MODULES_DIR . 'modules/cbb-figure-section/',
			'url'             => CBB_MODULES_URL . 'modules/cbb-figure-section/'
		));

		// Include custom CSS
		// $this->add_css('cbb-figure-section', CBB_MODULES_URL . 'dist/styles/cbb-figure-section.css');
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
FLBuilder::register_module('CbbFigureSectionModule', [
	'cbb-figure-section-general' => [
		'title'    => __('General', 'cbb'),
		'sections' => [
			'cbb-figure-section-structure' => [
				'title'  => __('Layout', 'cbb'),
				'fields' => [
					'background_image' => [
						'type'  => 'photo',
						'label' => __('Background Image', 'cbb'),
					],
					'image_alt' => [
						'type'  => 'text',
						'label' => __('Image Alt Text', 'cbb'),
					],
					'figure_align' => [
						'type'    => 'select',
						'label'   => __('Figure Alignment', 'cbb'),
						'default' => 'left',
						'options' => [
							'left'  => __('Left', 'cbb'),
							'right' => __('Right', 'cbb')
						]
					]
				]
			],
			'cbb-figure-section-content' => [
				'title'  => __('Content', 'cbb'),
				'fields' => [
					'title' => [
						'type'  => 'text',
						'label' => __('Title', 'cbb'),
					],
					'content' => [
						'type'          => 'editor',
						'label'         => '',
						'media_buttons' => false,
						'rows'          => 4,
					],
					'cta_text' => [
						'type'  => 'text',
						'label' => __('CTA Text', 'cbb'),
					],
					'cta_link' => [
						'type'        => 'link',
						'label'       => __('CTA Link', 'cbb'),
						'show_target' => true,
					],
				]
			],
		]
	]
]);
