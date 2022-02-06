<?php
function bootkit_customize_register($wp_customize)
{
    $wp_customize->add_setting('bootkit_facebook_handle', ['default' => '',]);
}
}