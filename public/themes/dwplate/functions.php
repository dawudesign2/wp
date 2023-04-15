<?php

function dwplate_load_files($dir, $files, string $prefix = '')
{
    foreach ($files as $file) {
        if (is_file($dir . $prefix . $file . ".php")) {
            require_once($dir . $prefix . $file . ".php");
        }
    }
}

dwplate_load_files(get_template_directory() . '/config/', [
    'setup_theme',
    'register',
]);
