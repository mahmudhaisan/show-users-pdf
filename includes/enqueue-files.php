<?php

function load_plugin_scripts() {


    wp_enqueue_style('filepdf_bootstrap', PLUGINS_PATH_ASSETS . 'css/bootstrap.min.css');
    wp_enqueue_style('filepdf_style', PLUGINS_PATH_ASSETS . 'css/style.css');

    wp_enqueue_script('filepdf_bootstrap', PLUGINS_PATH_ASSETS . 'js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('filepdf_script_jquery', PLUGINS_PATH_ASSETS . 'js/script.js', array('jquery'), false, true);
    wp_enqueue_script('my-script-handle', PLUGINS_PATH_ASSETS . 'js/script.js', array('wp-color-picker'), false, true);
}
add_action('admin_enqueue_scripts', 'load_plugin_scripts');
