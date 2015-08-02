<?php
/**
 * Plugin Name: Mailchimp subscription for Ninja Forms
 * Plugin URI: http://www.itinko.nl
 * Description: Save e-mail addresses to Mailchimp. Based on the plugin ninja-pushbullet-notify by Dan Jones.
 * Version: 0.1.0
 * Author: Björn Kuipers
 * Author URI: http://www.itinko.nl/
 * License: MIT
 */

function add_ninja_forms_mailchimp_subscribe($types) {
    $types['mailchimp-subscribe'] = require_once plugin_dir_path( __FILE__ ).'plugin.php';
    return $types;
}
add_filter('nf_notification_types', 'add_ninja_forms_mailchimp_subscribe');
