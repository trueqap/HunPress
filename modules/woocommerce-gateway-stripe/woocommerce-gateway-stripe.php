<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('woocommerce-gateway-stripe/woocommerce-gateway-stripe.php')) {
    load_textdomain('woocommerce-gateway-stripe', HP_MODULES.'woocommerce-gateway-stripe' . '/woocommerce-gateway-stripe-hu_HU.mo');
}
