<?php
// Подключение стилей и скриптов темы
function domrf_enqueue_assets()
{
    wp_enqueue_style('domrf-main-style', get_template_directory_uri() . '/assets/css/index.css', array(), filemtime(get_template_directory() . '/assets/css/index.css'));
    wp_enqueue_script('domrf-main-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/index.js'), true);
}
add_action('wp_enqueue_scripts', 'domrf_enqueue_assets');
