<?php
// Setup
define('BOOTSTRAPTOPIC_DEV_MODE', false);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/custom-nav-walker.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/taxonomies.php');
include get_theme_file_path('includes/custom-post-types.php');

// Hooks
add_action('wp_enqueue_scripts', 'bootkit_enqueue');
add_action('after_setup_theme', 'bootkit_setup_theme');
add_action('widgets_init', 'bootkit_widgets');
add_action('init', 'bootkit_taxonomies');
add_action('init', 'bootkit_register_post_type_init');
// Shortcodes