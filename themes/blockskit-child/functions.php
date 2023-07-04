<?php


define("THEME_ROOT", trailingslashit(get_stylesheet_directory()));
define("THEME_URI", trailingslashit(get_stylesheet_directory_uri()));

function register_styles()
{
    wp_register_style("landing-style", THEME_URI . "assets/css/landing.css");
    wp_register_style("single-style", THEME_URI . "assets/css/single.css");
}

function enqueue_styles()
{
    if (is_home()) {
        wp_enqueue_style("landing-style");
    }
    if (is_single()) {
        wp_enqueue_style("single-style");
    }
}

function include_theme_files()
{
};



add_action("init", "register_styles");

add_action("wp_enqueue_scripts", "enqueue_styles");
add_action("after_setup_theme", "include_theme_files");
