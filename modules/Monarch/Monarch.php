<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_plugin_active('monarch/monarch.php')) {
    load_textdomain('Monarch', HP_MODULES.'Monarch' . '/lang/Monarch-hu_HU.mo');
}
