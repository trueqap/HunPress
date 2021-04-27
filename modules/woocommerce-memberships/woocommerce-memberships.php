<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('woocommerce-memberships/woocommerce-memberships.php')) {
    load_textdomain('woocommerce-memberships', HP_MODULES.'woocommerce-memberships' . '/woocommerce-memberships-hu_HU.mo');
}
