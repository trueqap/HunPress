<?php
/*
Plugin Name: HunPress
Plugin URI:  https://github.com/trueqap/HunPress
Description: WordPress és WooCommerce magyar fordítások
=======
Version:     0.0.1
Author:      HelloWP.io
Author URI:  https://hellowp.io/hu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hunpress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!defined('HP_MODULES')) {
    define('HP_MODULES', plugin_dir_path(__FILE__) . 'modules/');
}

include_once ABSPATH . 'wp-admin/includes/plugin.php';

require_once 'modules.php';
