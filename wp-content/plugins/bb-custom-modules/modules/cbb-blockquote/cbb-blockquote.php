<?php

class CbbBlockquoteModule extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'        => __( 'Quote', 'fl-builder' ),
			'description' => __( 'A simple blockquote module with cite text.', 'fl-builder' ),
			'icon'        => 'card.svg',
			'category'    => __( 'Basic', 'fl-builder' ),
			'dir'         => CBB_MODULES_DIR . 'modules/cbb-blockquote/',
			'url'         => CBB_MODULES_URL . 'modules/cbb-blockquote/',
		));
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
FLBuilder::register_module('CbbBlockquoteModule', [
	'cbb-blockquote-general' => [
		'title'    => __( 'General', 'cbb' ),
		'sections' => [
			'cbb-blockquote-content' => [
				'title'  => __( 'Content', 'cbb' ),
				'fields' => [
					'quote' => [
						'type'  => 'text',
						'label' => __('Text', 'cbb'),
					],
					'cite' => [
						'type'  => 'text',
						'label' => __('Cite', 'cbb'),
					],
				]
			],
		]
	]
]);
