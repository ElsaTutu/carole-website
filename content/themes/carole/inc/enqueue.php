<?php

// style function
if (!function_exists('carole_guidon_enqueue')){
    function obook_enqueue()
    {
        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('./public/css/style.css'),
            [],
            '20200708'
        );
        wp_enqueue_script(
            'app',
            get_theme_file_uri('./public/js/app.js'),
            [],
            '20200708',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'carole_guidon_enqueue');