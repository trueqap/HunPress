<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('woocommerce-subscriptions/woocommerce-subscriptions.php')) {
    load_textdomain('woocommerce-subscriptions', HP_MODULES.'woocommerce-subscriptions' . '/woocommerce-subscriptions-hu_HU.mo');
}
