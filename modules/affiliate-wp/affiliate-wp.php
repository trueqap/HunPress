<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('affiliate-wp/affiliate-wp.php')) {
    load_textdomain('affiliate-wp', HP_MODULES.'affiliate-wp' . '/affiliate-wp-hu_HU.mo');
}
