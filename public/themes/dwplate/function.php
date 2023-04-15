<?php
session_start();
/**
 * @param $dir
 * @param $files
 * @param string $prefix
 */

function dwp_load_files($dir, $files, string $prefix = '')
{
    foreach ($files as $file) {
        if (is_file($dir . $prefix . $file . ".php")) {
            require_once($dir . $prefix . $file . ".php");
        }
    }
}

dwp_load_files(get_template_directory() . '/src/', [
    'register',
    'setup_theme',
]);
