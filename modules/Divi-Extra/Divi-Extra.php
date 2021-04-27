<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (wp_get_theme() == 'Extra' || wp_get_theme()->parent() == 'Extra') {
    require_once 'extra.php';

    add_action('plugins_loaded', 'load_magyar_nyelv_extra');

    function load_magyar_nyelv_extra()
    {
        load_textdomain('extra', HP_MODULES.'Extra' . '/lang/extra-hu_HU.mo');
        load_textdomain('Extra', HP_MODULES.'Extra' . '/lang/Extra-hu_HU.mo');
        load_textdomain('et_builder', HP_MODULES.'Extra' . '/lang/et_builder-hu_HU.mo');
        load_textdomain('et-core', HP_MODULES.'Extra' . '/lang/et-core-hu_HU.mo');
    }
}
