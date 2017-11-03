<?php
/*
Plugin Name: Wordpress Event Tickets
Version: 0.1.0
 */

/*
 * Installation
 */
require_once(dirname(__FILE__).'/modules/install.php');
require_once(dirname(__FILE__).'/modules/remove.php');
register_activation_hook(__FILE__, 'wpt_install');
register_deactivation_hook(__FILE__, 'wpt_remove');

/*
 * Init hooks
 */
add_action('init', 'wpt_setup_post_types');
add_action('init', 'wpt_event_hierarchy');