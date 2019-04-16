<?php

function mm_customize_register( $wp_customize ) {

$wp_customize->add_section('cta', array(
    'title'    => __('Call To Action'),
    'priority' => 120
));

$wp_customize->add_setting('title_set', array(
    'default'        => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
    'type'           => 'theme_mod'
));

$wp_customize->add_control('title', array(
    'label'      => __('Title'),
    'section'    => 'cta',
    'settings'   => 'title_set'
));

$wp_customize->add_setting('subtitle_set', array(
    'default'        => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod'
));

$wp_customize->add_control('subtitle', array(
    'label'      => __('Subtitle'),
    'section'    => 'cta',
    'settings'   => 'subtitle_set'
));

$wp_customize->add_setting('button_set', array(
    'default'        => 'Contact',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod'
));

$wp_customize->add_control('button', array(
    'label'      => __('Button'),
    'section'    => 'cta',
    'settings'   => 'button_set'
));

$wp_customize->add_setting('url_set', array(
    'default'        => 'http://testing.test/contact',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod'
));

$wp_customize->add_control('url', array(
    'label'      => __('Url'),
    'section'    => 'cta',
    'settings'   => 'url_set'
));

}

add_action('customize_register', 'mm_customize_register');