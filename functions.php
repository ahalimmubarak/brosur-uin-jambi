<?php
/**
 * Brosur UIN Theme Functions
 */

// Enqueue Tailwind CSS
function brosur_uin_enqueue_assets() {

    // Tailwind output CSS
    wp_enqueue_style(
        'brosur-tailwind',
        get_theme_file_uri('/src/output.css'),
        [],
        filemtime(get_theme_file_path('/src/output.css'))
    );

}
add_action('wp_enqueue_scripts', 'brosur_uin_enqueue_assets');


// Theme supports
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo', [
    'height'      => 60,
    'width'       => 240,
    'flex-height' => true,
    'flex-width'  => true,
]);


// Register menu (optional tapi recommended)
register_nav_menus([
    'primary' => 'Menu Utama'
]);

wp_enqueue_script(
    'brosur-js',
    get_theme_file_uri('/src/main.js'),
    [],
    filemtime(get_theme_file_path('/src/main.js')),
    true
);