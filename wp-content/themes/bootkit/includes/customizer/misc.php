<?php
function bootkit_misc_customizer_section($wp_customize)
{
    $wp_customize->add_section('bootkit_misc_section', [
        'title' => __('Bootkit Additional Settings', 'bootkit'),
        'priority' => 40,
    ]);
    $wp_customize->add_setting('bootkit_header_show_search', [
        'default' => 'yes',
    ]);
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_header_show_search_input',
        array(
            'label' => __('Show Search Button in Header', 'bootkit'),
            'section' => 'bootkit_misc_section',
            'settings' => 'bootkit_header_show_search',
            'type' => 'checkbox',
            'choices' => [
                'yes' => 'Yes',
            ],
        )
    ));
    $wp_customize->add_setting('bootkit_footer_copyright_text', array(
        'default' => 'Copyrights &copy; 2022 All Rights Reserved.',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_footer_copyright_text_input',
        array(
            'label' => 'Copyrights',
            'section' => 'bootkit_misc_section',
            'settings' => 'bootkit_footer_copyright_text',
        )
    ));
}
