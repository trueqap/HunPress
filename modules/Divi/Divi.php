<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (wp_get_theme() == 'Divi' || wp_get_theme()->parent() == 'Divi') {
    // Divi javítások
    include(HP_MODULES.'Divi/timeline.php');
    include(HP_MODULES.'Divi/authors.php');
   

    // felülírjuk az eredeti magyar fordítáast

    
    // szinkronizáljuk a WordPress dátumformátumával a Divi-t
    add_action('plugins_loaded', 'load_magyar_datum_divi');
    add_action('plugins_loaded', 'load_magyar_nyelv_divi');
    function load_magyar_nyelv_divi()
    {
        load_textdomain('Divi', HP_MODULES.'Divi' . '/lang/Divi-hu_HU.mo');
        load_textdomain('et_builder', HP_MODULES.'Divi' . '/lang/et_builder-hu_HU.mo');
    }

    function load_magyar_datum_divi()
    {
        $get_divi_date_format                     = get_option('et_divi');
        $get_divi_date_format['divi_date_format'] = get_option('date_format');
        update_option('et_divi', $get_divi_date_format);
    }

    //add_action('admin_menu', 'divi_magyarul_menu', 30);
    function divi_magyarul_menu()
    {
        global $page_options;
        add_submenu_page('et_divi_options', __('Divi magyarul', 'divi-magyarul'), __('Divi magyarul', 'divi-magyarul'), 'manage_options', 'divi_magyarul', 'divi_magyarul');
    }
}
