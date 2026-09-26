<?php
if (!defined('ABSPATH')) { exit; }

function edl_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Hauptnavigation', 'edl-ghana')));
}
add_action('after_setup_theme', 'edl_setup');

function edl_assets() {
    wp_enqueue_style('edl-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('edl-main', get_template_directory_uri() . '/assets/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'edl_assets');

function edl_excerpt_length() { return 20; }
add_filter('excerpt_length', 'edl_excerpt_length');

function edl_fallback_menu() {
    echo '<ul class="nav-list">';
    echo '<li><a href="' . esc_url(home_url('/#ueber-uns')) . '">Über uns</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#projekt')) . '">Unser Projekt</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#aktuelles')) . '">Aktuelles</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#kontakt')) . '">Kontakt</a></li>';
    echo '</ul>';
}
