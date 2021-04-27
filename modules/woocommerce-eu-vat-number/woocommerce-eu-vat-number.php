<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('woocommerce-eu-vat-number/woocommerce-eu-vat-number.php')) {
    load_textdomain('woocommerce-eu-vat-number', HP_MODULES.'woocommerce-eu-vat-number' . '/woocommerce-eu-vat-number-hu_HU.mo');
}
