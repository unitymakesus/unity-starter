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
