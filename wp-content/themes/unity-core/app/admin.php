<?php

namespace App;

/**
 * Clean up the dashboard.
 *
 * @return void
 */
add_action('wp_dashboard_setup', function () {
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
});

/**
 * Disable auto-updates for plugins and themes.
 *
 * @since 5.5
 */
add_filter('plugins_auto_update_enabled', '__return_false');
add_filter('themes_auto_update_enabled', '__return_false');
