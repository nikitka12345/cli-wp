<?php
/**
 * Plugin Name: Hooks example
 */
function hooked_title($title)
{
    return ' <div style="color:red; gfont-size:30px;"> &hearts;</div> ' . $title . ' <div style="color:red; gfont-size:30px;"> &hearts; </div>';
}
add_filter('the_title', 'hooked_title');
function added_footer()
{
    echo '<div style="color:red; gfont-size:30px;">&hearts; &hearts; &hearts; </div';
}
add_action('wp_footer', 'added_footer');