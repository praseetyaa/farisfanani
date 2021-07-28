<?php
/**
 * theme_wp_setup
 * setup dasar untuk konfigurasi theme
 */
function theme_wp_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    // pengganti tag <title></title>
    add_theme_support('title-tag');

    // mengaktifkan post thumbnail
    add_theme_support('post-thumbnails');

    /* Register Menu */
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'theme_wp_setup');
