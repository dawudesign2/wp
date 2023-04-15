<?php

if (!function_exists('setup_theme')) {
    function setup_theme()
    {
        //ADD THEME SUPPORT
        add_theme_support('post-thumbnails', [
            'page',
            'post',
            'movie'
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support(
            'post-formats',
            ['link', 'aside', 'gallery', 'image', 'quote', 'status', 'video', 'audio', 'chat',]
        );
        add_theme_support(
            'html5',
            ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style',]
        );

        // REMOVE ACTION
        remove_action('wp_head', 'wp_generator');
    }
}
