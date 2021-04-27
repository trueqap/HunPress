<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('payment-gateway-via-paylike-for-woocommerce/woocommerce-gateway-paylike.php')) {
    load_textdomain('woocommerce-gateway-paylike', HP_MODULES.'woocommerce-gateway-paylike' . '/woocommerce-gateway-paylike-hu_HU.mo');
}
