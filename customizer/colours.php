<?php
  $wp_customize->add_section(
    'rw_colours',
    array(
        'title' => 'Colours',
        'description' => 'Customize the site colours.',
        'priority' => 20,
        'panel' => 'rw_panel'
    )
);

    $wp_customize->add_setting(
        'site_color',
        array(
            'default' => 'red',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'site_color',
            array(
                'label' => 'Site Colour',
                'section' => 'rw_colours',
                'settings' => 'site_color'
            )
        )
    );




?>
