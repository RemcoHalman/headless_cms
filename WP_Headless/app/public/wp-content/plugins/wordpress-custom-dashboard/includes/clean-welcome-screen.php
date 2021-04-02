<?php

remove_action('welcome_panel', 'wp_welcome_panel');
function remove_dashboard_meta()
{
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    // remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // Shows current count of pages, posts etc
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('woocommerce_dashboard_recent_reviews', 'dashboard', 'normal');
    remove_meta_box('dlm_popular_downloads', 'dashboard', 'normal');
}
add_action('admin_init', 'remove_dashboard_meta');

function wpb_remove_version()
{
    return '';
}
add_filter('the_generator', 'wpb_remove_version');