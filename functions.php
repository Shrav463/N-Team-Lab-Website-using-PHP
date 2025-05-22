<?php
// Theme setup: title tag and menu support
function nteam_lab_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'nteam_lab_theme_setup');

// Enqueue styles and scripts
function nteam_lab_enqueue_assets() {
    // Load main stylesheet
    wp_enqueue_style('nteam-style', get_stylesheet_uri());

    // Register JavaScript file
    wp_register_script(
        'lab-script',
        get_template_directory_uri() . '/Lab_website.js',
        array(),
        null,
        true // Load in footer
    );

    // Pass theme directory URL to JS
    wp_localize_script('lab-script', 'labData', array(
        'themeUrl' => get_template_directory_uri()
    ));

    // Enqueue the script
    wp_enqueue_script('lab-script');
}
add_action('wp_enqueue_scripts', 'nteam_lab_enqueue_assets');
