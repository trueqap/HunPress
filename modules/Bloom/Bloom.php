<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('bloom/bloom.php')) {
    load_textdomain('bloom', HP_MODULES.'Bloom' . '/lang/bloom-hu_HU.mo');
}
