<?php

/**
 * Plugin Name: Beaver Builder - Custom Modules
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Unity Digital Agency
 */

define( 'CBB_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'CBB_MODULES_URL', plugins_url( '/', __FILE__ ) );

/**
 * Define Required plugins
 */
function cbb_require_plugins() {
  $requires = array();

	if ( !is_plugin_active('bb-plugin/fl-builder.php') ) {
    $requireds[] = array(
      'link' => 'https://www.wpbeaverbuilder.com/',
      'name' => 'Beaver Builder'
    );
  }

  if ( !empty($requireds) ) {
    foreach ($requireds as $req) {
  		?>
  		<div class="notice notice-error"><p>
  			<?php printf(
  				__('<b>%s Plugin</b>: <a target="_blank" href="%s">%s</a> must be installed and activated.', 'mecft'),
  	      'Beaver Builder - Custom Modules Deactivated',
          $req['link'],
          $req['name']
  			); ?>
  		</p></div>
  		<?php
    }
    deactivate_plugins( plugin_basename( __FILE__ ) );
  }
}

function cbb_check_required_plugins() {
  add_action( 'admin_notices', 'cbb_require_plugins' );
}

add_action( 'admin_init', 'cbb_check_required_plugins' );

function load_custom_modules() {
  if ( class_exists( 'FLBuilder' ) ) {
    require_once 'modules/cbb-blockquote/cbb-blockquote.php';
    require_once 'modules/cbb-figure-section/cbb-figure-section.php';
    require_once 'modules/cbb-navigation-card/cbb-navigation-card.php';
  }
}
add_action( 'init', 'load_custom_modules' );

/**
 * Whitelist modules across Beaver Builder.
 *
 * @param boolean $enables
 * @param object $instance
 */
add_filter( 'fl_builder_register_module', function($enabled, $instance) {
  $whitelist = [
    'heading',
    'photo',
    'video',
    'button',
    'rich-text',
    'html',
    'uabb-image-carousel',
    'cbb-blockquote',
    'cbb-figure-section',
    'cbb-navigation-card',
    'uabb-info-list',
    'uabb-photo',
    'separator',
  ];

  if ( !in_array( $instance->slug, $whitelist ) ) {
    return false;
  }

  return $enabled;
}, 10, 2 );
