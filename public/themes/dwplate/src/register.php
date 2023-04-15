<?php

function register_styles() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style("dwplate", get_template_directory_uri() . "/assets/css/app.css", [], $theme_version, "all");
}

add_action("wp_enqueue_scripts", "register_styles");