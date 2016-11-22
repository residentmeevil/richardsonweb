<?php

    $wp_customize->add_section(
        'typography_section_one',
        array(
            'title' => 'Typography',
            'description' => 'Customize the site typography.',
            'priority' => 10,
            'panel' => 'rw_panel'
        )
    );

    //Global font

    $wp_customize->add_setting(
        'site_default',
        array(
            'default' => 'Roboto',
        )
    );

    $wp_customize->add_control(
        'site_default',
        array(
            'type' => 'select',
            'label' => 'Site Default:',
            'section' => 'typography_section_one',
            'choices' => include('googlefonts.php'),
        )
    );

    //Site title

    $wp_customize->add_setting(
        'site_title',
        array(
            'default' => 'Roboto',
        )
    );

    $wp_customize->add_control(
        'site_title',
        array(
            'type' => 'select',
            'label' => 'Site Title:',
            'section' => 'typography_section_one',
            'choices' => include('googlefonts.php'),
        )
    );

    //Site headings

    $wp_customize->add_setting(
        'site_headings',
        array(
            'default' => 'Roboto',
        )
    );

    $wp_customize->add_control(
        'site_headings',
        array(
            'type' => 'select',
            'label' => 'Site Headings:',
            'section' => 'typography_section_one',
            'choices' => include('googlefonts.php'),
        )
    );




?>
