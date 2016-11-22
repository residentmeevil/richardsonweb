<?php

    $wp_customize->add_section(
        'header_section_one',
        array(
            'title' => 'Header',
            'description' => 'Customize the site header.',
            'priority' => 10,
            'panel' => 'rw_panel'
        )
    );


    $wp_customize->add_setting(
            'lp-image_selector',
            array(
                'default' => '',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'lp-image_selector',
                array(
                    'label' => 'Landing Page Header Image',
                    'section' => 'header_section_one',
                    'settings' => 'lp-image_selector'
                )
            )
        );


?>
