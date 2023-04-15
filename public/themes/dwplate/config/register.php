<?php

add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get("Version");
    wp_enqueue_style('app', get_template_directory_uri().'/assets/css/app.css', [], $theme_version, 'all');
});
