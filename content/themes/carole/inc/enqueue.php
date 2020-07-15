<?php

// style function
if (!function_exists('carole_guidon_enqueue')){

    function carole_guidon_enqueue()
    {
        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '20200708'
        );
        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '20200708',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'carole_guidon_enqueue');


if (!function_exists('carole_guidon_setup')) {

    function carole_guidon_setup() {

        // On va ajouter des fonctionnalités à notre thème


        // Prise en charge des images mises en avant
        add_theme_support('post-thumbnails');

        // Création d'emplacement(s) de menu
        register_nav_menus([
            'header-menu' => 'Menu latéral de la home',
            'footer-menu' => 'Menu des pages'
            //...
        ]);
    }

}

add_action('after_setup_theme', 'carole_guidon_setup');


// function to add categories to pages https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type/
function add_categories_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
    }
   add_action( 'init', 'add_categories_to_pages' );


// function to add categories to articles
function add_tags_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    }
    add_action( 'init', 'add_tags_to_pages');


/**
 * Filter the except length to 10 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




//display the sub-categories of "blog-article" category