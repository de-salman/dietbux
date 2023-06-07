<?php
// Enqueue scripts and styles
function mytheme_enqueue_scripts()
{
    // Enqueue custom.js
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
