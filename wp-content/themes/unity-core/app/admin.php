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

/**
 * Disable WP update notice(s) if ManageWP is active.
 */
add_action('admin_head', function () {
    if (is_plugin_active('worker/init.php')) {
        remove_action('admin_notices', 'update_nag', 3);
        remove_action('network_admin_notices', 'update_nag', 3);
    }
});
